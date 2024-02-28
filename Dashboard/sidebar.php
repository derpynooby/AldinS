<?php
include "control.php"

?>
<!-- main-sidebar -->
<div class='app-sidebar__overlay' data-bs-toggle='sidebar'></div>
<div class='sticky'>
    <aside class='app-sidebar sidebar-scroll'>
        <div class="main-sidebar-header active">
        </div>    
        <div class='main-sidemenu'>
            <div class='main-sidebar-loggedin'>
                <div class='app-sidebar__user'>
                    <div class='dropdown user-pro-body text-center'>
                        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJMTE5bZNATVrEF5_Fc-jpjxkJdGcLXeaz2X4zMPZqWO1fOt5cvHxcSe3PiZDTWK09W7w&usqp=CAU' alt='user-img' class='rounded-circle wd-150 mCS_img_loaded'>
                        <div class='user-info'>
                            <h6 class=' mb-0 text-dark'>M Kazim</h6>
                            <span class='text-muted app-sidebar__user-name text-sm'>XI RPL</span>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class='sidebar-navs'>
                <p>
                    All of my learning history as programmer
                </p>
            </div>
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" /></svg></div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item" href="../../Dashboard/index.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide is-expanded">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">PHP</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu open">
                        <li class="side-menu__label1"><a href="javascript:void(0);">PHP</a></li>
                        <?php foreach ($link as $row) :  ?>
                            <li><a class="slide-item" href="<?php echo $row ?>"><?php echo basename(dirname($row)) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" /></svg></div>
        </div>
    </aside>
</div>
<!-- main-sidebar -->

<!-- main-content -->
<div class='main-content app-content'>

    <!-- container -->
    <div class='main-container container-fluid '>

        <!-- breadcrumb -->
        <div class='breadcrumb-header d-block '>
            <div class='d-flex col-12'>
                <img class='wd-200 m-0 bd bd-3 bd-danger rounded-30' alt='logo' src='../../Dashboard/img/owner.jpg' alt=''>

                <nav aria-label='breadcrumb' class='px-4 pt-4'>
                    <h1 class='text-white'>M Kazim</h1>
                    <h4 class='text-white'>Start as a newbie try to improve and be the best at it</h4>
                </nav>
            </div>
        </div>
        <!-- /breadcrumb -->
        <div class='row row-sm'>