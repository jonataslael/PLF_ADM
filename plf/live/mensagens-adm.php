<!DOCTYPE html>

<?php
  include('php/banco.php');
  include('php/login.php');
  include('php/testasessao.php');
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
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
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
        <section class="home-full-height home-section home-fade bg-dark-30 about-page-header" data-background="assets/images/mensagens.png">
          <div class="container">
            <div class="row">
              
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                
                <div role="tabpanel">
                  <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active"><a href="#support" data-toggle="tab">Mensagens</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="support">Veja abaixo as pessoas que entraram em contato:
                    </div>
                  </div>
                </div>
                
                <hr class="divider-w mt-10 mb-20">
                <div class="panel-group" id="accordion">

                <?php

                  $sql = "select * from contact order by id desc"; 

                   //executa o comando sql
                    $consulta = $conexao->query($sql);
                    
                    //testar se deu certo o comando
                    if($consulta){
                        //verificando se existe o usuario
                        if($consulta->num_rows > 0){
                        //convertendo a consulta num array
                        while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){

                   echo 
                        '<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#supportsupport'.$linha['id'].'">'.$linha['nome'].'</a></h4>
                          </div>
                          <div class="panel-collapse collapse" id="supportsupport'.$linha['id'].'">
                            <div class="panel-body">E-mail: '.$linha['email'].'</div>
                            <div class="panel-body">Telefone: '.$linha['telefone'].'</div>
                            <div class="panel-body">Assunto: '.$linha['assunto'].'</div>
                          </div>
                        </div>';
                       }
                       }
                    };
                ?>

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
  </body>
</html>