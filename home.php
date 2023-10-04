<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Adminpage - Responsive Bootstrap Admin Template Dashboard</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>--><!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome 4.7.0 -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- socicon css -->
        <link href="assets/socicon/social.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <!-- Content Wrapper -->
                <div class="lock-wrapper-page">
                    <div class="text-center">
                        <a href="index.html" class="logo-lock"><i class="fa fa-ticket"></i> <span>Eticket</span> </a>
                    </div>
                    <header class="codrops-header">
                        <h1>Gerer numériquement <span>vos entreprises, &amp; boutiques et factures</span></h1>
                    </header> 
                </div>
                <!-- /.content-wrapper -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <!-- Content Wrapper -->
                <div class="login-wrapper">
                    <div class="container-center">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="view-header">
                                    <div class="header-icon">
                                        <i class="pe-7s-unlock"></i>
                                    </div>
                                    <div class="header-title">
                                        <h3>Connexion</h3>
                                        <small><strong>Veuillez saisir vos identifiants pour vous connecter.</strong></small>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="index.html" id="loginForm" novalidate>
                                    <!--Social Buttons--> 
                                    <div class="social">
                                        <strong>Connectez-vous en utilisant le réseau social:</strong><br>
                                        <div class="twitter_bg"><i class="fa fa-twitter"></i><a href="#" class="btn_1">Twitter</a></div>
                                        <div class="fb_bg"><i class="fa fa-facebook"></i><a href="#" class="btn_2">Facebook</a></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nom d'utilisateur</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="username" type="text" class="form-control" name="email" placeholder="Username">
                                        </div>
                                        <span class="help-block small">Votre nom d'utilisateur unique pour l'application</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mot de passe</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input id="pass" type="password" class="form-control" name="password" placeholder="******">
                                        </div>
                                        <span class="help-block small">Votre nom d'utilisateur unique pour l'application</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary pull-right">Connexion</button>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">Gardez-moi connecté</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="bottom_text">
                            Vous n'avez pas de compte ?<a href="register.html">S'inscrire</a><br>
                            Rappeler <a href="forget_password.html">Mot de passe</a>
                        </div>

                    </div>
                </div>
                <!-- /.content-wrapper -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>