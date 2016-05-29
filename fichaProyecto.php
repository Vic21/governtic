<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$idProyecto = $_GET['project-id'];
echo $idProyecto;
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
            $('#container').highcharts({
        title: {
            text: 'Evaluaciones Totales',
            x: -20 //center
        },
        subtitle: {
            text: 'Tienda Online',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
            valueSuffix: ' Puntos'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Responsabilidad',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Estrategia',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Adquisición',
            data: [-0.9, 0.6, 3.5, 5.4, 13.5, 5.0, 18.6, 17.9, 7.3, 9.0, 3.9, 1.0]
        }, {
            name: 'Rendimiento',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }, {
            name: 'Conformidad',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 15.0, 5.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'Conducta Humana',
            data: [-0.9, 0.6, 3.5, 8.4, 1.5, 13.0, 18.6, 17.9, 14.3, 2.0, 3.9, 1.0]
        }]
    });
});


        </script>


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
            text: 'Haz click en las columnas para ver los usuarios por mes.'
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
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Enero',
                y: 56.33,
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Febrero',
                y: 24.03,
                drilldown: 'Chrome'
            }, {
                name: 'Marzo',
                y: 10.38,
                drilldown: 'Firefox'
            }, {
                name: 'Abril',
                y: 4.77,
                drilldown: 'Safari'
            }, {
                name: 'Mayo',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Junio',
                y: 0.2,
                drilldown: 'Opera'
            }, {
                name: 'Julio',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Agosto',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Septiembre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Octubre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Noviembre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Diciembre',
                y: 0.91,
                drilldown: 'Opera'
            }]
        }],
        drilldown: {
            series: [{
                name: 'Microsoft Internet Explorer',
                id: 'Microsoft Internet Explorer',
                data: [
                    [
                        'v11.0',
                        24.13
                    ],
                    [
                        'v8.0',
                        17.2
                    ],
                    [
                        'v9.0',
                        8.11
                    ],
                    [
                        'v10.0',
                        5.33
                    ],
                    [
                        'v6.0',
                        1.06
                    ],
                    [
                        'v7.0',
                        0.5
                    ]
                ]
            }, {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v40.0',
                        5
                    ],
                    [
                        'v41.0',
                        4.32
                    ],
                    [
                        'v42.0',
                        3.68
                    ],
                    [
                        'v39.0',
                        2.96
                    ],
                    [
                        'v36.0',
                        2.53
                    ],
                    [
                        'v43.0',
                        1.45
                    ],
                    [
                        'v31.0',
                        1.24
                    ],
                    [
                        'v35.0',
                        0.85
                    ],
                    [
                        'v38.0',
                        0.6
                    ],
                    [
                        'v32.0',
                        0.55
                    ],
                    [
                        'v37.0',
                        0.38
                    ],
                    [
                        'v33.0',
                        0.19
                    ],
                    [
                        'v34.0',
                        0.14
                    ],
                    [
                        'v30.0',
                        0.14
                    ]
                ]
            }, {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v35',
                        2.76
                    ],
                    [
                        'v36',
                        2.32
                    ],
                    [
                        'v37',
                        2.31
                    ],
                    [
                        'v34',
                        1.27
                    ],
                    [
                        'v38',
                        1.02
                    ],
                    [
                        'v31',
                        0.33
                    ],
                    [
                        'v33',
                        0.22
                    ],
                    [
                        'v32',
                        0.15
                    ]
                ]
            }, {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v8.0',
                        2.56
                    ],
                    [
                        'v7.1',
                        0.77
                    ],
                    [
                        'v5.1',
                        0.42
                    ],
                    [
                        'v5.0',
                        0.3
                    ],
                    [
                        'v6.1',
                        0.29
                    ],
                    [
                        'v7.0',
                        0.26
                    ],
                    [
                        'v6.2',
                        0.17
                    ]
                ]
            }, {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v12.x',
                        0.34
                    ],
                    [
                        'v28',
                        0.24
                    ],
                    [
                        'v27',
                        0.17
                    ],
                    [
                        'v29',
                        0.16
                    ]
                ]
            }]
        }
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
            text: 'Ventas por mes.'
        },
        subtitle: {
            text: 'Haz click en las columnas para ver las ventas por mes.'
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
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Enero',
                y: 56.33,
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Febrero',
                y: 24.03,
                drilldown: 'Chrome'
            }, {
                name: 'Marzo',
                y: 10.38,
                drilldown: 'Firefox'
            }, {
                name: 'Abril',
                y: 4.77,
                drilldown: 'Safari'
            }, {
                name: 'Mayo',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Junio',
                y: 0.2,
                drilldown: 'Opera'
            }, {
                name: 'Julio',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Agosto',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Septiembre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Octubre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Noviembre',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Diciembre',
                y: 0.91,
                drilldown: 'Opera'
            }]
        }],
        drilldown: {
            series: [{
                name: 'Microsoft Internet Explorer',
                id: 'Microsoft Internet Explorer',
                data: [
                    [
                        'v11.0',
                        24.13
                    ],
                    [
                        'v8.0',
                        17.2
                    ],
                    [
                        'v9.0',
                        8.11
                    ],
                    [
                        'v10.0',
                        5.33
                    ],
                    [
                        'v6.0',
                        1.06
                    ],
                    [
                        'v7.0',
                        0.5
                    ]
                ]
            }, {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v40.0',
                        5
                    ],
                    [
                        'v41.0',
                        4.32
                    ],
                    [
                        'v42.0',
                        3.68
                    ],
                    [
                        'v39.0',
                        2.96
                    ],
                    [
                        'v36.0',
                        2.53
                    ],
                    [
                        'v43.0',
                        1.45
                    ],
                    [
                        'v31.0',
                        1.24
                    ],
                    [
                        'v35.0',
                        0.85
                    ],
                    [
                        'v38.0',
                        0.6
                    ],
                    [
                        'v32.0',
                        0.55
                    ],
                    [
                        'v37.0',
                        0.38
                    ],
                    [
                        'v33.0',
                        0.19
                    ],
                    [
                        'v34.0',
                        0.14
                    ],
                    [
                        'v30.0',
                        0.14
                    ]
                ]
            }, {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v35',
                        2.76
                    ],
                    [
                        'v36',
                        2.32
                    ],
                    [
                        'v37',
                        2.31
                    ],
                    [
                        'v34',
                        1.27
                    ],
                    [
                        'v38',
                        1.02
                    ],
                    [
                        'v31',
                        0.33
                    ],
                    [
                        'v33',
                        0.22
                    ],
                    [
                        'v32',
                        0.15
                    ]
                ]
            }, {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v8.0',
                        2.56
                    ],
                    [
                        'v7.1',
                        0.77
                    ],
                    [
                        'v5.1',
                        0.42
                    ],
                    [
                        'v5.0',
                        0.3
                    ],
                    [
                        'v6.1',
                        0.29
                    ],
                    [
                        'v7.0',
                        0.26
                    ],
                    [
                        'v6.2',
                        0.17
                    ]
                ]
            }, {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v12.x',
                        0.34
                    ],
                    [
                        'v28',
                        0.24
                    ],
                    [
                        'v27',
                        0.17
                    ],
                    [
                        'v29',
                        0.16
                    ]
                ]
            }]
        }
    });
});






