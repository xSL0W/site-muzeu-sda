let editor;

ClassicEditor
    .create( document.querySelector( '#editor' ), {
        ckfinder: {
            // Upload the images to the server using the CKFinder QuickUpload command.
            uploadUrl: 'C:/xampp/htdocs/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
        }
    } )
    .then(newEditor => {
        editor = newEditor;
    })
    .catch( error => {
        console.error( error );
    });


// ClassicEditor
//     .create( document.querySelector( '#editor' ), {
//         ckfinder: {
//             // Upload the images to the server using the CKFinder QuickUpload command.
//             uploadUrl: 'C:/xampp/htdocs/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json'
//         }
//     } )
//     .then(newEditor => {
//         editor = newEditor;
//     })
//     .catch( error => {
//         console.error( error );
//     });
    
// ClassicEditor
//         .create( document.querySelector( '#editor' ) )
//         .then(newEditor => {
//             editor = newEditor;
//         })
//         .catch( error => {
//             console.error( error );
//         });




document.querySelector('.btn-success').addEventListener('click', function() {
    var postId = document.getElementById('postId').value;
    var title = document.querySelector("input[name='title']").value;
    // var text = document.querySelector("textarea[name='text']").value;
    var text = editor.getData();
    var image = document.querySelector("input[type='file']").files[0];
    
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
  