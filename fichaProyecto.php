<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$idProyecto = $_GET['project-id'];
//echo $idProyecto;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Govern de les TIC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">

      <script src="script/jquery-1.10.2.min.js"></script>

      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>

      <script src="https://code.highcharts.com/modules/drilldown.js"></script>




<script type="text/javascript">
    $(function () {
    // Create the chart
    $('#estadistica1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Usuarios por mes.'
        },
        subtitle: {
            text: 'Poner subtítulo en caso de necesitarlo.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total de usuarios'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}¡'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> usuarios al mes<br/>'
        },

        series: [{
            name: 'Totales',
            colorByPoint: true,
            data: [{
                name: 'Enero',
                y: 56.33, color: 'red',
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Febrero',
                y: 24.03,
                drilldown: 'Chrome',
                color: 'green'
            }, {
                name: 'Marzo',
                y: 10.38,
                drilldown: 'Firefox',
                color: 'yellow'
      
            }]
        }]
    });
});


</script>



<script type="text/javascript">
    $(function () {
    // Create the chart
    $('#estadistica2').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total de ventas por mes.'
        },
        subtitle: {
            text: 'Poner subtítulo en caso de necesitarlo.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total de ventas'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}¡'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> usuarios al mes<br/>'
        },

        series: [{
            name: 'Totales',
            colorByPoint: true,
            data: [{
                name: 'Enero',
                y: 56.33, color: 'red',
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Febrero',
                y: 24.03,
                drilldown: 'Chrome',
                color: 'green'
            }, {
                name: 'Marzo',
                y: 10.38,
                drilldown: 'Firefox',
                color: 'yellow'
      
            }]
        }]
    });
});


</script>
                                            








