function auth()
{
    var log = document.getElementById('usuario').value;
    var pass = document.getElementById('senha').value;

    if(log == "" || pass == "")
    {
        alert("Preencha todos os campos");
    }
    else
    {
      $.ajax({
          type: "POST",
          url: 'php_config/config.php/?p=auth',
          data: "logon="+log+"&password="+pass,
          success: function(data)
          {
            console.log(data);
          }
      })
    }
        
}