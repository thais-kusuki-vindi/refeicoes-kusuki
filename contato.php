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
    <link href="css/map.css" rel="stylesheet">

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

    
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>CONTATO</h1>
      </div>
      <address>
        <h2>Refeições Kusuki</h2>
        Rua Bertioga, 305, Praça da Árvore<br>
        São Paulo, SP 0000-000<br>
        <abbr title="Phone">Tel:</abbr> (11) 5584-9215 e (11) 5589-6073<br>
        <a href="mailto:contato@kusuki.com.br">contato@kusuki.com.br</a>
      </address>
      <h2>Onde Estamos</h2>
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div id="map"></div>
        </div>
      </div>
    </div><!-- /content -->

    <!-- FOOTER
    ================================================== -->
    <?php include("footer.html"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="js/navActive.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var rotKusuki = {lat: -23.6109472, lng: -46.634339817};
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(-23.6109472,-46.6343398,17),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var contentString = "<strong>Kusuki</strong>";
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        
        var marker = new google.maps.Marker({
          position: rotKusuki,
          map: map,
          title: 'Refeições Kusuki (Localização)'
        });

        infowindow.open(map, marker);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>
