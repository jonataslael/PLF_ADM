<!DOCTYPE html>

<?php
  include('php/banco.php');
?>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>PORTFÓLIO LUCIANO FEIJÃO</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/Design sem nome (6).png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/Design sem nome (5).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="10">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">PLF</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="dashboard.php"><i class="fa fa-fw">&#xF015;</i> Principal</a></li>
              <li><a href="colecoes-adm.php"><i class="fa fa-fw">&#xF02D;</i> Coleções</a></li>
              <li><a href="blog-adm.php"><span class="icon-browser" aria-hidden="true"></span> Blog</a></li>
              <li><a href="mensagens-adm.php"><i class="fa fa-fw">&#xF003;</i> Mensagens</a></li>
              <li><a href="sobre-adm.php"><i class="fa fa-fw">&#xF059;</i> Sobre</a></li>
              
              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
      <section class="home-section home-fade home-full-height bg-dark-60 agency-page-header" id="home" data-background="assets/images/eventos.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                
              </div>
            </div>
          </div>
        </section>
      <div class="main">
        <section class="module-small">
          <div class="container">
            <div class="row">

              <div class="col-sm-6">
                <div class="post">

                  <form method="POST" enctype="multipart/form-data">

                    <div class="post-thumbnail" id="preview">
                      <label for="arquivo" id="Label">
                      <img src="assets/images/icon-up.png" alt="Clique para enviar um arquivo"/>
                      </label>          
                      <input multiple type="file" name="arquivo" id="arquivo" accept="image/*" style="display:none;" onchange="previewImage()">      
                    </div>
                    
                </div>
              </div>

              <div class="col-sm-6">
                <div class="post">
                    <div class="post-header font-alt">
                      <input class="form-control mt-10 mb-20" rows="1" id="title" name="title" placeholder="Nome do Evento">
                      <input class="form-control" rows="1" id="anft" name="anft" placeholder="Anfitrião | Data | Tema, Sobre">
                    </div>

                    <div class="post-entry">
                      <textarea class="form-control" rows="5" id="p1" name="p1" placeholder="Descrição"></textarea><br>
                    </div>

                    <label for="enviar" class="btn btn-d btn-round" style="margin-top:10px;"><i class="fa fa-fw">&#xF0C7;</i> Salvar Post</label>
                    <input type="submit" id="enviar" name="enviar" style="display:none;">

                  </div>
                  </form>

                </div>
              </div>
              
            </div>
          </div>

        </section>
        <div class="module-small bg-dark2">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title">Endereço e Contato</h5>
                  <div class="alt-features-item mt-0">
                    <div class="alt-features-icon"><span class="icon-map"></span></div>
                    <h3 class="alt-features-title font-alt"></h3>Faculdade Luciano Feijão<br/> Rua José Lopes Ponte, 400<br/>Dom Expedito <br/>CEP: 62050-215
                  </div>
                  <div class="alt-features-item mt-xs-60">
                    <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                    <h3 class="alt-features-title font-alt"></h3>E-mail: estagio.nti@flucianofeijao.com.br<br/>Telefone: (88) 12345-6789
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="widget">
                  <h5 class="widget-title font-alt">Fale Conosco</h5>
                  <form id="contactForm" role="form" method="post" action="php/insert-contact.php">
                    <div class="form-group">
                      <label class="sr-only" for="name">Nome</label>
                      <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required="required" data-validation-required-message="Please enter your name."/>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">E-mail</label>
                      <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required="required" data-validation-required-message="Please enter your email address."/>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">Telefone</label>
                      <input class="form-control" type="tel" id="telefone" name="telefone" placeholder="Telefone" required="required" data-validation-required-message="Please enter your email address."/>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="5" id="assunto" name="assunto" placeholder="Esceva sua mensagem aqui" required="required" data-validation-required-message="Please enter your message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title">Nossas Plataformas</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image.rod"><a href="https://flucianofeijao.com.br/flf/"><img src="assets/images/Marca FLF 2022 nome branco.png" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body.rod">
                        <div class="widget-posts-title.rod"><a href="https://flucianofeijao.com.br/flf/"></a></div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image.rod"><a href="https://lucianofeijao.com.br/lf/"><img src="assets/images/Logo CLF-Branca.png" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body.rod">
                        <div class="widget-posts-title"><a href="https://lucianofeijao.com.br/lf/"></a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2023&nbsp;<a href="index.php">PORTFÓLIO LUCIANO FEIJÃO</a>, Todos os Direitos Reservados</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="https://www.facebook.com/flfeijao"><i class="fa fa-facebook"></i></a>
                                                 <a href="https://twitter.com/flfeijao"><i class="fa fa-twitter"></i></a>
                                                 <a href="https://www.instagram.com/flfeijao/"><i class="fa fa-fw">&#xF16D;</i></a>
                                                 <a href="https://www.youtube.com/channel/UCwIMJ6LjdGeur_em-2JbQ7w"><i class="fa fa-fw">&#xF16A;</i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        document.getElementById("Label").addEventListener("click", function() {
            document.getElementById("arquivo").click();
        });

        document.getElementById("arquivo").addEventListener("change", function() {
            uploadFile();
        });

        function previewImage() {
            var preview = document.getElementById('preview');
            var fileInput = document.getElementById('arquivo');
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Imagem Selecionada">';
                };

                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '';
            }
        }

        function uploadFile() {
          <?php

          include("php/banco.php");

          $foto = $_FILES['arquivo']['tmp_name'];

          $pasta = 'assets/images/blog/';

          if (!empty($foto)){
              $file = getimagesize($foto);
              
              //TESTA A EXTENSÃO DO ARQUIVO
              if(!preg_match('/^image\/(?:jpg|jpeg|png)$/i', $file['mime'])){
                  echo "erro - extensão não permitida";
                  exit();
              }

              //CAPTURA A EXTENSÃO DO ARQUIVO
              $extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

              //MONTA O CAMINHO DO NOVO DESTINO
              $new_name = uniqid('', true);
              $path = "{$pasta}". $new_name . '.' . $extensao;  
              move_uploaded_file ($foto , $path );

              $title = $_POST['title'];
              $anft = $_POST['anft'];
              $p1 = $_POST['p1'];


              $sql = "insert into blog (id, img_blog, path_blog, titulo, informacoes, p1) VALUES('null', '$new_name', '$path', '$title', '$anft', '$p1')";
              $add = $conexao->query($sql);

          } 
          
          ?>
        }
    </script>

  </body>
</html>
