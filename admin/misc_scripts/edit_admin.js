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
        var select = "<select class='form-control'> <option value='Admin'" + (role == "Admin" ? "selected" : "") + ">Admin</option> <option value='Editor'" + (role == "Editor" ? "selected" : "") + ">Editor</option> </select>";

        // replace values with input fields
        $(this).closest('tr').find('td:nth-child(2)').html("<input type='text' class='form-control' value='" + name + "'>");
        $(this).closest('tr').find('td:nth-child(3)').html("<input type='text' class='form-control' value='" + email + "'>");
        $(this).closest('tr').find('td:nth-child(4)').html(select);
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
    
        // replace the input fields with updated values
        $(this).closest('tr').find('td:nth-child(2)').html(name);
        $(this).closest('tr').find('td:nth-child(3)').html(email);
        $(this).closest('tr').find('td:nth-child(4)').html(role);

        $.post("misc_scripts/save_admin.php", {id:id, name:name, email:email, role:role}, function(data) 
        {
            console.log(data);
            location.reload();
        });

    });
});
