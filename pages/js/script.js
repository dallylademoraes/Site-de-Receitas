    function previewImage(input) {
    var imgBanner = document.getElementById('imgBanner');
    imgBanner.innerHTML = '';

    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
    var img = document.createElement('img');
    img.src = e.target.result;
    imgBanner.appendChild(img);
};

    reader.readAsDataURL(input.files[0]);
}
}
