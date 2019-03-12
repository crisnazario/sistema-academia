<?php
    include('php/menu_sistema.php');
?>
                    <h1 class="titulo_formulario">Plano - Nome do plano</h1>
                    
                    <div class="envelope_formulario">
                        <h2 class="titulo_sub_formulario">Alterar dados do plano</h2>

                        <form method='POST' action='php/controle_sistema.php?f=configPlano' enctype="multipart/form-data">
                            <div class="linha">
                                <div class="esquerda_update">
                                    <img src="img_planos/54cef761c3dbc46ab2d8d356d477edad..png" alt= "54cef761c3dbc46ab2d8d356d477edad..png" class="mini_foto_anuncio" id="mini_foto_anuncio" name="mini_foto_anuncio" />
                                    <input type="file" class="editar_update_arquivo" id="anexar_arquivo"  name="anexar_arquivo" onchange="visualizar_img(this,'mini_foto_anuncio');" />
                                </div>

                                <div class="direita_update">
                                    <div class="conter_campos_formulario">
                                        <label class="label_sistema" for="nome_aula">Tipo de Aula</label>
                                        <input type="text" class="campo_sistema" id="nome_aula" name="nome_aula" maxlength="25" value="<?php echo $_SESSION['editar_nome_aula']; ?>" />
                                        
                                        <label class="label_sistema">Dia da Semana</label>
                                        <div class="campos_tres">
                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="inicio_dia_semana">
                                                    <option value="Domingo" >Domingo</option>
                                                    <option value="Segunda" >Segunda</option>
                                                    <option value="Terça" >Terça</option>
                                                    <option value="Quarta" >Quarta</option>
                                                    <option value="Quinta" >Quinta</option>
                                                    <option value="Sexta" >Sexta</option>
                                                    <option value="Sábado" >Sábado</option>  
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
                                                <input type="text" class="campo_sistema" id="horario_inicio" name="horario_inicio" maxlength="5" value="" onkeypress="mascaraHora(this.value, this.id); return somenteNumero(event);" />
                                            </div>

                                            <div class="divisao_campo">
                                                <select class="campo_sistema" name="horario_ligacao">
                                                    <option value="as">as</option>
                                                    <option value="até">até</option>
                                                    <option value="e">e</option>
                                                </select>
                                            </div>

                                            <div class="divisao_campo">
                                                <input type="text" class="campo_sistema" id="horario_termino" name="horario_termino" maxlength="5" value="" onkeypress="mascaraHora(this.value, this.id); return somenteNumero(event);" />
                                            </div>
                                        </div>

                                        <label class="label_sistema" for="preco">Preço</label>
                                        <input type="text" class="campo_sistema" id="preco" name="preco" maxlength="10" value="" onkeyup="mascaraDinheiro(this.value, this.id);" onkeypress="return somenteNumero(event);" />

                                        <div class="linha">
                                            <button type="submit" class="botao botao_azul" name="salvar" value="">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
