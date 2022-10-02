<!DOCTYPE html>
<html>

<head>
    <title>Vendor Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/font.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style-dark.css">
     <link rel="stylesheet" href="css/style-gray.css">
  

    <link rel="stylesheet" href="css/res-menu.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
	
	
	<link rel="stylesheet" href="css/vendor.css"/>
	
	<style>
	.checkbox input{
  margin: 0 5px 0;
}
	</style>
	
 
    
</head>
<body>
<div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-detail-4 clearfix">
					<div class="grid_12">
                        <div class="brand-top-info clearfix">
                            <div class="brand-logo">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/08-02.jpg" alt="$BRAND_NAME"/></a>
                                    </div>
                                </div>
                                <i class="stick-lbl trust-brand-b"></i>
                            </div>
                            <div class="brand-desc">
                                <div class="title-desc">About Lindt</div>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis metus non nunc iaculis dapibus. Nullam tempus accumsan metus vitae facilisis. Nullam non faucibus nisi, nec auctor neque. Ut consequat consequat purus. Sed vestivbulum viverra nulla vel fermentum. Fusce luctus ultrices lorem, in placerat nibh adipiscing ut. </p>
                            </div>
                            <div class="right-counter">
                                <div class="wrap-content">
                                    <div class="rate-brand clearfix">
                                        <span class="star-rate"><span style="width: 0"></span></span>
                                        <span class="wrap-rate-score">
                                            <i class="star-rate s-rated"></i> 4/5
                                        </span>
                                    </div>
                                    <div class="count-info clearfix">
                                        <span class="lbl">Follower</span>
                                        <span class="val">258.332</span>
                                    </div>
                                    <div class="count-info clearfix">
                                        <span class="lbl">Coupons</span>
                                        <span class="val">214</span>
                                    </div>
                                    <div class="count-info clearfix">
                                        <span class="lbl">Coupons code</span>
                                        <span class="val">31</span>
                                    </div>
                                    <a class="btn btn-blue btn-follow-brand" href="#">Follow brand</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>       

	<form class="signup-form" action="/register" method="post" style="box-shadow: 5px 5px 115px 5px #888888;">

      <!-- form header -->
      <div class="form-header">
        <h1>Update Details</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">Company Name</label>
            <input type="text" id="firstname" class="form-input" placeholder="Enter your company name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Phone</label>
            <input type="text" id="phone" class="form-input" placeholder="Enter your phone no." />
          </div>
        </div>

        <!-- Email and password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Email</label>
            <input type="email" id="email" class="form-input" placeholder="Enter your email" required="required">
          </div>
          <div class="form-group right">
            <label for="confirm-password" class="label-title">Password</label>
            <input type="password" class="form-input" id="password" placeholder="Enter your password" required="required">
          </div>
        </div>
		
		 <div class="form-group">
            <label class="label-title">Discount Days</label>
            <div class="checkbox">
              <label><input type="checkbox" value="Web">Monday</label>
              <label><input type="checkbox" value="iOS">Tuesday</label>
              <label><input type="checkbox" value="Andriod">Wednesday</label>
              <label><input type="checkbox" value="Game">Thursday</label>
			  <label><input type="checkbox" value="Game">Friday</label>
			  <label><input type="checkbox" value="Game">Saturday</label>
			  <label><input type="checkbox" value="Game">Sunday</label>
            </div>
          </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
             <div class="form-group left">
            <label for="confirm-password" class="label-title">Discount in percentage </label>
            <input type="text" class="form-input" id="discount" placeholder="Enter discount percentage" required="required">
          </div>
		     <!--<div class="form-group right">
            <label for="confirm-password" class="label-title">Password</label>
            <input type="password" class="form-input" id="password" placeholder="Enter your password" required="required">
          </div>-->
    
        </div>


      <!-- form-footer -->
      <div class="form-footer">
       
        <button type="submit" class="btn">Update</button>
      </div>

    </form>

    <?php require_once("component/footer.php"); ?>
                           
              


<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.js"></script>
<script type="text/javascript" src="js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>


</body>

</html>