function initialize()
{
  $(".alerta_fundo").hide();
}


function auth()
{
  var user = $('#usuario').val();
  var password = $('#senha').val();

  if(user == "" || password == "")
  {
    alert("Preencha todos os campos");
  }
  else
  {
    $.ajax({
            type: "POST",
            url: 'php_config/controller.php/?p=auth',
            data: "user="+user+"&password="+password,
            success: function(data)
            {
              window.location.href = data;
              //console.log(data);
            }
          })
  }
        
}