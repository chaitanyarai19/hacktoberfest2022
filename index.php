<?php include_once "component/topbar.php"; ?>

<div class="top-area">
    <div class="mod-head-slide">
        <div class="grid_frame">
            <div class="wrap-slide">
                <p class="ta-c"><img src="images/ajax-loader.gif" alt="loading"></p>
                <div id="sys_head_slide" class="head-slide flexslider">
                    <ul class="slides">
                        <li>
                            <img src="images/ex/01_banner.jpg" alt="" />
                        </li>
                        <li>
                            <img src="images/ex/02_banner.jpg" alt="" />
                        </li>
                        <li>
                            <img src="images/ex/03_banner.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sys_mod_filter" class="mod-filter">
    <div class="grid_frame">
        <div class="container_grid clearfix">
            <div class="grid_12">
                <div class="lbl-search">
                    <input class="txt-search" id="sys_txt_search" type="search" placeholder="Search" />
                    <input type="submit" class="btn-search" value="" />
                </div>
                <div class="select-cate">
                    <div id="sys_selected_val" class="show-val">
                        <span data-cate-id="0">All type</span>
                        <i class="pick-down"></i>
                    </div>
                    <div id="sys_list_dd_cate" class="dropdown-cate">
                        <div class="first-lbl">All Categories</div>
                        <div class="wrap-list-cate clearfix">
                            <a href="#" data-cate-id="1">Baby &amp; Toddler</a>
                            <a href="#" data-cate-id="2">Automotive </a>
                            <a href="#" data-cate-id="3">Beverages</a>
                            <a href="#" data-cate-id="4">Books &amp; Magazines</a>
                            <a href="#" data-cate-id="5">Foods </a>
                            <a href="#" data-cate-id="6">Health Care</a>
                            <a href="#" data-cate-id="7">Home Entertainment</a>
                            <a href="#" data-cate-id="8">Personal Care </a>
                            <a href="#" data-cate-id="9">Pet Care </a>
                            <a href="#" data-cate-id="10">Professional Services </a>
                            <a href="#" data-cate-id="11">Toys and Games</a>
                            <a href="#" data-cate-id="12">Coupon Codes</a>
                            
                        </div>
                    </div>
                </div>
                
                <input id="sys_apply_filter" class="btn btn-red type-1 btn-apply-filter" type="button" value="Apply Filter">
            </div>
        </div>
    </div>
</div>
<!--end: .mod-filter -->
<div class="grid_frame page-content">
    <div class="container_grid">
        <div class="mod-grp-coupon block clearfix">
            <div class="grid_12">
                <h3 class="title-block has-link">
                    New Coupons
                    <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                </h3>
            </div>
            <div class="block-content list-coupon clearfix">
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$2.00 Off</div>
                        <div class="coupon-brand">Wallmart</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                    <i class="stick-lbl hot-sale"></i>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">Save $1.50 on two</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$5.00 Off</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">2 days 14 hours left</div>
                        <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$7.00 Off</div>
                        <div class="coupon-brand">Wallmart</div>
                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                        <div class="time-left">12 days 1 hour left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                    <i class="stick-lbl hot-sale"></i>
                </div>
                <!--end: .coupon-item -->
            </div>
        </div>
        <!--end block: New Coupons-->
        <div class="mod-grp-coupon block clearfix">
            <div class="grid_12">
                <h3 class="title-block has-link">
                    Featured Coupons
                    <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                </h3>
            </div>
            <div class="block-content list-coupon clearfix">
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$12.00 Off</div>
                        <div class="coupon-brand">Wallmart</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">VIEW COUPON CODE</a>
                    </div>
                    <i class="stick-lbl hot-sale"></i>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$17.50 off</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon dismiss" href="#">17GH0097</a>
                    </div>
                    <i class="stick-lbl trust-brand-y"></i>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$3.00 Off</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">2 days 14 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                    <i class="stick-lbl trust-brand-b"></i>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$7.00 Off</div>
                        <div class="coupon-brand">Wallmart</div>
                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                        <div class="time-left">12 days 1 hour left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$2.00 Off</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$11.50 off</div>
                        <div class="coupon-brand">Lindt Chocolate</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">9 days 4 hours left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$12.00 Off</div>
                        <div class="coupon-brand">SunMart</div>
                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                        <div class="time-left">2 days 14 hours left</div>
                        <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
                <div class="coupon-item grid_3">
                    <div class="coupon-content">
                        <div class="img-thumb-center">
                            <div class="wrap-img-thumb">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                            </div>
                        </div>
                        <div class="coupon-price">$4.5 Off</div>
                        <div class="coupon-brand">Wallmart</div>
                        <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                        <div class="time-left">12 days 1 hour left</div>
                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                    </div>
                </div>
                <!--end: .coupon-item -->
            </div>
            <a class="grid_6 btn btn-orange btn-load-more" href="#">Load more coupon</a>
        </div>
        <!--end block: Featured Coupons-->
        <div class="mod-email-newsletter clearfix">
            <div class="grid_12">
                <div class="wrap-form clearfix">
                    <div class="left-lbl">
                        <div class="big-lbl">newsletter</div>
                        <div class="sml-lbl">Don't miss a chance!</div>
                    </div>
                    <div class="wrap-email">
                        <label for="sys_email_newsletter">
                            <input type="email" id="sys_email_newsletter" placeholder="Enter your email here" />
                        </label>
                    </div>
                    <button class="btn btn-orange btn-submit-email" type="submit">SUBSCRIBE NOW</button>
                </div>
            </div>
        </div>
        <!--end: .mod-email-newsletter-->
        <div class="mod-brands block clearfix">
            <div class="grid_12">
                <h3 class="title-block has-link">
                    POPULAR BRANDS (129)
                    <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                </h3>
            </div>
            <div class="block-content list-brand clearfix">
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
                <div class="brand-item grid_4">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <div class="wrap-img-logo">
                                <span class="ver_hold"></span>
                                <a href="#" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: .brand-item -->
            </div>
        </div>
        <!--end: .mod-brand -->
    </div>
</div>
<?php include_once "component/botom.php" ?>