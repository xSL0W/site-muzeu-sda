$(document).ready(function() 
{
    var editor2 = $('#editor2').trumbowyg();

    $('.submit-btn').click(function() 
    {
        var addPostId = document.getElementById('addPostId').value;
        var addTitle = document.getElementById('addPostTitle').value;
        var addText = editor2.trumbowyg('html');
        var addImage = document.getElementById('addImageInput').files[0];
        var addCategory = document.getElementById('addCategory').value;
        var addLanguage = document.getElementById('addLanguage').value;
        
        var addModalData = new FormData();
        addModalData.append('postId', addPostId);
        addModalData.append('title', addTitle);
        addModalData.append('text', addText);
        addModalData.append('image', addImage);
        addModalData.append('category', addCategory);
        addModalData.append('language', addLanguage);

        console.log(addModalData.get('postId'));
        console.log(addModalData.get('title'));
        console.log(addModalData.get('text'));
        console.log(addModalData.get('image'));
        console.log(addModalData.get('category'));
        console.log(addModalData.get('language'));
        
        axios.post('saveAddPostChanges.php', addModalData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      });
    })


function previewAddImage(event) {
    var image = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function () {
      document.getElementById('addPostImage').src = reader.result;
    }
    reader.readAsDataURL(image);
  }