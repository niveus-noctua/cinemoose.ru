
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href=<?=PATH;?>>Главная</a></li>
			<li class="active"><?=$article->title; ?></li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="container">
	<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
		<div class="col-md-9 btm-wthree-left">
			<div class="single-left">
				<div class="single-left1">
					<img src="images/article_images/<?=$article->preview_image; ?>" alt=" " class="img-responsive" />
					<h3><?=$article->title?></h3>
					<ul>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#"><?=$article->author?></a></li>
						<li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#"><?=count($article->tags) . " Tags";?></a></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li>
					</ul>
                    <p><?=$article->content?></p>
				</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments">
					<h3>Our Recent Comments</h3>
					<div class="comments-grids">
						<div class="comments-grid">
							<div class="comments-grid-left">
								<img src="images/3.png" alt=" " class="img-responsive" />
							</div>
							<div class="comments-grid-right">
								<h4><a href="#">Michael Crisp</a></h4>
								<ul>
									<li>5 December 2016 <i>|</i></li>
									<li><a href="#">Reply</a></li>
								</ul>
								<p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
									amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="comments-grid">
							<div class="comments-grid-left">
								<img src="images/2.png" alt=" " class="img-responsive" />
							</div>
							<div class="comments-grid-right">
								<h4><a href="#">Adam Lii</a></h4>
								<ul>
									<li>8 December 2016 <i>|</i></li>
									<li><a href="#">Reply</a></li>
								</ul>
								<p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
									amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="comments-grid">
							<div class="comments-grid-left">
								<img src="images/1.png" alt=" " class="img-responsive" />
							</div>
							<div class="comments-grid-right">
								<h4><a href="#">Richard Carl</a></h4>
								<ul>
									<li>11 December 2016 <i>|</i></li>
									<li><a href="#">Reply</a></li>
								</ul>
								<p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
									amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="comments-grid">
							<div class="comments-grid-left">
								<img src="images/4.png" alt=" " class="img-responsive" />
							</div>
							<div class="comments-grid-right">
								<h4><a href="#">Thomas Paul</a></h4>
								<ul>
									<li>14 December 2016 <i>|</i></li>
									<li><a href="#">Reply</a></li>
								</ul>
								<p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
									amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="leave-coment-form">
					<h3>Leave Your Comment</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
						<div class="w3_single_submit">
							<input type="submit" value="Submit Comment" >
						</div>
					</form>
				</div>
			</div>

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
						<a href="singlepage.html"><img src="images/p1.jpg" class="img-responsive" alt="" /></a>
					</div>
					<h4><a href="singlepage.html">Tellus Faucibus Eleifend Sit Amet</a></h4>
					<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
				</div>
				<div class="agileits_popular_posts_grid">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="singlepage.html"><img src="images/p2.jpg" class="img-responsive" alt="" /></a>
					</div>
					<h4><a href="singlepage.html">Mauris Ut Odio Sed Nisi Convallis</a></h4>
					<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
				</div>
				<div class="agileits_popular_posts_grid">
					<div class="w3agile_special_deals_grid_left_grid">
						<a href="singlepage.html"><img src="images/p3.jpg" class="img-responsive" alt="" /></a>
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
							<a href="singlepage.html"><img src="images/r1.jpg" class="img-responsive" alt="" /></a>
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
							<a href="singlepage.html"><img src="images/r2.jpg" class="img-responsive" alt="" /></a>
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
							<a href="singlepage.html"><img src="images/r3.jpg" class="img-responsive" alt="" /></a>
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
				<h3>Tags</h3>
				<ul class="tag">
                    <? foreach ($article->tags as $tag): ?>
					<li><a href="singlepage.html"><?=$tag; ?></a></li>
                    <? endforeach; ?>
				</ul>
			</div>
		</div>
		<!-- //btm-wthree-right -->
		<div class="clearfix"></div>
	</div>
</div>