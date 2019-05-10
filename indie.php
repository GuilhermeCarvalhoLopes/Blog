<?php
require_once "inserir.php";
//criar um objeto do tipo cargo
$comentario = new Comentario();

// chamar a funcao para listar todos cargos
$lista = $comentario->listarAll();
// chamar a funcao para inserir testando se foi clicado no botao salvar
if(isset($_POST['salvar'])){
    $comentario->inserir();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> Música | Indie</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Carregando...</span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Area End -->

    <!-- Social Share Area Start -->
    <div class="razo-social-share-area">
      <a style="cursor: pointer;" onclick="window.open('https://api.whatsapp.com/send?text=Acesse site de música e comente em artigos', 'segundajanela', 'toolbar,menubar,scrollbars,resizable,directories,status,location,copyhistory,width=800,height=600,');" class="youtube"><i class="fa fa-whatsapp"></i></a>
        <a href="mailto:" class="instagram"><i class="fa fa-yahoo"></i></a>

        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="login.php"><img src="./img/core-img/favicon.ico" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                                    <div class="classynav">
                                <ul id="nav">
                                    <li><a href="login.php">Página Inicial</a></li>
                                    <li><a href="#">Tipos</a>
                                        <ul class="dropdown">
                                          <li><a href="rock.php">- Rock</a></li>
                                            <li><a href="sertanejo.php">- Sertanejo</a></li>
                                            <li><a href="pagode.php">- Pagode</a></li>
                                            <li><a href="rap.php">- Rap</a></li>
                                            <li><a href="eletronica.php">- Eletrônica</a></li>
                                            <li><a href="indie.php">- Indie</a></li>
                                            <li><a href="mpb.php">- Mpb</a></li>
                                        </ul>
                                    </li>
                                                          
                                    <li><a href="conta.php">Conta</a></li>
                                    <li><a href="index.html">Sair</a></li>
                                </ul>

                                <!-- Share Icon -->
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Podcast Thumbnail Area Start -->
    <section class="podcast-hero-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/capa.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="podcast-hero-text section-padding-80 d-flex align-items-center">
                        <div class="podcast-txt- pr-5">
                            <h2>Lana Del Rey - Video Games
</h2>
                            <div class="podcast-meta-data">
                                <a href="#" class="event-date"><i class="icon_calendar"></i> 16 de outubro de 2011</a>
                                <a href="#" class="event-time"><i class="icon_clock_alt"></i> 4:46 min</a>
                            </div>
                        </div>
                        <a href="#" class="pt-5 pt-md-0 pl-md-5"><img src="img/core-img/img/bg-img/capa.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Podcast Thumbnail Area End -->

    <!-- Audio Player Area Start -->
    <div class="podcast-audio-player-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="audio-player">
                        <audio preload="auto" controls>
                            <source src="audio/indie.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Audio Player Area End -->

    <!-- Blog Details Area Start -->
    <section class="blog-details-area section-padding-80">
        <div class="container">
            <!-- Post Details Text -->
            <div class="post-details-text">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-2 col-xl-1">
                        <!-- Post Share -->
                        <div class="razo-author-avatar">
                            <img src="img/bg-img/amr.jpg" alt="" style="width: 60px">
                            <h6>Lorena</h6>
                        </div>
                    </div>

                    <div class="col-12 col-sm-10 col-xl-9">
                        <p>Indie, 
    Este estilo de música surgiu na década de 70 no Reino Unido e nos Estados unidos. O indie é uma abreviação de independent e se aplica na Indústria cultural, de artes e nas apresentações ao vivo aos músicos, produtores e artistas que não possuem contratos de publicação e distribuição com grandes empresas e lançam os seus projetos independentemente. O indie também pode se referir a um estilo musical de popularidade restrita mas que, com o advento da internet, tenha ganhado mais popularidade. 
</p>
<center><img src="img/bg-img/indiee.jpg" style="width: 500px"></center><br>
                        <p>A primeira banda indie foi Buzzcocks, com um EP em 1976. Nos Estados Unidos, a música normalmente denominada indie rock descende da cena de rock alternativo influenciada pelo punk rock e hardcore da década de 1970e início dos anos 1980. Na década de 2000, o gênero Indie Rock foi mudando para um estilo mais rápido, com uma cena undeground, tirada de bandas como Nirvana e outros timbres grossos, de guitarras limpas e sem distorção, em alguns casos, um som mais gritado, como é ouvido em bandas como The Strokes.</p>

                        <p>As principais bandas/artistas indies internacionais são: The Strokes, Arctic Monkeys, Lana del Rel. Já no Brasil: Pato Fu, A Banda Mais Bonita da Cidade,Supercombo.</p>

                 
                           <!-- Comments Area -->
                        <div class="comment_area mb-50 clearfix">
                            <h5 class="title">Comentários</h5>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->

                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <?php if($lista) : ?>
                                            <?php foreach ($lista as $comentario) : ?>
                                            <a href="#" class="author-name">Nome:<?php echo $comentario->nome;?>
                                            <p>Comentario:<?php echo $comentario->comentario;?></p>
                                            <a href="#" class="like">Curtir</a>
                                                <?php endforeach; ?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                        </div>
                        <!-- Leave A Reply -->
                        <div class="razo-contact-form">
                            <h2 class="mb-4">Deixe um comentário</h2>

                            <!-- Form -->
                            <form action="indie.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="nome" class="form-control mb-30" placeholder="Nome">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" class="form-control mb-30" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="comentario" class="form-control mb-30" placeholder="Comentário"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn razo-btn btn-3 mt-15" name="salvar">Públicar comentário</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Area End -->

        <!-- Main Footer Area End -->

        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>