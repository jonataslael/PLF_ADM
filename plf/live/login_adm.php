<!DOCTYPE html>
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
      
      <div class="main">
        <section class="module login-page-header" data-background="assets/images/login.png">
          <div class="container">
            <div class="row">
            </div>
          </div>
        </section>

        <section class="boxLogin container">

        

          <div class="content">

            <div class="col-3"></div>
                
            <div class="col-6">
              <div class="box-formulario" style="margin: 60px;">        
        
                <div class="formulario">

                <?php 
						      if(isset($_GET['login'])) {
						        if(($_GET['login'])== 'erro'){
							        echo '<script>
                          swal({
                            title: "ERRO AO FAZER LOGIN",
                            text: "Ocorreu um erro ao fazer login, tente novamente",
                            icon: "error",
                          });
                        </script>';
						        }
						        if(($_GET['login'])== 'semsessao'){
						        	echo '<script>
                              swal({
                                title: "USUÁRIO NÃO AUTENTICADO",
                                text: "Por favor faça login!",
                                icon: "info",
                              });
                            </script>';
						        }
						        if(($_GET['login'])== 'logout'){
						        	echo'<script>
                              swal({
                                title: "LOGOUT REALIZADO COM SUCESSO",
                                text: "O logout foi realizado",
                                icon: "success",
                              });
                            </script>';
						        }
						      }
					      ?>

                    <div class="title-form">
                      <h1><i class="icon icon-comments-o"></i>Login</h1>
                    </div>
        
                    <form class="" action="../live/php/login.php" method="post">
        
                        <span>
                            <input type="text" class="input-slide" id="email" name="email" placeholder="E-mail" autocomplete="off" required=""/>
                            <label for="email"> <i class="fa fa-fw">&#xF0E0;</i> </label>
                        </span>
        
                        <span>
                            <input type="password" class="input-slide" id="senha" name="senha" placeholder="Senha" autocomplete="off" required=""/>
                            <label for="senha"> <i class="fa fa-fw">&#xF084;</i> </label>
                        </span>
        
                        <div class="box-btn">
                             
                            <button type="submit" id="entrar" name="entar" class="btn-envia zoom-shadow">
                              Entar <i class="fa fa-fw">&#xF090;</i> 
                            </button>
        
                        </div>
        
                    </form>
        
                </div>
          </div>
              <div class="col-3"></div>

           </div>
           </section><!--Login-->

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
