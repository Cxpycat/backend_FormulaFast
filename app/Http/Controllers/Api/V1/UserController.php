<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function storeUser(StoreRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            return response([
                'message' => 'Email уже занят',
                '$user' => $user,
            ]);
        }
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $token = auth()->tokenById($user->id);

        return response(['access_token' => $token]);
    }

    public function updateUser(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        $images = isset($data['avatar']) ? $data['avatar'] : null;
        $imagesIdForDelete = isset($data['images_id_for_delete']) ? $data['images_id_for_delete'] : null;


        unset($data['images'], $data['images_id_for_delete'], $data['images_url_for_delete'], $data['imageIdForDelete']);

        if ($images) {
            foreach ($images as $image) {
                $name = Carbon::now()->format('d_m_y_H_i_s') . '_' . Str::random(30) . $image->getClientOriginalName();
                $filePath = Storage::disk('public')->putFileAs('/images/avatars', $image, $name);
                $data['avatar'] = url('/storage/' . $filePath);
            }
        }
        $user->update($data);

        return response(['status' => true]);
    }
}
