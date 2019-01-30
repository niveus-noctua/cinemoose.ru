<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- stylesheet -->
    <!-- meta tags -->
	<?=$this->getMeta() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Required-js -->
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

            jQuery('#responsive').change(function(){
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- scriptfor smooth drop down-nav -->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
	<!-- //script for smooth drop down-nav -->
</head>
<body>
<!-- header -->
<header>
	<div class="w3layouts-top-strip">
		<div class="container">
			<div class="logo">
				<h1><a href="<?=PATH?>">cinemoose</a></h1>
				<p>ваш сайт о кино</p>
			</div>
			<div class="w3ls-social-icons">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
	<!-- navigation -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


				<ul class="nav navbar-nav">
                    <?php
                    $ids = require_once CONFIG . "/menu_ids.php";
                    $ids[$category] = 'class="active"';
                    ?>
					<li><a <?php echo $ids['main']?> href=<?=PATH; ?>>Главная</a></li>
                    <li><a <?php echo ids['news']?> href="/index.html">Новости</a></li>
					<li><a <?php echo $ids['movies']?> href="/about.html">Кино</a></li>
					<li><a <?php echo ids['shows']?> href="/lifestyle.html">Сериалы</a></li>

					<li><a <?php echo ids['review']?> href="/fashion.html">Рецензии</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Афиша <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="icons.html">Icons Page</a></li>
							<li><a href="typo.html">Typography</a></li>

						</ul>
					</li>
					<!--<li><a href="photography.html">Photography</a></li>
					<li><a href="features.html">Features</a></li>-->
					<li><a <?php echo 'about'?> href="contact.html">О нас</a></li>
                    <li class="dropdown">
                        <?php if(!empty($_SESSION['user'])) { ?>
                        <a class="test dropdown-toggle" data-toggle="dropdown" role="button">
                            <?php
                            $nickname = htmlspecialchars($_SESSION['user']['login']);
                            echo (mb_strimwidth($nickname, 0, 10) . '...');
                            ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="user/profile">Профиль</a>
                            </li>
                            <li>
                                <a href="user/logout">Выход</a>
                            </li>
                        </ul>
                    <?php } else { ?>
                        <a class="test dropdown-toggle" data-toggle="dropdown" role="button">Войти<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="user/signin">Войти</a>
                                <a href="user/signup">Регистрация</a>
                            </li>
                        </ul>
                    </li>
                    <?php }; ?>
				</ul>
			</div><!-- /.navbar-collapse -->
            <div class="clearfix"> </div>
		</div><!-- /.container-fluid -->
	</nav>

	<!-- //navigation -->
</header>
<!-- //header -->
<!-- top-header and slider -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif; ?>
				<?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
						<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
	<?=$content; ?>
</div>
<!-- footer -->
<div class="footer-agile-info">
	<div class="container">
		<div class="col-md-4 w3layouts-footer">
			<h3>Contact Information</h3>
			<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
			<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
			<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
			<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
		</div>
		<div class="col-md-4 wthree-footer">
			<h2>Fashion Blog</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute .</p>
		</div>
		<div class="col-md-4 w3-agile">
			<h3>Newsletter</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Email" required="">
				<input type="submit" value="Send">
			</form>
		</div>
	</div>
</div>
<!-- footer -->
<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="w3agile-list">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="lifestyle.html">Life Style</a></li>
				<li><a href="photography.html">Photography</a></li>
				<li><a href="fashion.html">Fashion</a></li>
				<li><a href="icons.html">Codes</a></li>
				<li><a href="features.html">Features</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<!--<div class="agileinfo">
			<p>© 2017 Fashion Blog . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>-->
	</div>
</div>
<!-- //copyright -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/bootstrap.js"></script>
</body>
</html>