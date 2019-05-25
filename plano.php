<?php
    include('php/menu_sistema.php');
?>
                    <h1 class="titulo_formulario">Administrar Planos</h1>
                    
                    <div class="envelope_formulario">
                        <h2 class="titulo_sub_formulario">Cadastrar um novo plano</h2>

                        <form method="POST" action="php/controle_sistema.php?f=cadastrarPlano" id="formulario" enctype="multipart/form-data">
                            <div class="linha">
                                <div class="esquerda_update">
                                    <img src="imagens/mini_img_anuncio.jpg" alt= "mini_img_plano" class="mini_foto_anuncio" id="mini_foto_anuncio" name="mini_foto_anuncio" />
                                    <input type="file" class="update_arquivo" id="anexar_arquivo"  name="anexar_arquivo" onchange="visualizar_img(this,'mini_foto_anuncio');" />
                                </div>

                                <div class="direita_update">
                                    <div class="conter_campos_formulario">
                                        <label class="label_sistema" for="nome_aula">Tipo de Aula</label>
                                        <div class="linha">
                                            <input type="text" class="campo_sistema" id="nome_aula" name="nome_aula" maxlength="25" value="" />
                                        </div>
                                        
                                        <label class="label_sistema">Dia da Semana</label>
                                        <div class="campos_tres">
                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="inicio_dia_semana">
                                                    <option value="Domingo">Domingo</option>
                                                    <option value="Segunda">Segunda</option>
                                                    <option value="Terça">Terça</option>
                                                    <option value="Quarta">Quarta</option>
                                                    <option value="Quinta">Quinta</option>
                                                    <option value="Sexta">Sexta</option>
                                                    <option value="Sábado">Sábado</option>  
                                                </select>
                                            </div>

                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="ligacao_dia_semana">
                                                    <option value="a">a</option>
                                                    <option value="e">e</option>
                                                </select>
                                            </div>

                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="termino_dia_semana">
                                                    <option value="Domingo">Domingo</option>
                                                    <option value="Segunda">Segunda</option>
                                                    <option value="Terça">Terça</option>
                                                    <option value="Quarta">Quarta</option>
                                                    <option value="Quinta">Quinta</option>
                                                    <option value="Sexta">Sexta</option>
                                                    <option value="Sábado">Sábado</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <label class="label_sistema">Horário</label>
                                        <div class="campos_tres">
                                            <div class="divisao_campo">
                                                <input type="text" class="campo_sistema" id="horario_inicio" name="horario_inicio" maxlength="5" value="" onkeyup="mascaraHora(this.value, this.id); return somenteNumero(event);" />
                                            </div>

                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="horario_ligacao">
                                                    <option value="as">as</option>
                                                    <option value="até">até</option>
                                                    <option value="e">e</option>
                                                </select>
                                            </div>

                                            <div class="divisao_campo">
                                                <input type="text" class="campo_sistema" id="horario_termino" name="horario_termino" maxlength="5" value="" onkeyup="mascaraHora(this.value, this.id); return somenteNumero(event);" />
                                            </div>
                                        </div>

                                        <label class="label_sistema" for="preco">Preço</label>
                                        <div class="linha">
                                            <input type="text" class="campo_sistema" id="preco" name="preco" maxlength="10" value="" onkeyup="mascaraDinheiro(this.value, this.id);" onkeyup="return somenteNumero(event);" />
                                        </div>
                                        
                                        <div class="linha">
                                            <button type="button" class="botao botao_azul" name="cadastrar" onclick="verificarCadastroPlano();">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="envelope_formulario">
                        <h2 class="titulo_sub_formulario">Planos em destaque</h2>
                        <div class="linha_card">
                            <div class='box_contato'>
                                <form method='POST' action=''>
                                    <h1>Nome Plano</h1>
                                    <div class='box_img_anuncio'>
                                        <img class='centralizar_img' src='img_planos/54cef761c3dbc46ab2d8d356d477edad..png' />
                                    </div>
                                    <div class='linha base_box_anuncio'>
                                        <button type='submit' class='botao editar_botao botao_amarelo' name='editar' value="">Editar</button>
                                        <button type='button' class='botao excluir_botao botao_vermelho' name='excluir' value="">Excluir</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
