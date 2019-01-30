<div class="w3-slider">
        <ul id="demo1">
            <?php if ($hat):?>
            <? foreach ($hat as $item): ?>
                <li>
                    <img src="images/hat_images/<?=$item->img?>" />
                    <div class="slide-desc">
                        <h2>Сейчас в кинотетрах:</h2>
                        <h3><?=$item->title?></h3>
                        <p><?=$item->description?></p>
                    </div>
                </li>
            <? endforeach; ?>
            <?php endif;?>
        </ul>

</div>
<!-- //main-slider -->
<!-- //top-header and slider -->
<div class="container">
	<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
		<div class="col-md-9 btm-wthree-left">

            <?php foreach ($mp_articles as $article):?>
			<div class="wthree-top">

				<div class="w3agile-top">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="/category/article<?="?id=$article->id"?>">
                            <img src="images/article_images/<?=$article->preview_image?>" class="img-responsive" alt="" />
                        </a>

					</div>
					<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$article->date?></a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><?=$article->likes?> LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i><?=$article->comments?> COMMENTS</a></li>

						</ul>
					</div>
				</div>

				<div class="w3agile-bottom">
					<div class="col-md-3 w3agile-left">
						<h5><?=$article->title; ?></h5>
					</div>
					<div class="col-md-9 w3agile-right">
						<h3><a href="/category/article<?="?id=$article->id"?>"><?=$article->title; ?></a></h3>
						<p><?=$article->preview ?></p>
						<a class="agileits w3layouts" href="/category/article<?="?id=$article->id"?>">Читать<span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
            <?php endforeach;?>
			<!-- wthree-top-1 -->
            <!--
			<div class="wthree-top-1">
				<div class="w3agile-top">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="w3agile_special_deals_grid_left_grid">
										<a href="singlepage.html"><img src="/images/2.jpg" class="img-responsive" alt="" /></a>
									</div>
								</li>
								<li>
									<div class="w3agile_special_deals_grid_left_grid">
										<a href="singlepage.html"><img src="/images/3.jpg" class="img-responsive" alt="" /></a>
									</div>
								</li>
								<li>
									<div class="w3agile_special_deals_grid_left_grid">
										<a href="singlepage.html"><img src="/images/3.jpg" class="img-responsive" alt="" /></a>
									</div>
								</li>
							</ul>
						</div>
					</section>
					<script defer src="/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
                        $(window).load(function(){
                            $('.flexslider').flexslider({
                                animation: "slide",
                                start: function(slider){
                                    $('body').removeClass('loading');
                                }
                            });
                        });
					</script>

					<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>

						</ul>
					</div>
				</div>

				<div class="w3agile-bottom">
					<div class="col-md-3 w3agile-left">
						<h5>Sit amet consectetur</h5>
					</div>
					<div class="col-md-9 w3agile-right">
						<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="wthree-top-1">
				<div class="w3agile-top">
					<iframe src="https://player.vimeo.com/video/37111758" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>

						</ul>
					</div>
				</div>

				<div class="w3agile-bottom">
					<div class="col-md-3 w3agile-left">
						<h5>Sit amet consectetur</h5>
					</div>
					<div class="col-md-9 w3agile-right">
						<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="wthree-top-1">
				<div class="w3agile-top">
					<div class="col-md-6 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="/images/5.jpg" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 w3-rgt">
						<div class="w3-rgt-top">
							<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="/images/g6.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
						<div class="w3-rgt-top1">
							<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="/images/g8.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>

						</ul>
					</div>
				</div>

				<div class="w3agile-bottom">
					<div class="col-md-3 w3agile-left">
						<h5>Sit amet consectetur</h5>
					</div>
					<div class="col-md-9 w3agile-right">
						<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
    -->
			<!-- wthree-top-1 -->
		</div>
		<!-- //btm-wthree-left -->
		<!-- btm-wthree-right -->
		<div class="col-md-3 w3agile_blog_left">
			<div class="wthreesearch">
				<form action="#" method="post">
					<input type="search" name="Search" placeholder="Search here" required="">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>

			</div>

			<div class="agileinfo_calender">
				<h3>CONNECT SOCIALLY</h3>
				<div class="w3ls-social-icons-1">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
			<div class="w3ls_popular_posts">
				<h3>Popular Posts</h3>
				<div class="agileits_popular_posts_grid">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="singlepage.html"><img src="/images/p1.jpg" class="img-responsive" alt="" /></a>
					</div>
					<h4><a href="singlepage.html">Tellus Faucibus Eleifend Sit Amet</a></h4>
					<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
				</div>
				<div class="agileits_popular_posts_grid">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="singlepage.html"><img src="/images/p2.jpg" class="img-responsive" alt="" /></a>
					</div>
					<h4><a href="singlepage.html">Mauris Ut Odio Sed Nisi Convallis</a></h4>
					<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
				</div>
				<div class="agileits_popular_posts_grid">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="singlepage.html"><img src="/images/p3.jpg" class="img-responsive" alt="" /></a>
					</div>
					<h4><a href="singlepage.html">Curabitur A Sapien Et Tellus Faucibus</a></h4>
					<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
				</div>
			</div>

			<div class="w3l_categories">
				<h3>Categories</h3>
				<ul>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>tellus faucibus eleifend sit amet</a></li>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Mauris ut odio sed nisi convallis</a></li>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Curabitur a sapien et tellus faucibus</a></li>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>porta nunc eget, lobortis nulla</a></li>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Sed ut metus turpis cursus convallis</a></li>
					<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Maecenas cursus at ex a faucibus</a></li>
				</ul>
			</div>
			<div class="w3ls_recent_posts">
				<h3>Recent Posts</h3>
				<div class="agileits_recent_posts_grid">
					<div class="agileits_recent_posts_gridl">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="/images/r1.jpg" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="agileits_recent_posts_gridr">
						<h4><a href="singlepage.html">velit esse quam nihil</a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits_recent_posts_grid">
					<div class="agileits_recent_posts_gridl">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="/images/r2.jpg" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="agileits_recent_posts_gridr">
						<h4><a href="singlepage.html">Class aptent taciti </a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits_recent_posts_grid">
					<div class="agileits_recent_posts_gridl">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="/images/r3.jpg" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="agileits_recent_posts_gridr">
						<h4><a href="singlepage.html">Maecenas eget erat </a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3l_tags">
				<h3>Тэги</h3>
				<ul class="tag">
					<? foreach ($tags as $tag => $stub): ?>
                            <li><a href="singlepage.html"><?=$tag; ?></a></li>
                    <? endforeach;?>
				</ul>
			</div>
		</div>
		<!-- //btm-wthree-right -->
		<div class="clearfix"></div>
	</div>
</div>