<?php







?>


<!DOCTYPE html>
<html>
<head>
       <meta charset="UTF-8"/>
       <title></title>
       <link rel="stylesheet" type="text/css" href="_css/estilo5.css"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

       <script src="javascript/mudar_imagem_botoes.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
                    
  <body>

        <div>

          <ul>
          <li>
            <a href="#openModal">               
            
            <input type="image" id="cadastros" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_cadastros()" src="icone-cadastros.png">

            </a>

                  <div id="openModal" class="modalDialog"><h1><font face="georgia" color="#d9241c"><b>Cadastros</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-14px; right:20px;">
                    

                    <input type="image" id="clientes" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_clientes()" src="clientes.png">    
                    
                    <input type="image" id="vendedor" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_vendedor()" src="vendedor.png">

                    
                    <input type="image" id="transportadora" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_transportadora()" src="transportadora.png">

                      
                    
                        
                                      
                    </div>


                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-14px; right:20px;">

                    <input type="image" id="empresa" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px" onclick="mudarimagem_empresa()" src="empresa.png">


                    <input type="image" id="agenda" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_agenda()" src="agenda.png">

                    
                    <input type="image" id="email" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_email()" src="email_marketing.png">


                    </div>



                    <a href="#close" title="Close" onclick="a()" class="close">X</a></div>

                  </div> 
