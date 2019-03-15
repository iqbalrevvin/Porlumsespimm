<?php @session_start(); ?>

<!doctype html>
<html lang="id">
    <?php require('Template/headStyle.php'); ?>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <?php require('Template/headBar.php'); ?>
            <!-- end topbar-main -->
            <?php require('Template/headNav.php'); ?>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <?php require('Template/body.php'); ?>
                <!-- end page title end breadcrumb -->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!--FOOTER CONTENT-->
        <?php require('Template/footer.php'); ?>
        <!-- FOOTER LINK SCRIPT-->
        <?php require('Template/footerLinkScript.php'); ?>
    </body>

</html>
