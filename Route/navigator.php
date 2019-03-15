<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <?php if(@$_SESSION['Administrator']){ ?>
                    <li class="has-submenu">
                        <a href="./"><i class="icon-home"></i>Beranda</a>
                    </li>
                    <li class="has-submenu">
                        <a href="ManageAlumni"><i class="mdi mdi-account-multiple"></i>Kelola Alumni</a>
                    </li>
                    <li class="has-submenu">
                        <a href="ImportData"><i class="mdi mdi-file-import"></i>Import Data</a>
                    </li>
                    <li class="has-submenu">
                        <a href="BackupRestoreDatabase"><i class="mdi mdi-database"></i>Backup & Restore Database</a>
                    </li>
                <?php }else{ ?>
                    <li class="has-submenu">
                        <a href="./"><i class="icon-home"></i>Beranda</a>
                    </li>
                    <li class="has-submenu">
                        <a href="Search"><i class="mdi mdi-account-search"></i>Pencarian</a>
                    </li>
                    <li class="has-submenu">
                        <a href="Webpage"><i class="mdi mdi-web"></i>Webpage Sespimma</a>
                    </li>
                    <li class="has-submenu">
                        <a href="WebpagePolri"><i class="mdi mdi-web"></i>Webpage POLRI</a>
                    </li>

                <?php } ?>
                <!--<li class="has-submenu">
                    <a href="#"><i class="mdi mdi-account-card-details"></i>Kelola Biodata</a>
                </li>-->
                

                <!--<li class="has-submenu">
                    <a href="#"><i class="icon-layers"></i>Apps</a>
                    <ul class="submenu">
                        <li><a href="apps-calendar.html">Calendar</a></li>
                        <li><a href="apps-tickets.html">Tickets</a></li>
                    </ul>
                </li>-->

            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div>
<!--NAVIGASI ATAS(JIKA ADA)-->