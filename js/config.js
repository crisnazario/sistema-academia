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
  
  if(checkEmptyField(user) && checkEmptyField(password))
  {
    $.ajax({
            type: "POST",
            url: 'php_config/controller.php/?p=auth',
            data: "user="+user+"&password="+password,
            success: function(data)
            {
              if(checkEmptyField(data))
                window.location.href = data;
              else
                console.log("Mensagem de senha/login incorreta");
            }
          })
  }
  else
    {
      formattingField(returnValueField('usuario'), 'usuario', 200);
      formattingField(returnValueField('senha'), 'senha', 200);
    }
  
        
}

function checkEmptyField(field)
{
  if(field == "")
    return false;
  else
    return true;
}

function formattingField(val, campo, tempo)
{
  setTimeout(function()
  {     
    if(!checkEmptyField(val))
    {       
      $("#"+campo).css({ "border-color": "red"});  
      return false;
    }
    else
    {
      $("#"+campo).css({ "border-color": "#DCDCDC"});     
      return true;  
    }         
  }, tempo)
}

function returnValueField(id)
{
  let field = $("#"+id).val();
  return field;
}