<?php session_start(); ?>
<header class="mod-header">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="header-content clearfix">
                    <h1 id="logo" class="rs">
                        <a href="index.html">
                            <img src="images/logo.png" alt="$SITE_NAME" />
                        </a>
                    </h1>
                    <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>';
                    }else{
                        echo '<a class="btn btn-green type-login btn-login" href="logout.php">Logout</a>';
                    }
                    ?>
                    <nav class="main-nav">
                        <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="coupon.php">Coupons</a>
                            </li>
                            <!--<li class="has-sub">
                                <a href="coupon-code.html">Coupons Code</a>
                                <ul class="sub-menu">
                                    <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                    <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="brand-list.html">Brands</a>
                                <ul class="sub-menu">
                                    <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                    <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                    <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                    <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                    <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>-->
                            <li>
                                <a href="my-coupon.html">My coupons</a>
                                <i class="icon iPickRed lbl-count"><span>12</span></i>
                            </li>
                        </ul>
                        <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (!isset($_SESSION['email'])) {
        include_once "login_signup.php";
    }
    ?>
</header>
<!--end: header.mod-header -->
<nav id="mp-menu" class="mp-menu alternate-menu">
    <div class="mp-level">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="coupon.html">Coupons</a></li>
            <li class="has-sub">
                <a href="coupon-code.html">Coupons Code</a>
                <div class="mp-level">
                    <h2>Coupons Code</h2>
                    <a class="mp-back" href="#">back</a>
                    <ul>
                        <li><a href="coupon-code.html">Coupons Code 1</a></li>
                        <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                    </ul>
                </div>
            </li>
            <li class="has-sub">
                <a href="brand-list.html">Brands</a>
                <div class="mp-level">
                    <h2>Brands</h2>
                    <a class="mp-back" href="#">back</a>
                    <ul>
                        <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                        <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                        <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                        <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                        <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="my-coupon.html">My coupons(12)</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </div>
</nav>
<!--end: .mp-menu -->