</script>







</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
            data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
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

                        <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                            <ul id="news-update" class="ticker list-unstyled">
                            </ul>
                        </div>
                        
                    </div>
                </nav>
                <!--BEGIN MODAL CONFIG PORTLET-->
                <div id="modal-config" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                    &times;</button>
                                    <h4 class="modal-title">
                                        Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                            porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                            Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                            magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                            vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                            aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                            vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                            hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                            ultricies felis.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                                Close</button>
                                                <button type="button" class="btn btn-primary">
                                                    Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END MODAL CONFIG PORTLET-->
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
                                            <div class="page-content">
                                                <div id="tab-general">
                                                    <div id="sum_box" class="row mbl">
                                                        <div class="col-lg-12">
                                                            <div class="portlet box">
                                                                <div class="portlet-header">
                                                                    <div style="overflow: hidden;" class="portlet-body">



                                                                 <?php
                                                                  $mysqli = mysqli_connect("localhost","root","root", "test");
                                                                  $res = $mysqli->query("SELECT * FROM proyectos WHERE id=".$idProyecto.";");


                                                                  while($row = $res->fetch_row()){

                                                                    
                                                                    $out.='<div class="col-lg-12">';
                                                                    $out.='<div>';
                                                                    $out.='<div class="panel panel-red">';
                                                                    $out.='<div class="panel-heading">';
                                                                    $out.='Alertas';
                                                                    $out.='</div>';


                                                                    $out.='<div class="form-body pal">';


                                                                    $out.='<div class="row">';                                                 

                                                                    $out.='<div class="col-md-4">';
                                                                   
                                                                    $out.='</div>';

                                                                    $out.='<div class="col-md-4">';
                                                                 
                                                                    $out.='</div>';

                                                                    $out.='<div class="col-md-6">';
                                                                    
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







                                                                    // $out.='<div class="col-lg-12">';
                                                                    // $out.='<div>';
                                                                    // $out.='<div class="panel panel-grey">';
                                                                    // $out.='<div class="panel-heading">';
                                                                    // $out.='Estadísticas';
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="form-body pal">';


                                                                    // $out.='<div class="row">';                                                 

                                                                    // $out.='<div class="col-md-12">';

                                                                    
                                                                    // $out.='<div id="estadistica1" style="min-width: 310px; height: 400px; margin: 0 auto">';
                                                                    // $out.='</div>';

                                                                   
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="col-md-12">';

                                                                    
                                                                    // $out.='<div id="estadistica2" style="min-width: 310px; height: 400px; margin: 0 auto">';
                                                                    // $out.='</div>';

                                                                   
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="col-md-4">';
                                                                 
                                                                    // $out.='</div>';
                                                                    
                                                                    // $out.='<div class="col-md-6">';
                                                                    
                                                                    // $out.='</div>';





                                                                    // $out.='</div>';



                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                    // $out.='</div>';
                                                                    






                                                                    // $out.='<div class="col-lg-12">';
                                                                    // $out.='<div>';
                                                                    // $out.='<div class="panel panel-green">';
                                                                    // $out.='<div class="panel-heading">';
                                                                    // $out.='Evaluaciones';
                                                                    // $out.='</div>';

                                                                    // $out.='<div class="form-body pal">';


                                                                    // $out.='<div class="row">';                                                 

                                                                    // $out.='<div class="col-md-12">';

                                                                    // $out.='<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">';
                                                                    // $out.='</div>';
                                                                   
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
                                                                


                                                                
                                                                }

                                                                echo $out;


                                                                ?>




                                                                    <div class="col-lg-12">
                                                                    <div>
                                                                    <div class="panel panel-green">
                                                                    <div class="panel-heading">
                                                                    Estadísticas
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
                                                  

                                                                    <!--<div class="form-actions text-right pal">
                                                                    <button type="submit" class="btn btn-success">Aceptar proyecto</button>
                                                                    <button type="submit" class="btn btn-primary">Modificar proyecto</button>
                                                                    <button type="submit" class="btn btn-danger">Cancelar</button>
                                                                    </div> -->


   <?php
        $mysqli = mysqli_connect("localhost","root","root", "test");
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




    ?>




