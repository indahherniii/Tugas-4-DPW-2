<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Registration :: w3layouts</title>
<link href="{{url('public')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="{{url('public')}}/css/hover.css" rel="stylesheet" media="all">
<link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="{{url('public')}}/css/easy-responsive-tabs.css" />
<script src="{{url('public')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!---- tabs---->

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li><a href="index.html">HOME</a></li>
				 <li><a href="woman.html">WOMAN</a></li>
				 <li><a href="man.html">MAN</a></li>			 
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index.html"><img src="{{url('public')}}/images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 <div class="currency">			 
				 <a href="#"><i class="c1"></i></a>
				 <a href="#"><i class="c2"></i></a>
				 <a href="#"><i class="c3"></i></a>
				 <a href="#"><i class="c4"></i></a>
			 </div>		 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="cart.html"><img href="cart.html" src="{{url('public')}}/images/cart.png" alt=""/>(0)</a></div>
				  <ul>
					 <li><a href="registration.html">REGISTRATION</a> <span>/<span> &nbsp;</li>
					 <li><a href="login.html"> LOGIN</a></li>
				 </ul>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="registration-form">
	 <div class="container">
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously registered with us, <a href="#">click here</a></p>
				 <form>
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" value=""></li>
					 </ul>				 
					<ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Re-enter Password:</li>
						 <li><input type="password" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" value=""></li>
					 </ul>						
					 <input type="submit" value="Register Now">
					 <p class="click">By clicking this button, you agree to my modern style <a>Pollicy Terms and Conditions</a> to Use</p> 
				 </form>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>Completely Free Accouent</h3>
			 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
			 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			 <h3 class="lorem">Lorem ipsum dolor sit amet elit.</h3>
			 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
		 </div>
		 <div class="clearfix"></div>
		 <div class="navigation">
			 <ul>
				 <li><a href="about.html">ABOUT</a></li>
				 <li><a href="woman.html">STOCKITS</a></li>
				 <li><a href="contact.html">CONTACT</a></li>
				 <li><a href="man.html">STORE</a></li>
				 <li><a href="terms.html">TERMS & CONDITION</a></li>
				 <li><a href="man.html">SHOW TO BUY</a></li>
				 <li><a href="404.html">SHIPPING</a></li>
				 <li><a href="404.html">RETURNS</a></li>
				 <li><a href="single.html">SIZE CHART</a></li>
			 </ul>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <p>Copyright &copy; 2021 Tugas DPW 2 by INDAH PUTRI HERNI </p>
		 <div class="social">
			 <a href="#"><span class="icon1"></span></a>
			 <a href="#"><span class="icon2"></span></a>
			 <a href="#"><span class="icon3"></span></a>
			 <a href="#"><span class="icon4"></span></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>
		