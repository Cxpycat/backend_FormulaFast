<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Api\User\Carbon;
use App\Http\Controllers\Api\User\Storage;
use App\Http\Controllers\Api\User\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function storeUser(UpdateRequest $request)
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

    public function updateUser()
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
