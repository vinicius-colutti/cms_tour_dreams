<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>TITULO</title>
        <link rel="stylesheet" href="css/style_cms.css">
        <link rel="stylesheet" href="http://www.amaranjs.com/AmaranJS/dist/css/amaran.min.css">
    <link rel="stylesheet" href="http://www.amaranjs.com/AmaranJS/dist/css/animate.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ignore styles below you dont need for basic setup -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/jquery-3.2.1.min.js"></script>


    <script src="js/classie.js"></script>
		<script src="js/notificationFx.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <script>

      jQuery(document).ready(function($) {
          $(".scroll").click(function(event){
              event.preventDefault();
              $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
         });
      });

    </script>



      </head>
      <body>
        <header>
          <?php include_once('header.php') ?>

        </header>
        <div id="menu_ancora">
          <a class="scroll" href="#nossa_empresa">Sobre Nossa Empresa</a>
          <br>
          <a class="scroll" href="#missao">Missão</a>
          <br>
          <a class="scroll" href="#visao">Visão</a>
          <br>
          <a class="scroll" href="#valores">Valores</a>
          <br>
          <a class="scroll" href="#txt_select_sobre">Registros inseridos</a>
          <br>
          <a class="scroll" href="#select_imagens_sobre">Imagens Slider</a>

        </div>

          <section id="section_empresa">
            <div id="principal_sobre_empresa">
              <div id="sobre_nossa_empresa">
                <div class="txt_sobre_nosssa_empresa" id="nossa_empresa">
                  <p>Sobre nossa empresa</p>

                  <textarea name="txt_sobre_empresa" rows="8" cols="80" placeholder="A sua mensagem">


                  </textarea>

                </div>

              </div>

              <div id="sobre_nossa_empresa">
                <div class="txt_sobre_nosssa_empresa" id="missao">
                  <p>Missão</p>

                  <textarea name="txt_missao" rows="8" cols="80">


                  </textarea>

                </div>

              </div>

              <div id="sobre_nossa_empresa">
                <div class="txt_sobre_nosssa_empresa" id="visao">
                  <p>Visão</p>

                  <textarea name="txt_visao" rows="8" cols="80">


                  </textarea>

                </div>

              </div>
              <div id="sobre_nossa_empresa">
                <div class="txt_sobre_nosssa_empresa" id="valores">
                  <p>Valores</p>

                  <textarea name="txt_valores" rows="8" cols="80">


                  </textarea>

                </div>

              </div>

              <div id="div_btn_salvar">
                <input id="btn_salvar_sobre" type="submit" name="btn_salvar_sobre" value="SALVAR">
              </div>

              <div id="txt_select_sobre">
                <p>Registros já inseridos...</p>

              </div>

              <div id="select_sobre">
                <div class="textos_sobre">
                  <p maxlength="96">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem...</p>
                </div>
                <div class="textos_sobre">
                  <p  maxlength="96">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem...</p>
                </div>
                <div class="textos_sobre">
                  <p  maxlength="96">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem...</p>
                </div>
                <div class="textos_sobre">
                  <p  maxlength="96">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem...</p>
                </div>
                <div class="textos_opc">
                  <div class="opc_txt">
                    <a href="#"><img src="imagens/deletar.png" alt="delete" title="Deletar"></a>

                  </div>
                  <div class="opc_txt">
                    <a href="#"><img src="imagens/editar.png" alt="editar" title="Editar"></a>

                  </div>
                  <div class="opc_txt">
                    <a href="#"><img src="imagens/ativar.png" alt="editar" title="Ativar"></a>

                  </div>
                  <div class="opc_txt">
                    <a href="#"><img src="imagens/desativar.png" alt="editar" title="Desativar"></a>

                  </div>



                </div>
                <div id="separatoria_sobre">

                </div>

              </div>
              <div id="txt_imagens_sobre_empresa">


              </div>
              <div id="select_imagens_sobre">
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                    <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>

                  </div>
                    <img src="imagens/slide1.jpg" alt="asdasd">

                </div>
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                      <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>
                  </div>
                  <img src="imagens/slide2.jpg" alt="asdasd">
                </div>
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                      <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>
                  </div>
                  <img src="imagens/slide3.jpg" alt="asdasd">
                </div>
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                      <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>
                  </div>
                  <img src="imagens/slide4.jpg" alt="asdasd">
                </div>
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                      <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>
                  </div>
                  <img src="imagens/slide5.jpg" alt="asdasd">
                </div>
                <div class="img_sobre_a_empresa">
                  <div class="excluir_img_sobre">
                      <a href="#"><img src="imagens/remover_img.png" alt="asd"></a>
                  </div>
                  <img src="imagens/slide6.jpg" alt="asdasd">
                </div>


              </div>
              <div id="sobre_nossa_empresa">
                <div id="txt_sobre_nosssa_empresa_slider">
                  <p>Adicione fotos para o slider</p>

                </div>
                <p>Utilize a tecla <b>Ctrl</b> para selecionar mais de um arquivo.</p>
                <div id="multiple_upload">
                    <input type="file" multiple="multiple" id="uploadChange" />
                    <div id="message">Selecionar fotos</div>
                    <input type="button" id="botao" value="Upload" />
                   <div id="lista">
                   </div>
                </div>
              </div>



                <script type="text/javascript">
                $(function(){
                      $('#uploadChange').on('change',function() {
                           var id = $(this).attr('id');
                          var totalFiles = $(this).get(0).files.length;
                          if(totalFiles == 0) {
                            $('#message').text('Selecionar fotos' );
                          }
                          if ( totalFiles > 1) {
                            $('#message').text( totalFiles+' arquivos selecionados' );
                          } else {
                            $('#message').text( totalFiles+' arquivo selecionado' );
                          }
                             var htm='<ol>';
                           for (var i=0; i < totalFiles; i++) {
                               var c = (i % 2 == 0) ? 'item_white' : 'item_grey';
                               var arquivo = $(this).get(0).files[i];
                               var fileV = new readFileView(arquivo, i);
                               htm += '<li class="'+c+'"><div class="box-images"><img class="item" data-img="'+i+'" data-id="'+id+'" border="0"></div><span>'+arquivo.name+'</span><a href="javascript:removeFile('+i+',\''+id+'\')" class="remove">x</a></li>'+"\n";
                           }
                          htm += '</ol>';
                             $('#lista').html(htm);

                      });

                    });

                    function readFileView(file, i) {

                      var reader = new FileReader();
                       reader.onload = function (e) {
                         $('[data-img="'+i+'"]').attr('src', e.target.result);
                    }
                       reader.readAsDataURL(file);
                    }

                    function removeFile(item, id) {
                      var el = $('img[data-img="'+item+'"]');
                      var textoQtdArquivosAtuais = $('#message').text();
                      var qtdArquivosSelecionados = parseInt(textoQtdArquivosAtuais.substring(0, parseInt(textoQtdArquivosAtuais.indexOf(' arquivo'))));

                    if (confirm('Tem certeza que deseja remover este item?')) {
                        el.closest("li").remove();
                        qtdArquivosSelecionados = qtdArquivosSelecionados -1;
                        //Alterando label com quantidade de arquivos selecionados..

                          if(qtdArquivosSelecionados == 0) {
                            $('#message').text('Selecionar fotos' );
                          } else {
                          if (qtdArquivosSelecionados > 1) {
                            $('#message').text( qtdArquivosSelecionados+' arquivos selecionados' );
                          } else {
                            $('#message').text( qtdArquivosSelecionados+' arquivo selecionado' );
                          }
                          }
                    }
                    }

                </script>



            </div>


          </section>

          <footer>
            <?php include('footer.php') ?>

          </footer>


      </body>
    </html>
