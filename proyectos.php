    <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
                        <li><a href="metricas.php"><i class="fa fa-edit fa-fw">
                            <div class="icon-bg bg-violet"></div>
                        </i><span class="menu-title">Métricas</span></a>
                          
                        </li>
                        <li><a href="objetivos.php"><i class="fa fa-th-list fa-fw">
                            <div class="icon-bg bg-blue"></div>
                        </i><span class="menu-title">Objetivos Estratégicos</span></a>
                              
                        </li>
                        <li><a href="evaluaciones.php"><i class="fa fa-database fa-fw">
                            <div class="icon-bg bg-red"></div>
                        </i><span class="menu-title">Evaluaciones</span></a>
                          
                        </li>
                        <li><a href="gestion.php"><i class="fa fa-file-o fa-fw">
                            <div class="icon-bg bg-yellow"></div>
                        </i><span class="menu-title">Gestión Económica</span></a>
                           
                       </li>
                        <li><a href="estadisticas.php"><i class="fa fa-bar-chart-o fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Estadísticas</span></a>
                </div>
            </nav>
                <!--END SIDEBAR MENU-->
                <!--BEGIN CHAT FORM-->
                <div id="chat-form" class="fixed">
                    <div class="chat-inner">
                        <h2 class="chat-header">
                            <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                            </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                        <div id="group-1" class="chat-group">
                            <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                                Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                    class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                        0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                                <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                    href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                    <span class="badge badge-info is-hidden">0</span></a></div>
                        <div id="group-2" class="chat-group">
                            <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                                Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                    class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                        0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                            Pierce</small> <span class="badge badge-info">1</span></a></div>
                        <div id="group-3" class="chat-group">
                            <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                                Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                    href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                        <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                            href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                            <span class="badge badge-info is-hidden">0</span></a></div>
                    </div>
                    <div id="chat-box" style="top: 400px">
                        <div class="chat-box-header">
                            <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                            </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                                Mckenzie</span> <small>Online</small>
                        </div>
                        <div class="chat-content">
                            <ul class="chat-box-body">
                                <li>
                                    <p>
                                        <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                            class="time">09:33</span></p>
                                    <p>
                                        Hi Swlabs, we have some comments for you.</p>
                                </li>
                                <li class="odd">
                                    <p>
                                        <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                            class="time">09:33</span></p>
                                    <p>
                                        Hi, we're listening you...</p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-textarea">
                            <input placeholder="Type your message" class="form-control" /></div>
                    </div>
                </div>
                <!--END CHAT FORM-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title">Proyectos</div>
                        </div>
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
                                            <div class="caption">Proyectos Actuales</div>
                                        <div style="overflow: hidden;" class="portlet-body">
                                            <?php
                                                $mysqli = mysqli_connect("localhost","root","", "test");
                                                $res = $mysqli->query("SELECT * FROM proyectos WHERE TRUE;");
                                                $out ='<table id="example" class="table table-striped table-bordered">';

                                                $out.='<tr>';

                                                $out.='<th>';
                                                $out.='ID';
                                                $out.='</th>';

                                                $out.='<th>';
                                                $out.='Nombre';
                                                $out.='</th>';

                                                $out.='<th>';
                                                $out.='Prioridad';
                                                $out.='</th>';

                                                $out.='<th>';
                                                $out.='Descripción';
                                                $out.='</th>';

                                                $out.='<th>';
                                                $out.='Fecha de Inicio';
                                                $out.='</th>';

                                                $out.='<th>'; 
                                                $out.='Coste Inicial';
                                                $out.='</th>';

                                                $out.= '<th>';
                                                $out.='Métrica';
                                                $out.='</th>';

                                                $out.= '<th>';
                                                $out.='Alineamiento';
                                                $out.='</th>';

                                                while($row = $res->fetch_row()){
                                                    $out.='<tr>';

                                                    $out.='<td>';
                                                    $out.=$row[0];
                                                    $out.='</td>'; 

                                                    $out.='<td>';
                                                    $out.=$row[1];
                                                    $out.='</td>';

                                                    switch ($row[2]) {
                                                        case "alta":
                                                            $out.='<td align="center" class="danger">';
                                                            break;
                                                        case "media":
                                                            $out.='<td align="center" class="warning">';
                                                            break;
                                                        case "baja":
                                                            $out.='<td align="center" class="success">';
                                                            break;
                                                    }
                                                    $out.='</td>';

                                                    $out.='<td>';
                                                    $out.=$row[3];
                                                    $out.='</td>';

                                                    $out.='<td>';
                                                    $out.=$row[4];
                                                    $out.='</td>'; 

                                                    $out.='<td>';
                                                    $out.=$row[5];
                                                    $out.='€';
                                                    $out.='</td>'; 

                                                    $out.='<td>';
                                                    $nombreMetrica = $mysqli->query("SELECT nombre FROM metricas WHERE id = $row[6];");
                                                    $filaNomMetrica = $nombreMetrica->fetch_row();
                                                    $out.='<a href="javascript:void(0)" data-name="name" data-pk="0" data-value="Item 0" class="editable editable-click">';
                                                    $out.=$filaNomMetrica[0];
                                                    $out.='</a>';
                                                    $out.='</td>'; 

                                                    $out.='<td>';
                                                    $alineamientoObjetivo = $mysqli->query("SELECT nombre FROM objetivos WHERE id = $row[7];");
                                                    $filaNomObj = $alineamientoObjetivo->fetch_row();
                                                    $out.='<a href="javascript:void(0)" data-name="name" data-pk="0" data-value="Item 0" class="editable editable-click">';
                                                    $out.=$filaNomObj[0];
                                                    $out.='</a>';
                                                    $out.='</td>'; 

                                                    $out.='<td>';
                                                    $out.='
                                                    <div class="todo-actions pull-right clearfix">
                                                        <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                                            <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                                            </i></a>
                                                    </div>';
                                                    $out.='</td>';
                                                    $out.='</tr>';
                                                    
                                                }
                                                $out.='</table>';
                                                echo $out;

                                                  // echo "<script>
                                                  //   $(function() {
                                                  //   $('#example').DataTable();
                                                  //   } );
                                                  // </script>"
                                                  
                                                ?> 

                                                


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

        <script src="script/jquery-1.10.2.min.js"></script>
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
