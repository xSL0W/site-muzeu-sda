$(document).ready(function() 
{

  const elements = document.querySelectorAll("tr");


  // Language buttons functionality

  $('#all-lang').click(function() 
  {
    for (const element of elements) 
  {
    element.style.display = "table-row"
  }
  })

  $('#ro-lang').click(function() 
  {
    for (const element of elements) {
      if (element.getAttribute("id") === "ro" || element.getAttribute("id") === null) {
        element.style.display = "table-row";
      } else {
        element.style.display = "none";
      }
    }
  })

  $('#en-lang').click(function() 
  {
    for (const element of elements) {
      if (element.getAttribute("id") === "en" || element.getAttribute("id") === null) {
        element.style.display = "table-row";
      } else {
        element.style.display = "none";
      }
    }
  })

  $('#hu-lang').click(function() 
  {
    for (const element of elements) {
      if (element.getAttribute("id") === "hu" || element.getAttribute("id") === null) {
        element.style.display = "table-row";
      } else {
        element.style.display = "none";
      }
    }
  })

  // Delete Button Functionality

  $('.delete-btn').click(function() 
        {
            var id = $(this).closest('tr').find('th:nth-child(1)').text().trim();

            $.post("post_scripts/delete_post.php", {id:id}, function(data) 
        {
            console.log(data);
            location.reload();
        });
        })

})



