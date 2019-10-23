<?php
session_start();
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Sistema GYM</title>
        <link rel="stylesheet" type="text/css" media="screen" href="lib/css/estilo.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="lib/css/estilo_mobile.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="lib/js/jqueryui/jquery-ui.css">
        <script src="lib/js/jquery.js"></script>        
        <script src="lib/js/jqueryui/jquery-ui.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/config.js"></script>

    </head>
    <body onload="time()">

    <!-- <div class='alerta_fundo'> 
        <div class='mensagem sucesso'>
            <span class='texto_msg'>mensagem para o usuario</span>
        </div>
    </div> -->
        
        <div class="alerta_verificacao"></div>

        <div class="fundo">
            <div class="modal_exclur">
                <div class="linha_vertical linha_modal">
                    <span class="titulo_modal">Excluir</span>
                    <span class="fechar_modal"><i class="fa fa-close" aria-hidden="true"></i></span>
                </div>
                <div class="linha linha_modal">
                    <label class="acao_desejada">Deseja realmente excluir!</label>
                </div>
                <form method='POST' action=''>
                    <div class="alinhar_botao_modal">
                        <button type="submit" class="botao botao_azul botao_modal" id="confirma_delete" name="confirma_delete" value="">Sim</button>
                        <button type="button" class="botao botao_azul botao_modal" id="cancelar_cancelar" name="cancelar_cancelar">Não</button>
                    </div>
                </form>
            </div>       
        </div>

        <div class="envelope_body">
            <header>
                <div class="menu_sistema">
                    <div class="img_usuario_sistema">
                        <img src="imagens/perfil.png" alt="usuario_sistema" />
                    </div>
                    <div class="linha">
                        <span class="nome_usuario"><label id="status_time"></label><small><?php echo $_SESSION["name"]; ?></small></span>
                    </div>

                    <nav id="menu_sistema">
                        <ul>
                            <li><i class="fa fa-eye" aria-hidden="true"><a href="serie.php">Visualizar Serie</a></i></li>
                            <li><i class="fa fa-book" aria-hidden="true"><a href="historico.php">Histórico</a></i></li>
                            <li><i class="fa fa-user-plus" aria-hidden="true"><a href="cadastrarAluno.php">Cadastrar Cliente</a></i></li>
                            <li><i class="fa fa-pencil-square-o" aria-hidden="true"><a href="criarFicha.php">Criar Ficha</a></i></li>
                            <li><i class="fa fa-desktop" aria-hidden="true"><a href="quiosque.php">Quiosque</a></i></li>
                            <li><i class="fa fa-clone" aria-hidden="true"><a href="plano.php">Planos</a></i></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"><a href="evento.php">Eventos</a></i></li>
                            <li><i class="fa fa-quote-right" aria-hidden="true"><a href="depoimento.php">Depoimentos</a></i></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section>
                <div class="barra_info">
                    <div class="notificacao_usuario">
                        <i class="fa fa-envelope-o" aria-hidden="true"><span>6</span></i>
                    </div>

                    <div class="botao_hamburger">
                        <span class="hamburguer_topo"></span>
                        <span class="hamburguer_meio"></span>
                        <span class="hamburguer_base"></span>
                    </div>
                </div>

                <div class="envelope">