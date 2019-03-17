//Verifica o turno 
function time()
{
  let today = new Date();
  let time = today.getHours();
  
  if(time >= 0 && time < 12)
  {
    document.getElementById("status_time").innerHTML = "Bom dia";
  }
  else if(time >= 12 && time < 18)
  {
    document.getElementById("status_time").innerHTML = "Boa tarde";
  }
  else
  {
    document.getElementById("status_time").innerHTML = "Boa noite";
  }
}

function auth()
{
  let user = $('#usuario').val();
  let password = $('#senha').val();

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