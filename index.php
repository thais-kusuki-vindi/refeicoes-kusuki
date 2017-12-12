<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107598133-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-107598133-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kusuki Refeições - Faça seu pedido 11 5589-6073">
    <meta name="author" content="Fabio Kusuki">

    <title>Refeições Kusuki - 11 5589-6073</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Francois+One|Roboto" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- NAVBAR
    ================================================== -->
    <?php include("header.html"); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/prato05.jpg" class="img-responsive" alt="Tradição no bairro">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tradição</h1>
              <p>Há mais de 20 anos servindo comida saborosa e de qualidade no bairro da Praça da Árvore. Venha saborear!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/tulipa.jpg"  class="img-responsive" alt="Tulipa de frango">
          <div class="container">
            <div class="carousel-caption">
              <h1>Carnes assadas aos finais de semana</h1>
              <p>Venha saborear os nossos assados de sábado e domingo.<br>
                Nossos frangos assados são os mais suculentos da região! Reserve o seu.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/frango-assado.jpg"  class="img-responsive" alt="Comida Caseira">
          <div class="container">
            <div class="carousel-caption">
              <h1>Comida Caseira.</h1>
              <p>Comida caseira servida diariamente. Faça o download do nosso cardápio</p>
              <p><a class="btn btn-lg btn-primary" href="cardapio.html" role="button">Ver Cardápio</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4"><img src="images/icon-menu.png" class="img-responsive center-block" alt="Cardápio">
          <h2>Cardápio</h2>
          <p>Monte o seu prato com acompanhamento ou peça o especial do dia. Temos pratos diferenciados aos finais de semana. Consulte nosso cardápio!</p>
          <p><a class="btn btn-default" href="cardapio.html" role="button">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4"><img src="images/icon-delivery.png" class="img-responsive center-block" alt="Delivery">
          <h2>Delivery</h2>
          <p>(11) 5584-9215 ou (11) 5589-6073<br>
            Diariamente das 10h30 às 14h30
            <br>
          Consulte sobre a área atendida e taxa de entrega</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4"><img src="images/icon-cartoes.png" class="img-responsive center-block" alt="Aceitamos cartões">
          <h2>Cartões</h2>
          <p>Aceitamos cartões de débito, crédito, refeição e alimentação (exceto Ticket Restaurante e Ticket Alimentação). Consulte!</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
    
    <!-- FOOTER
    ================================================== -->
    <?php include("footer.html"); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
