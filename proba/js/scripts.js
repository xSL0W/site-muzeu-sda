function sendLanguage(data)
{
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() 
  {
    if (xhr.readyState === 4 && xhr.status === 200) 
    {
      // Handle the response from the PHP script
    }
  };
  xhr.send("lang="+data);
}