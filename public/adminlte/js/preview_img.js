FReader = new FileReader();

FReader.onload = function(e) {
    document.querySelector('#result').src = e.target.result;
};

document.querySelector('#imgFile').addEventListener('change', loadImageFile);

function loadImageFile() {
    let file = document.querySelector('#imgFile').files[0];
    FReader.readAsDataURL(file);

    // Отображение названия файла в элементе <label>
    let label = document.querySelector('.img-name');
    label.innerHTML = file.name;
}
