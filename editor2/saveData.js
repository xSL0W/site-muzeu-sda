var editor = $('#editor').trumbowyg();



document.querySelector('.btn-success').addEventListener('click', function() {
  
    var postId = document.getElementById('postId').value;
    var title = document.querySelector("input[name='title']").value;
    // var text = document.querySelector("textarea[name='text']").value;
    var text = editor.trumbowyg('html');
    var image = document.querySelector("input[type='file']").files[0];

    console.log(title);
    
    var modalData = new FormData();
    modalData.append('postId', postId);
    modalData.append('title', title);
    modalData.append('text', text);
    modalData.append('image', image);
    
    axios.post('saveChanges.php', modalData, {
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
  