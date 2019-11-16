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

//Validacao do login
function auth()
{ 
    if(checkEmptyField(returnValueField('usuario')) && checkEmptyField(returnValueField('senha')))
    {
        let dados = {
            'user': returnValueField('usuario'),
            'password': returnValueField('senha')
        };

        $.ajax({
                type: "POST",
                url: 'php_config/controller.php/?p=auth',
                data: dados,
                dataType: 'json',
                beforeSend: function()
                {
                    $(".container_load").css('display', 'block');
                },
                success: function(data)
                {
                    if(checkEmptyField(data))
                    {
                        $(".container_load").css('display', 'none');    
                        window.location.href = data;                                                       
                    }
                    else
                    { 
                        $(".texto_msg").text("Mensagem de senha/login incorreta");

                        //Removo a class de sucesso e adiciono a de atencao
                        $(".mensagem").removeClass('sucesso');
                        $(".mensagem").addClass('atencao');

                        $(".container_load").css('display', 'none');
                        $(".alerta_fundo").css('display', 'block');

                        setTimeout(function () {
                            $(".alerta_fundo").css('display', 'none');
                        }, 2000);
                    }
                }
              })
    }
    else
    {
        formattingField(returnValueField('usuario'), 'usuario', 200);
        formattingField(returnValueField('senha'), 'senha', 200);
    }        
}

//Verifica campos vazios
function checkEmptyField(field)
{
    if(field == "")
        return false;
    else
        return true;
}

//Formata a borda dos campos em vermelho
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

$(document).ready(function() {
    //Login
    $(".container_load, .alerta_fundo").css('display', 'none');

    $("#cadastrar").click(function () {
    console.log("Oppa");
});
})