</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">MERCA-TIC</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                        
                    </div>
                </nav>
            
                                </div>
                                <!--END TOPBAR-->
                                <div id="wrapper">
                                    <!--BEGIN SIDEBAR MENU-->
                                    <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                                    data-position="right" class="navbar-default navbar-static-side">
                                    <div class="sidebar-collapse menu-scroll">
                                        <ul id="side-menu" class="nav">

                                         <div class="clearfix"></div>
                                         <li><a href="index.php"><i class="fa fa-tachometer fa-fw">
                                            <div class="icon-bg bg-orange"></div>
                                        </i><span class="menu-title">Principal</span></a></li>

                                        <li><a href="propuestas.php"><i class="fa fa-desktop fa-fw">
                                            <div class="icon-bg bg-pink"></div>
                                        </i><span class="menu-title">Propuestas</span></a>
                                        
                                    </li>
                                    <li><a href="principios.php"><i class="fa fa-sitemap fa-fw">
                                        <div class="icon-bg bg-dark"></div>
                                    </i><span class="menu-title">Principios</span></a>
                                    
                                </li>
                                <li class="active"><a href="proyectos.php"><i class="fa fa-send-o fa-fw">
                                    <div class="icon-bg bg-green"></div>
                                </i><span class="menu-title">Proyectos</span></a>
                                
                            </li>
                            <!-- <li><a href="metricas.php"><i class="fa fa-edit fa-fw">
                                <div class="icon-bg bg-violet"></div>
                            </i><span class="menu-title">Métricas</span></a>
                            
                        </li> -->
                        <li><a href="objetivos.php"><i class="fa fa-th-list fa-fw">
                            <div class="icon-bg bg-blue"></div>
                        </i><span class="menu-title">Objetivos Estratégicos</span></a>
                        
                    </li>
                    <!-- <li><a href="evaluaciones.php"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Evaluaciones</span></a>
                    
                </li> -->
                <li><a href="gestion.php"><i class="fa fa-file-o fa-fw">
                    <div class="icon-bg bg-yellow"></div>
                </i><span class="menu-title">Gestión Económica</span></a>
                
            </li>
            <!-- <li><a href="estadisticas.php"><i class="fa fa-bar-chart-o fa-fw">
                <div class="icon-bg bg-orange"></div>
            </i><span class="menu-title">Estadísticas</span></a> -->
        </div>
    </nav>
    <!--END SIDEBAR MENU-->
  
                                        <!--BEGIN PAGE WRAPPER-->
                                        <div id="page-wrapper">
                                            <!--BEGIN TITLE & BREADCRUMB PAGE-->
                                            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                                             <?php
                                                                  $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                  $resp = $mysqli->query("SELECT * FROM proyectos WHERE id=".$idProyecto.";");


                                                                  while($row1 = $resp->fetch_row()){

                                                                $out1.='<div class="page-header pull-left">';
                                                                $out1.='<div class="page-title">';
                                                                $out1.='Proyecto ';
                                                                $out1.=$row1[1];
                                                                $out1.='</div>';
                                                                $out1.='</div>';

                                                                  }

                                                                  echo $out1;

                                            ?>
                                                
                                                <ol class="breadcrumb page-breadcrumb pull-right">
                                                    <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                                    <li class="hidden"><a href="#">Proyectos</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                                    <li class="active">Proyectos</li>
                                                </ol>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                            <!--END TITLE & BREADCRUMB PAGE-->
                                            <!--BEGIN CONTENT-->

                                             <?php 

                                                                     $mysqli = mysqli_connect("localhost","root","root", "test");

                                                                /* verificar la conexión */
                                                                if (mysqli_connect_errno()) {
                                                                    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
                                                                    exit();
                                                                }



                                                                    $res = $mysqli->query("SELECT * FROM evaluaciones WHERE idProyecto=".$idProyecto.";");
                                                                    $resp = $mysqli->query("SELECT * FROM proyectos WHERE id=".$idProyecto.";");


                                                                    $fecha = array();
                                                                    $responsabilidad = array();
                                                                    $estrategia = array();
                                                                    $adquision = array();
                                                                    $rendimiento = array();
                                                                    $conformidad = array();
                                                                    $conductaHumana = array();
                                                                    
                                                                    $nombre = array();

                                                                    while($row = $res->fetch_row()){
                                                                    array_push($fecha, $row[1]);

                                                                    array_push($responsabilidad, $row[2]);
                                                                    array_push($estrategia, $row[3]);
                                                                    array_push($adquision, $row[4]);
                                                                    array_push($rendimiento, $row[5]);
                                                                    array_push($conformidad, $row[6]);
                                                                    array_push($conductaHumana, $row[7]);


                                                                    }


                                                                    while($row1 = $resp->fetch_row()){
                                                                        array_push($nombre, $row1[1]);

                                                                     }


                                                                /* cerrar la conexión */
                                                                $mysqli->close();

                                                                    ?>






                                            <div class="page-content">
                                                <div id="tab-general">
                                                    <div id="sum_box" class="row mbl">
                                                        <div class="col-lg-12">
                                                            <div class="portlet box">
                                                                <div class="portlet-header">
                                                                    <div style="overflow: hidden;" class="portlet-body">


                                                                    <div class="col-lg-12">
                                                                    <div>
                                                                    <div class="panel panel-red">
                                                                    <div class="panel-heading">
                                                                    Alertas
                                                                    </div>


                                                                    <div class="form-body pal">


                                                                    <div class="row">                                         

                                                                    <div class="col-md-4">
                                                                   
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                 
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                    
                                                                    </div>





                                                                    </div>
                                                  

                                                                  


                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                













                                                                 <?php
                                                                  $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                  $res = $mysqli->query("SELECT * FROM proyectos WHERE id=".$idProyecto.";");


                                                                  while($row = $res->fetch_row()){

                                                                    
                                                                    // $out.='<div class="col-lg-12">';
                                                                    // $out.='<div>';
                                                                    // $out.='<div class="panel panel-red">';
                                                                    // $out.='<div class="panel-heading">';
                                                                    // $out.='Alertas';
                                                                    // $out.='</div>';


                                                                    // $out.='<div class="form-body pal">';


                                                                    // $out.='<div class="row">';                                                 

                                                                    // $out.='<div class="col-md-4">';
                                                                   
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="col-md-4">';
                                                                 
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="col-md-6">';
                                                                    
                                                                    // $out.='</div>';





                                                                    // $out.='</div>';
                                                  

                                                                    // // $out.='<div class="form-actions text-right pal">';
                                                                    // // $out.='<button type="submit" class="btn btn-success">Aceptar proyecto</button>';
                                                                    // // $out.='<button type="submit" class="btn btn-primary">Modificar proyecto</button>';
                                                                    // // $out.='<button type="submit" class="btn btn-danger">Cancelar proyecto</button>';
                                                                    // // $out.='</div>';




                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                




                                                                    $out.='<div class="col-lg-12">';
                                                                    $out.='<div>';
                                                                    $out.='<div class="panel panel-grey">';
                                                                    $out.='<div class="panel-heading">';
                                                                    $out.='Caracteristicas';
                                                                    $out.='</div>';


                                                                    $out.='<div class="form-body pal">';


                                                                    $out.='<div class="row">';                                                 

                                                                    $out.='<div class="col-md-4">';
                                                                    $out.='<b>Nombre del proyecto:</b> ';
                                                                    $out.=$row[1];
                                                                    $out.='</div>';
                                                                    $out.='<div class="col-md-4">';
                                                                    $out.='<b>Prioridad:</b> ';
                                                                    switch ($row[2]) {
                                                                                case "alta":
                                                                                $out.='<span class="badge badge-danger">Alta</span>';
                                                                                break;
                                                                                case "media":
                                                                                $out.='<span class="badge badge-warning">Media</span>';
                                                                                break;
                                                                                case "baja":
                                                                                $out.='<span class="badge badge-success">Baja</span>';
                                                                                break;
                                                                            }
                                                                    $out.='</div>';
                                                                    $out.='<div class="col-md-12">';
                                                                    $out.='<b>Descripción del proyecto:</b> ';
                                                                    $out.=$row[3];
                                                                    $out.='</div>';

                                                                    $out.='<div class="col-md-6">';
                                                                    $out.='<b>Fecha del proyecto: </b> ';
                                                                    $out.=$row[4];
                                                                    $out.='</div>';

                                                                    $out.='<div class="col-md-12">';
                                                                    $out.='<b>Coste inicial: </b> ';
                                                                    $out.=$row[5];
                                                                    $out.='€';
                                                                    $out.='</div><br/>';

                                                                    $out.='<div class="col-md-12">';
                                                                    $out.='<b>Estado: </b> ';
                                                                    $out.=$row[2];
                                                                    $out.='</div><br/>';

                                                                    $out.='<br/>';
                                                                    $out.='<br/>';
                                                                    $out.='<br/>';
                                                                    $out.='<br/>';
                                                                    $out.='<br/>';

                                                                    //$out.='<div class="form-actions text-right pal">';
                                                                    $out.='<div class="text-right pal">';
                                                                    //$out.='<button type="submit" class="btn btn-success">Aceptar proyecto</button>&nbsp&nbsp';
                                                                    $out.='<button type="submit" class="btn btn-primary">Modificar proyecto</button>&nbsp&nbsp';
                                                                    $out.='<button type="submit" class="btn btn-danger">Cancelar proyecto</button>';
                                                                    $out.='</div>';




                                                                    $out.='</div>';
                                                  

                                                                    // $out.='<div class="form-actions text-right pal">';
                                                                    // $out.='<button type="submit" class="btn btn-success">Aceptar proyecto</button>';
                                                                    // $out.='<button type="submit" class="btn btn-primary">Modificar proyecto</button>';
                                                                    // $out.='<button type="submit" class="btn btn-danger">Cancelar proyecto</button>';
                                                                    // $out.='</div>';




                                                                    $out.='</div>';
                                                                    $out.='</div>';
                                                                    $out.='</div>';
                                                                    $out.='</div>';







                                                                    $out.='<div class="col-lg-12">';
                                                                    $out.='<div>';
                                                                    $out.='<div class="panel panel-grey">';
                                                                    $out.='<div class="panel-heading">';
                                                                    $out.='Estadísticas';
                                                                    $out.='</div>';

                                                                    $out.='<div class="form-body pal">';


                                                                    $out.='<div class="row">';                                                 

                                                                    $out.='<div class="col-md-12">';

                                                                    
                                                                    $out.='<div id="estadistica1" style="min-width: 310px; height: 400px; margin: 0 auto">';
                                                                    $out.='</div>';

                                                                   
                                                                    $out.='</div>';



                                                                    $out.='<div class="col-md-12">';

                                                                    
                                                                    $out.='<div id="estadistica2" style="min-width: 310px; height: 400px; margin: 0 auto">';
                                                                    $out.='</div>';

                                                                   
                                                                    $out.='</div>';

                                                                    $out.='<div class="col-md-4">';
                                                                 
                                                                    $out.='</div>';
                                                                    
                                                                    $out.='<div class="col-md-6">';
                                                                    
                                                                    $out.='</div>';





                                                                    $out.='</div>';



                                                                    $out.='</div>';
                                                                    $out.='</div>';
                                                                    $out.='</div>';
                                                                    $out.='</div>';
                                                                    

                                                                
                                                                }

                                                                echo $out;


                                                                ?>


                                                  

                                                                    <div class="col-lg-12">
                                                                    <div>
                                                                    <div class="panel panel-green">
                                                                    <div class="panel-heading">
                                                                    Evaluaciones
                                                                    </div>

                                                                    <div class="form-body pal">


                                                                    <div class="row">                                         

                                                                    <div class="col-md-8">

                                                                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
                                                                    </div>
                                                                   
                                                                    </div>

                                                                    <div class="col-md-4">
                                                               
                                                                    <div id="añadir">

                                                                     <form class="form-horizontal" method="POST" action="insertarprincipio.php">
                                                                    <fieldset>

                                                                    <!-- Form Name -->
                                                                    <legend>Añadir Evaluacion</legend>

                                                                    <!-- Text input-->
                                                                    <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Responsabilidad: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Estratégia: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Adquisición: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Rendimiento: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Conformidad: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label" for="nombre">Conducta Humana: </label>  
                                                                      <div class="col-md-4">
                                                                       <select name="poblacion" class="selectpicker" data-size="3" data-width="130px">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>
                                                                      </div>
                                                                    </div>

                                                


                                                                      <div class="form-group">
                                                                      <label class="col-md-3 control-label" for="nombre"></label>  
                                                                      <div class="col-md-4">
                                                                      <input class="btn btn-action btn-lg" value="Evaluar" type="submit"/>
                                                                      </div>
                                                                    </div>


                                                                       
                                                                



                                                                    </form>

                                                                    </div>








                                                                    </div>

                                                                    </div>
                                                                    
                                                                   



                                                                    </div>
                                                  
                                                  

                                                                    


                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>









                                                                    <script type="text/javascript">
                                                                    
                                                                    var nfechas = "<?php echo $mum; ?>";

                                                                    var fechas = "<?php echo $fecha; ?>";

                                                                    $(function () {
                                                                    $('#container').highcharts({
                                                                title: {
                                                                    text: 'Evaluaciones Totales',
                                                                    x: -20 //center
                                                                },
                                                                subtitle: {
                                                                    text: '<?php echo $nombre[0];?>',
                                                                    x: -20
                                                                },
                                                                xAxis: {
                                                                    categories: 


                                                                    <?php 

                                                                $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                $result = $mysqli->query($query);


                                                                /* array numérico */
                                                                $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("['$fecha[$i]', ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("'$fecha[$i]', ");

                                                                    }
                                                                    printf ("'$fecha[$i]']");

                                                                } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                } else {
                                                                    echo "Error";
                                                                }

                                                                /* liberar la serie de resultados */
                                                                $result->free();

                                                                /* cerrar la conexión */
                                                                $mysqli->close();

                                                                    ?>

                                                                    
                                                                },
                                                                yAxis: {
                                                                    title: {
                                                                        text: 'Puntuaciones'
                                                                    },
                                                                    plotLines: [{
                                                                        value: 0,
                                                                        width: 1,
                                                                        color: '#808080'
                                                                    }]
                                                                },
                                                                tooltip: {
                                                                    valueSuffix: 'Puntos'
                                                                },
                                                                legend: {
                                                                    layout: 'vertical',
                                                                    align: 'right',
                                                                    verticalAlign: 'middle',
                                                                    borderWidth: 0
                                                                },
                                                                series: [{
                                                                    name: 'Responsabilidad',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$responsabilidad[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$responsabilidad[$i], ");

                                                                    }
                                                                    printf ("$responsabilidad[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                /* liberar la serie de resultados */
                                                                $result->free();

                                                                /* cerrar la conexión */
                                                                $mysqli->close();

                                                                    ?>

                                                                }, {
                                                                    name: 'Estrategia',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$estrategia[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$estrategia[$i], ");

                                                                    }
                                                                    printf ("$estrategia[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                    /* liberar la serie de resultados */
                                                                    $result->free();

                                                                    /* cerrar la conexión */
                                                                    $mysqli->close();

                                                                    ?>

                                                                }, {
                                                                    name: 'Adquisición',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$adquision[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$adquision[$i], ");

                                                                    }
                                                                    printf ("$adquision[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                    /* liberar la serie de resultados */
                                                                    $result->free();

                                                                    /* cerrar la conexión */
                                                                    $mysqli->close();

                                                                    ?>

                                                                }, {
                                                                    name: 'Rendimiento',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$rendimiento[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$rendimiento[$i], ");

                                                                    }
                                                                    printf ("$rendimiento[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                    /* liberar la serie de resultados */
                                                                    $result->free();

                                                                    /* cerrar la conexión */
                                                                    $mysqli->close();

                                                                    ?>

                                                                }, {
                                                                    name: 'Conformidad',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$conformidad[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$conformidad[$i], ");

                                                                    }
                                                                    printf ("$conformidad[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                    /* liberar la serie de resultados */
                                                                    $result->free();

                                                                    /* cerrar la conexión */
                                                                    $mysqli->close();

                                                                    ?>

                                                                }, {
                                                                    name: 'Conducta Humana',
                                                                    data: 

                                                                    <?php 

                                                                    $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                    $query = "SELECT COUNT(idProyecto) FROM evaluaciones WHERE idProyecto=".$idProyecto."";
                                                                    $result = $mysqli->query($query);


                                                                    /* array numérico */
                                                                    $row = $result->fetch_array(MYSQLI_NUM);



                                                                    $i=0;
                                                                    if ($i == 0) {
                                                                    $uno=printf ("[$conductaHumana[$i], ");
                                                                    $i++;
                                                                    for ($i; $i <$row[0]-1; $i++) {

                                                                        printf ("$conductaHumana[$i], ");

                                                                    }
                                                                    printf ("$conductaHumana[$i]]");

                                                                    } elseif ($a == 1) {
                                                                    echo "Error en variable i";
                                                                    } else {
                                                                    echo "Error";
                                                                    }


                                                                    /* liberar la serie de resultados */
                                                                    $result->free();

                                                                    /* cerrar la conexión */
                                                                    $mysqli->close();

                                                                    ?>

                                                                }]
                                                            });
                                                        });


                                                                </script>






                                                                    

                                        



                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!--END CONTENT-->
                                                    <!--BEGIN FOOTER-->
                                                    <div id="footer">
                                                        <div class="copyright">
                                                            <a href="http://themifycloud.com">2016 Govern de les TIC - Jose Ramón Santoyo - Miguel Ángel Martín - Vicente García</a></div>
                                                        </div>
                                                        <!--END FOOTER-->
                                                    </div>
                                                    <!--END PAGE WRAPPER-->
                                                </div>
                                            </div>


                                            <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
                                            <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
                                            <script src="script/jquery-migrate-1.2.1.min.js"></script>
                                            <script src="script/jquery-ui.js"></script>
                                            <script src="script/bootstrap.min.js"></script>
                                            <script src="script/bootstrap-hover-dropdown.js"></script>
                                            <script src="script/html5shiv.js"></script>
                                            <script src="script/respond.min.js"></script>
                                            <script src="script/jquery.metisMenu.js"></script>
                                            <script src="script/jquery.slimscroll.js"></script>
                                            <script src="script/jquery.cookie.js"></script>
                                            <script src="script/icheck.min.js"></script>
                                            <script src="script/custom.min.js"></script>
                                            <script src="script/jquery.news-ticker.js"></script>
                                            <script src="script/jquery.menu.js"></script>
                                            <script src="script/pace.min.js"></script>
                                            <script src="script/holder.js"></script>
                                            <script src="script/responsive-tabs.js"></script>
                                            <script src="script/jquery.flot.js"></script>
                                            <script src="script/jquery.flot.categories.js"></script>
                                            <script src="script/jquery.flot.pie.js"></script>
                                            <script src="script/jquery.flot.tooltip.js"></script>
                                            <script src="script/jquery.flot.resize.js"></script>
                                            <script src="script/jquery.flot.fillbetween.js"></script>
                                            <script src="script/jquery.flot.stack.js"></script>
                                            <script src="script/jquery.flot.spline.js"></script>
                                            <script src="script/zabuto_calendar.min.js"></script>
                                            <script src="script/index.js"></script>
                                            <!--LOADING SCRIPTS FOR CHARTS-->
                                            <script src="script/highcharts.js"></script>
                                            <script src="script/data.js"></script>
                                            <script src="script/drilldown.js"></script>
                                            <script src="script/exporting.js"></script>
                                            <script src="script/highcharts-more.js"></script>
                                            <script src="script/charts-highchart-pie.js"></script>
                                            <script src="script/charts-highchart-more.js"></script>
                                            <!--CORE JAVASCRIPT-->
                                            <script src="script/main.js"></script>
                                            <script>        (function (i, s, o, g, r, a, m) {
                                                i['GoogleAnalyticsObject'] = r;
                                                i[r] = i[r] || function () {
                                                    (i[r].q = i[r].q || []).push(arguments)
                                                }, i[r].l = 1 * new Date();
                                                a = s.createElement(o),
                                                m = s.getElementsByTagName(o)[0];
                                                a.async = 1;
                                                a.src = g;
                                                m.parentNode.insertBefore(a, m)
                                            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                                            ga('create', 'UA-145464-12', 'auto');
                                            ga('send', 'pageview');


                                        </script>
                                    </body>
                                    </html>