<script type="text/javascript">
            
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
            categories: ['<?php echo $fecha[0];?>', '<?php echo $fecha[1];?>', '<?php echo $fecha[2];?>']
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
            data: [<?php echo $responsabilidad[0];?>, <?php echo $responsabilidad[1];?>, <?php echo $responsabilidad[2];?>]
        }, {
            name: 'Estrategia',
            data: [<?php echo $estrategia[0];?>, <?php echo $estrategia[1];?>, <?php echo $estrategia[2];?>]
        }, {
            name: 'Adquisición',
            data: [<?php echo $adquision[0];?>, <?php echo $adquision[1];?>, <?php echo $adquision[2];?>]
        }, {
            name: 'Rendimiento',
            data: [<?php echo $rendimiento[0];?>, <?php echo $rendimiento[1];?>, <?php echo $rendimiento[2];?>]
        }, {
            name: 'Conformidad',
            data: [<?php echo $conformidad[0];?>, <?php echo $conformidad[1];?>, <?php echo $conformidad[2];?>]
        }, {
            name: 'Conducta Humana',
            data: [<?php echo $conductaHumana[0];?>, <?php echo $conductaHumana[1];?>, <?php echo $conductaHumana[2];?>]
        }]
    });
});


        </script>



<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">






                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                















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
