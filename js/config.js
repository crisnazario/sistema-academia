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

    $('#nascimento_cadastrado').mask('00/00/0000');
    $('#cpf_cadastrado').mask('000.000.000-00', {reverse: true});
})

//Verifica email
function checkEmail(email)
{
    if(email != "")
    {
        var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(filtro.test(email))
            return true;
        else
           return false;
    }
    else 
        return false;  
}

//Cadastro de aluno
function register()
{
    if (checkEmptyField(returnValueField('primeiro_nome_cadastrado')) && checkEmptyField(returnValueField('sobrenome_cadastrado')) 
        && checkEmptyField(returnValueField('usuario_cadastrado')) && checkEmptyField(returnValueField('senha_cadastrado')) && 
        checkEmptyField(returnValueField('email_cadastrado')) && checkEmptyField(returnValueField('cpf_cadastrado')) 
        && checkEmptyField(returnValueField('rg_cadastrado')) && checkEmptyField(returnValueField('sexo_cadastrado')) 
        && checkEmptyField(returnValueField('nascimento_cadastrado')) && checkEmptyField(returnValueField('situacao_cadastrado')) 
        && checkEmptyField(returnValueField('permissao_cadastrado')))
        alert("Foi");
    else
        alert("Não");
}
