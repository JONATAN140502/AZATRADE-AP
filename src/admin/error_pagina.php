<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Favicons -->
<link rel="apple-touch-icon" href="img/logo.png">
<link rel="icon" href="img/logo.png">
<title>
   ..: Azatrade :..
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/material-dashboard.min.css?v=2.0.1">
<!-- Documentation extras -->
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="../css/demo.css" rel="stylesheet"/>
<!-- iframe removal -->
  <script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
          const elements = document.getElementsByClassName("iframe-extern");
          while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
  </script>
        </head>
          <body class="off-canvas-sidebar pricing-page">
<nav class="navbar navbar-expand-lg bg-primary navbar-transparent navbar-absolute" color-on-scroll="500">
	<div class="container">
    <div class="navbar-wrapper">
        <a href="#" class="simple-text logo-mini">
             <img src="img/logo.png" width="30px" />
        </a>
	        <a class="navbar-brand" href="#">Azatrade</a>
		</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://www.azatrade.info/" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="planes/" class="nav-link">
                        <i class="material-icons">view_week</i>
                        Planes
                    </a>
                </li>
                <li class= "nav-item ">
                    <a href="registro/" class="nav-link">
                        <i class="material-icons">person_add</i>
                        Registrate
                    </a>
                </li>
                <li class= "nav-item ">
                    <a href="login/" class="nav-link">
                        <i class="material-icons">fingerprint</i>
                        Ingresar
                    </a>
                </li>
                
            </ul>
        </div>
	</div>
</nav>
<!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
            <div class="page-header pricing-page header-filter" style="background-image: url('img/plan.jpg'); background-size: cover; background-position: top center;">
          <div class="container">
        		<div class="row">
        			<div class="col-md-8 ml-auto mr-auto text-center">
        			<p>&nbsp;</p>

                      <br>          
        				<h1 class="title"><i style="font-size: 50px;" class="material-icons btn-danger">assignment_late</i> Oops error</h1>
        				<h5 class="description">No se encontro la pagina que buscas.</h5>
        			</div>
        		</div>
                <div class="row">
                    
                    
                    <div class="col-md-12">
<div class="card ">
                    <div class="card-header card-header-info card-header-icon">
    <div class="card-icon">
                          <i class="material-icons">search</i>
                        </div>
                        <h4 class="card-title">Seleccionar Año e ingresa descripcion del producto</h4>
    </div>
                   
                    <form method="post" action="producto.php">
                    <div class="card-body ">
                    <div class="col-sm-12">
                    <div class="row">
                    <div class="col-md-4">
                                                <div class="form-group">
<select name='selecyear' class='selectpicker' data-size='7' data-style='btn btn-info btn-round' title='Selecionar Año' required>";
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                    </select>
                   
                                               
                                                </div>
                                            </div>
                    <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" name="dato" class="form-control" placeholder="Ingrese Nombre del Producto" required />
                                                    <input type="hidden" name="btnsearch">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                            <button type="submit" name="btnsearch" class="btn btn-fill btn-success">Consultar <i class="material-icons">search</i></button>
											</div>
											
											</div>
											</div>
											</div>
					</form>
                  </div>
											</div>
                   
                </div>
        	</div>
        	
          
    </div>
    
    </div>

</body>

    <!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/bootstrap-material-design.min.js"></script>
<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js"></script>
<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="js/plugins/bootstrap-selectpicker.js"></script>
<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script src="js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/plugins/jasny-bootstrap.min.js"></script>
<!-- Plugins for presentation and navigation  -->
<script src="js/modernizr.js"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="js/material-dashboard.js?v=2.0.1"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="js/plugins/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../js/plugins/jquery.validate.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="js/plugins/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script src="js/plugins/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js"></script>
<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="js/plugins/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="js/plugins/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="js/plugins/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="js/plugins/fullcalendar.min.js"></script>
<!-- demo init -->
<script src="js/plugins/demo.js"></script>
 
  <script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();
        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
 
</html>