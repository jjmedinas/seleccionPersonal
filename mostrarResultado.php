<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplicacion Seleccion de Personal</title>
	
    <!-- css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	
	 

	<!-- Section: Resultado -->
    <section id="recomendaciones" class="home-section color-dark bg-white">
		<div class="container marginbot-10">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold"><font size="7">Resultado :</font></h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
   <div class="row animatedParent">
               <div class="col-xs-6 col-sm-4 col-md-4">
                  <div class="animated rotateInDownLeft">
                      <div class="service-box">
                          <div class="text-center service-icon">
                          <span class="fa fa-user fa-3x"></span> 
                          </div>
                                <div class="text-center service-desc">            
                                <h5>Postulante Seleccionado</h5>
                                    <div class="divider-header"></div>
                                    <p><font size="6"><?php
                                    echo("<font color='red'>".$_GET['nombre']."<font><br>");
                                    echo("<font color='red'>Puntaje:".$_GET['resultado']."<font>");
                                    ?></p></font>
                                                       <a href="index.html" class="learn-more-btn btn-scroll">Inicio</a>
                                                   
                                    </div>
                                </div>
                      </div>
                  </div>
                      <div class="animated rotateInDownRight">
                      <div class="col-xs-1 col-sm-1 col-md-1 service-box">
                        <img src="graficar.php"  >
                      </div>
                      </div>
              </div>		

        </div>
		</div>

	</section>
<!-- Section: Resultado -->

		


        






	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						
					</ul>
				</div>
				<div class="col-md-6 text-right">
                    <p>&copy;Copyright 2015 - Juan Medina - Universidad Distrital - Bogota </p>
                </div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>

</body>

</html>