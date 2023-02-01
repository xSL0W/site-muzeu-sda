$(document).ready(function() 
{
    var editor = $('#editor').trumbowyg();

    $('.edit-btn').click(function() {
        
        // Get content id
        var id = $(this).closest('tr').find('th:nth-child(1)').text().trim();
        var content_id = "modalData_" + id;
        console.log("Button id is: " + content_id);

        //Get root div
        var root_div = document.getElementById(content_id);
        console.log(root_div);

        // Get all the parameters
        var title_div = root_div.getElementsByClassName('title')[0];
        var title = title_div.textContent;
        console.log(title);

        var description_div = root_div.getElementsByClassName('description')[0];
        var description = description_div.textContent;
        console.log(description);

        var image_div = root_div.getElementsByClassName('img_path')[0];
        var image_path = image_div.textContent;
        console.log(image_path);

        var language_div = root_div.getElementsByClassName('language')[0];
        var language = language_div.textContent;
        console.log(language);

        //Implement them in form
        const form_image = document.getElementById('postImage');
        form_image.src = image_path;

        const post_id_field = document.getElementById('postId');
        post_id_field.value = id;

        const post_title = document.getElementById('postTitle');
        post_title.value = title;

        editor.trumbowyg('html', description);
      })

      document.querySelector('.btn-saveData').addEventListener('click', function() {
        var postId = document.getElementById('postId').value;
        var title = document.getElementById('postTitle').value;
        var text = editor.trumbowyg('html');
        var image = document.querySelector("input[type='file']").files[0];
        
        var modalData = new FormData();
        modalData.append('postId', postId);
        modalData.append('title', title);
        modalData.append('text', text);
        modalData.append('image', image);

        console.log(modalData.get('postId'));
        console.log(modalData.get('title'));
        console.log(modalData.get('text'));
        console.log(modalData.get('image'));
        
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
})