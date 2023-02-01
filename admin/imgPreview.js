function previewImage(event) {
    var image = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function () {
      document.getElementById('postImage').src = reader.result;
    }
    reader.readAsDataURL(image);
  }



 
