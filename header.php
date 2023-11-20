<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/ev-dashboard/assets/fonts/fonts.css">
    <link rel="stylesheet" href="http://localhost/ev-dashboard/assets/css/style.css">
</head>

<body>
    <div class="wrapper-container desk-v-width">
        <div class="d-flex">
            <aside class="sidebar-width menu-wrapper h-100">
                <div class="logo d-flex">
                    <a href="index.html" class="nav_logo">
                        <img src="./assets/images/Group-1.png" alt="">
                    </a>
                </div>
                <nav class="nav">
                    <?php require('sidebar.php') ?>
                </nav>
            </aside>
            <style>
                .notification_img,.icofont-navigation-menu,.header_img{
                    cursor: pointer;
                }
                .notification_img.arrowActive::after {
                    content: "\ea6a";
                    position: absolute;
                    bottom: -12px;
                    margin-left: -32px;
                    font-family: "IcoFont" !important;
                    font-size: 40px;
                    line-height: 33px;
                    color: var(--darklight-300);
                }
            </style>
            <div class="full-width-container content-wrapper position-relative">
                <div class="d-block">
                    <header class="d-flex justify-content-between align-items-center w-100 px-3">
                        <div class="header_toggle">
                            <div class="d-flex align-items-center">
                                <i class="icofont-navigation-menu fs-25 text-blue-700" id="header-toggle"></i>
                                <?php echo $HEADER_PATH ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="notification_img me-4">
                                <i class="icon-enin icon-updates fs-25 text-blue-700"></i>
                            </div>
                            <div class="header_img">
                                <i class="icofont-user-alt-7 fs-25 text-blue-700"></i>
                            </div>
                        </div>
                    </header>
                    <div class="main-content-container">