<!--
            <a href="#openModal-2">
              
            <input type="image" id="financeiro" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_financeiro()" src="icone-financeiro.png">
                
            
            </a>
                                      
                  <div id="openModal-2" class="modalDialog-2"><h1 align="middle"><font color="#d9241c" face="georgia"><b>Financeiro</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:130px; right:20px">

                    <div class="div-teste-3" style="position: relative; width:650px; height:-200px; left:-14px; right:20px;">
                      
                    <input type="image" id="contas_a_receber" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_contas_a_receber()" src="contas_a_receber.png">

                    <input type="image" id="contas_a_pagar" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_contas_a_pagar()" src="contas_a_pagar.png">  
                    
                    <input type="image" id="cheque_cliente" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_cheque_cliente()" src="cheque_cliente.png">
                        
                                      
                    </div>

                    <div class="div-teste-4" style="position: relative; width:650px; height:-200px; left:-14px; right:20px;">

                      
                    <input type="image" id="cadastros_juros" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_cadastros_juros()" src="cadastros_juros.png"> 

                    <input type="image" id="parcelar_boleto" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_parcelar_boleto()" src="parcelar_boleto.png">

                    <input type="image" id="modelo_parcelar" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_modelo_parcelar()" src="modelo_parcelar.png">

                    
                    </div>



                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>       
                  
            
            <a href="#openModal-3">
                
            <input type="image" id="estoque" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_estoque()" src="icone-estoque.png">
              
            </a>

                  <div id="openModal-3" class="modalDialog-3"><h1 align="left"><font color="#d9241c" face="georgia"><b>Estoque</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-5" style="position: relative; width:650px; height:135px; left:-14px; right:20px;">
                      
                     <input type="image" id="laboratorio_fornecedor" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_laboratorio_fornecedor()" src="laboratorio_fornecedor.png">

                     <input type="image" id="grupos" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_grupos()" src="grupos.png">


                     <input type="image" id="unidade_de_venda" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_unidade_de_venda()" src="unidade_de_venda.png">                 
                        
                                      
                    </div>

                    <div class="div-teste-6" style="position:relative; width:650px; height:135px; left:-14px; right:20px;">

                       <input type="image" id="controle_de_estoque" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_controle_de_estoque()" src="controle_de_estoque.png">


                       <input type="image" id="imprimir_grade" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_imprimir_grade()" src="imprimir_grade.png"> 
                      

                      <input type="image" id="imprimir_etiqueta" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_imprimir_etiqueta()" src="imprimir_etiqueta.png">

                      
                    
                    </div>



                    <a href="#close" title="Close" class="close">X</a></div>

                  </div> 

            <a href="#openModal-4">
                
            <input type="image" id="graficos" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_graficos()" src="icone-graficos.png">


            </a>

                  <div id="openModal-4" class="modalDialog-4"><h1 align="middle"><font color="#d9241c" face="georgia"><b>Gráficos</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                     <input type="image" id="vendas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_vendas()" src="vendas.png">

                     <input type="image" id="contas_recebidas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_contas_recebidas()" src="contas_recebidas.png">
                    
                     <input type="image" id="relatorios_logof" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="padding:10px; left:-460px; right:470px;" onclick="mudarimagem_relatorios_logof()" src="relatorios_logof.png">                 
                                      
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    
                    <input type="image" id="contas_pagas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_contas_pagas()" src="contas_pagas.png">

                    <input type="image" id="produtos_vendidos" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_produtos_vendidos()" src="produtos_vendidos.png">

                    <input type="image" id="situacao_tributaria" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_situacao_tributaria()" src="situacao_tributaria.png">

                                    
                    </div>

                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>

            <a href="#openModal-5">
                
            <input type="image" id="relatorios" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_relatorios()" src="icone-relatorios.png">

            </a>

                  <div id="openModal-5" class="modalDialog-5"><h1 align="middle"><font color="#d9241c" face="georgia"><b>Relatórios</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                    
                    <input type="image" id="relatorios_financeiros" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_relatorios_financeiros()" src="relatorios_financeiros.png">  

                    <input type="image" id="saidas_e_entradas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_saidas_e_entradas()" src="saidas_e_entradas.png">

                
                    <input type="image" id="imprimir_boletos" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_imprimir_boletos()" src="imprimir_boletos.png">
                        
                                      
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    
                    <input type="image" id="imprimir_precos" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_imprimir_precos()" src="imprimir_precos.png">  


                    <input type="image" id="historico_de_produtos" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_historico_de_produtos()" src="historico_de_produtos.png">

                    <input type="image" id="abcfarma" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_abcfarma()" src="abcfarma.png">


                    </div>



                    <a href="#close" title="Close" class="close">X</a></div>

                  </div> 



           <a href="#openModal-6">
                
            <input type="image" id="vendas_caixa" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_vendas_caixa()" src="icone-vendas_caixa.png">

            </a>

                  <div id="openModal-6" class="modalDialog-6"><h1 align="middle"><font color="#d9241c" face="georgia"><b>Vendas</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                    <input type="image" id="abrir_tela_de_vendas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_abrir_tela_de_vendas()" src="abrir_tela_de_vendas.png">    
                    
                    <input type="image" id="consignacao_orcamento" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_consignacao_orcamento()" src="consignacao_orcamento.png">

                    <input type="image" id="tela_nfe_cancelada" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_tela_nfe_cancelada()" src="tela_nfe_cancelada.png">
                                            
                                      
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    <input type="image" id="abrir_nfe" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_abrir_nfe()" src="abrir_nfe.png">

                    <input type="image" id="abrir_caixa" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_abrir_caixa()" src="abrir_caixa.png">
                    
                    <input type="image" id="relatorio_financeiro" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_relatorio_financeiro ()" src="relatorio_financeiro.png">
                  

                    </div>

                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>

          <a href="#openModal-7">
                
            <input type="image" id="configuracoes" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_configuracoes()" src="icone-configuracoes.png">

            </a>

                  <div id="openModal-7" class="modalDialog-7"><h1 align="left"><font color="#d9241c" face="georgia"><b>Configurações</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                     
                    <input type="image" id="ativar_relatorios" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_ativar_relatorios()" src="ativar_relatorios.png">  

                    <input type="image" id="apagar_vendas" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_apagar_vendas()" src="apagar_vendas.png">

                    <input type="image" id="operador" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_operador()" src="operador.png">

                                                                              
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    <input type="image" id="configurar" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_configurar()" src="configurar.png">

                    <input type="image" id="dados_nfe" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_dados_nfe()" src="dados_nfe.png">
                    
                     <input type="image" id="perfil" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_perfil()" src="perfil.png">


                    </div>



                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>                      

          <a href="#openModal-8">
                
            <input type="image" id="suporte" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_suporte()" src="icone-suporte_ajuda.png">

            </a>

                  <div id="openModal-8" class="modalDialog-8"><h1 align="left"><font color="#d9241c" face="georgia"><b>Suporte</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                     <input type="image" id="registrar_programa" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_registrar_programa()" src="registrar_programa.png">

                    <input type="image" id="tecla_de_atalho" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_tecla_de_atalho()" src="tecla_de_atalho.png">
                
                    <input type="image" id="bloquear_visual" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_bloquear_visual()" src="bloquear_visual.png">

                                      
                                      
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    <input type="image" id="manual" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_manual()" src="manual.png">


                    <input type="image" id="abrir_suporte" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_abrir_suporte()" src="abrir_suporte.png">
       
                    </div>

                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>




          <a href="#openModal-9">
                
            <input type="image" id="ferramentas" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_ferramentas()" src="icone-ferramentas.png">

            </a>

                  <div id="openModal-9" class="modalDialog-9"><h1 align="left"><font color="#d9241c" face="georgia"><b>Ferramentas</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-2px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                     <input type="image" id="rede" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_rede()" src="rede.png">

                     <input type="image" id="registro_do_programa" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_registro_do_programa()" src="registro_do_programa.png">

                     <input type="image" id="google_maps" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_google_maps()" src="google_maps.png">
                                      
                                      
                    </div>

                    <div class="div-teste-2" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">

                    <input type="image" id="mala_direta" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px;" onclick="mudarimagem_mala_direta()" src="mala_direta.png">

                    <input type="image" id="calculadora" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px" onclick="mudarimagem_calculadora()" src="calculadora.png">
                   


                    </div>

                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>




           <a href="#openModal-10">
             
            <input type="image" id="sair" class="btn btn-default btn-secundary btn-lg" style="padding:10px" onclick="mudarimagem_sair()" src="icone-sair_minimizar.png">

            </a>

                  <div id="openModal-10" class="modalDialog-10"><h1 align="left"><font color="#d9241c" face="georgia"><b>Sair</b></font></h1>

                  <div style="position: relative; width:50px; height:30px; left:-10px; right:20px">

                    <div class="div-teste-1" style="position: relative; width:650px; height:-200px; left:-4px; right:20px;">
                      
                    <input type="image" id="sair_do_programa" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px" onclick="mudarimagem_sair_do_programa()" src="sair_do_programa.png">

                    <input type="image" id="fazer_logof" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px" onclick="mudarimagem_fazer_logof()" src="fazer_logof.png">
                    
                    <input type="image" id="minimizar" class="btn btn-default btn-secundary btn-lg dropdown-toggle btn-group" style="position:relative; padding:10px; left:-460px; right:470px" onclick="mudarimagem_minimizar()" src="minimizar.png">
                                   
                                      
                    </div>

                    <a href="#close" title="Close" class="close">X</a></div>

                  </div>                  
        
          </li>
        </ul>

      </div>

    -->



  </body>
  
  </html>
