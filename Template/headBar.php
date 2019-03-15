<?php 
    require_once('Config/configDBObject.php');
    require_once('Model/Session/dataSession.php');
    require_once('Model/Session/sessionType.php');
    $secure= md5(md5(sessionType()).md5('date(yyyymmddH)'));
?>
<div class="topbar-main">
    <div class="container-fluid">
        <!-- Logo container-->
        <div class="logo">
            <!-- Text Logo -->
            <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
            <!-- Image Logo -->
            <a href="./" class="logo">
                <img src="Assets/images/logo-sespimma.png" alt="" height="50" class="logo-small">
                <img src="Assets/images/sespimma-logo-wide.png" alt="" height="50" class="logo-large">
            </a>
        </div>
        <!-- End Logo container-->


        <div class="menu-extras topbar-custom">

            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
       
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="Assets/images/users/small_<?= $user->fotoProfil(sessionType()) ?>" alt="user" class="rounded-circle"> 
                            <span class="ml-1 pro-user-name">
                                <?= $user->namaProfil(sessionType()) ?> 
                                <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="text-overflow m-0"><?= $user->levelName(sessionType()) ?></h6>
                        </div>
                        <!-- item-->
                        <a href="App?p=Profil&ID=<?= sessionType() ?>&Secure=<?= $secure ?>" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-location"></i> <span>Profil</span>
                        </a>
                        <!-- item-->
                        <a href="Model/Auth/logout.php" class="dropdown-item notify-item">
                            <i class=" mdi mdi-logout"></i> <span>Keluar</span>
                        </a>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end menu-extras -->

        <div class="clearfix"></div>

    </div> <!-- end container -->
</div>