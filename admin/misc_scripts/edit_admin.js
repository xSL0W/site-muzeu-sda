
$(document).ready(function() {
    $('.edit-btn').click(function() {
        // hide Edit button
        $(this).hide();
        
        // show Save button
        $(this).closest('td').find('.save-btn').show();
        
        // get current values for Name, Email and Role columns
        var name = $(this).closest('tr').find('td:nth-child(2)').text();
        var email = $(this).closest('tr').find('td:nth-child(3)').text();
        var role = $(this).closest('tr').find('td:nth-child(4)').text();
        var password = $(this).closest('tr').find('td:nth-child(5)').text();
        var select = "<select class='form-control'> <option value='Admin'" + (role == "Admin" ? "selected" : "") + ">Admin</option> <option value='Editor'" + (role == "Editor" ? "selected" : "") + ">Editor</option> </select>";

        // replace values with input fields
        $(this).closest('tr').find('td:nth-child(2)').html("<input type='text' class='form-control' value='" + name + "'>");
        $(this).closest('tr').find('td:nth-child(3)').html("<input type='text' class='form-control' value='" + email + "'>");
        $(this).closest('tr').find('td:nth-child(4)').html(select);
        $(this).closest('tr').find('td:nth-child(5)').html("<input type='text' class='form-control' value='" + password + "'>");
    });

    $('.save-btn').click(function() {
        // hide Save button
        $(this).hide();
        
        // show edit button
        $(this).closest('td').find('.edit-btn').show();
    
        // get the updated values for Name, Email and Role columns
        var id = $(this).closest('tr').find('th:nth-child(1)').text().trim();
        var name = $(this).closest('tr').find('td:nth-child(2) input').val();
        var email = $(this).closest('tr').find('td:nth-child(3) input').val();
        var role = $(this).closest('tr').find('td:nth-child(4) select').val();
        var password = $(this).closest('tr').find('td:nth-child(5) input').val();

        // replace the input fields with updated values
        $(this).closest('tr').find('td:nth-child(2)').html(name);
        $(this).closest('tr').find('td:nth-child(3)').html(email);
        $(this).closest('tr').find('td:nth-child(4)').html(role);
        $(this).closest('tr').find('td:nth-child(5)').html(password);

        // bag pula in el jquery ba
        //$.post("misc_scripts/edit_admins.php", {id:id, name:name, email:email, password:password, role:role}, function(data) 
        //{
        //    console.log(data);
        //    //location.reload();
        //});

        console.log(password);

        axios.post('misc_scripts/edit_admins.php', {
            id: id,
            name: name,
            email: email,
            password:password,
            role:role
          })
          .then(function (response) {
            console.log(response); // disable on live server
            location.reload();
          })
          .catch(function (error) {
            console.log(error); // disable on live server
          });



    });
});
