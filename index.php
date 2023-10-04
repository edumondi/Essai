<!DOCTYPE html>
<html lang="en">
    <head>
       <?php
            include('partials/header.php');
       ?>
    </head>
    <body>
        <div class="wrapper animsition">
            <!-- main header -->
            <header class="main-header">
                <!-- top navigation -->
                <?php
                    include('partials/notif.php');
                ?> <!-- /. top navigation -->
                <!--  main navigation -->
                <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
                    <!-- Start Top Search -->
                    <?php
                        include('partials/search.php');
                    ?>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <?php
                            include('partials/logo.php');
                        ?>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php
                            include('partials/nav.php');
                        ?>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- Start Side Menu -->
                    <div class="side">
                        <?php
                            include('partials/activity.php');
                        ?>
                        <!-- /.sidebar-menu -->
                        <?php
                            include('partials/progress.php');
                        ?>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- End Side Menu -->
                </nav> <!-- /. main navigation -->
                <!--<div class="clearfix"></div>-->
            </header> <!-- /. main header -->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <?php
                            include('layouts/titlebar.php');
                        ?>
                        <!-- /.Content Header (Page header) -->
                        <?php
                            include('layouts/statisticscard.php');
                        ?>
                        <?php
                            include('layouts/diagramjs.php');
                        ?>
                        <?php
                            include('layouts/row.php');
                        ?>
                        <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
            <?php
                include('partials/footer.php');
            ?>
            <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <?php
            include('partials/script.php');
        ?>
    </body>
</html>