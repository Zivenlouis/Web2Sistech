<?php
    session_start();
//     if(empty($_SESSION['loggedInAdmin'])) {
//         header('location: login.php');
//     }
// ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div
        class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
    >
        <a
        class="sidebar-brand brand-logo"
        href="index.php"
        style="color: white"
        >SISTECH</a>
        <a class="sidebar-brand brand-logo-mini" href="index.php" style="color:white">Sis</a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Account</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="userAccount.php">
                <span class="menu-icon">
                <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title">User Account</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="adminAccount.php">
                <span class="menu-icon">
                <i class="mdi mdi-account-key"></i>
                </span>
                <span class="menu-title">Admin Account</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Pages</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
                <span class="menu-icon">
                <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="events.php">
                <span class="menu-icon">
                <i class="mdi mdi-cards"></i>
                </span>
                <span class="menu-title">Events</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="aboutUs.php">
                <span class="menu-icon">
                <i class="mdi mdi-web"></i>
                </span>
                <span class="menu-title">About Us</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="profile.php">
                <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Report</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="registration.php">
                <span class="menu-icon">
                <i class="mdi mdi-diamond"></i>
                </span>
                <span class="menu-title">Registration</span>
            </a>
        </li>    
    </ul>   
</nav>
<!-- <div class="container-fluid page-body-wrapper"> -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">           
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="../User/Image/favicon.png" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['usernameAdmin']?></p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="validateLogin.php?logout=1">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                        </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>
<!-- </div>  -->
