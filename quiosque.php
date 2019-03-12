<?php
    include('php/menu_sistema.php');
?>
                    <h1 class="titulo_formulario">Administrar Quiosque</h1>
                    
                    <div class="envelope_formulario">
                        <h2 class="titulo_sub_formulario">Fazer upload de imagens</h2>

                        <form method="POST" action="php/controle_sistema.php?f=uploadImagem" enctype="multipart/form-data" id="form_upload">
                            <div class="linha">
                                <div class="esquerda_update">
                                    <img src="imagens/mini_img_anuncio.jpg" alt= "mini_img_anuncio" class="mini_foto_anuncio centralizar_img" id="mini_foto_anuncio" name="mini_foto_anuncio" />
                                    <input type="file" class="update_arquivo" id="anexar_arquivo"  name="anexar_arquivo" onchange="visualizar_img(this,'mini_foto_anuncio');" />
                                </div>

                                <div class="direita_update">
                                    <div class="conter_campos_formulario">
                                        <label class="label_sistema" for="nome_img_update">Nome</label>
                                        <input type="text" class="campo_sistema" id="nome_img_update" name="nome_img_update" maxlength="35" value="" />

                                        <div class="linha">
                                            <button type="submit" class="botao botao_azul" name="upload_img">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="envelope_formulario">
                        <h2 class="titulo_sub_formulario">Anúncios em destaque</h2>
                        <div class="linha_card">
                            <div class='box_contato'>
                                <h1>Nome Anuncio</h1>
                                <div class='box_img_anuncio'>
                                    <img class='centralizar_img' src='img_anuncio/3b42816bcc6c08c53d58bb2afd7cf687..jpg' />
                                </div>
                                <div class='linha base_box_anuncio'>
                                    <button type='button' class='botao excluir_botao botao_vermelho' value=''>Excluir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
