<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>The DMCS | HTML Template</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/shop.css' type='text/css' media='all'/>
	</head>
	
	<body>
  
		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					
					
                </div>
				<?php include 'include/connexion.php'; ?>
				<?php include 'include/sess.php'; ?>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown">
								<a href="index.php" class="dropdown-hover">Home </a> 
						</li>
                     <?php 
														$req = $bd->query('select * from catalogue ');
														while($data = $req->fetch()):
														
										           ?> 
						<li class="menu-item-has-children dropdown">
                            <a href="index.php" class="dropdown-hover"><?= $data['nom'] ?> <span class="caret"></span></a>
                           
							<ul class="dropdown-menu">
                            <?php         
                                $req3 = $bd->query('select * from category where idCatalogue ='.$data['idCatalogue']);           
                                while($data3 = $req3->fetch()):?>
								<li><a value="<?= $data3['idCategory'] ?>" href="categorie.php?id=<?= $data3['idCategory'] ?>" ><?= $data3['nom'] ?></a></li>
								<?php endwhile; ?>
                            </ul>
                            <?php endwhile; ?>
						</li>
					
						
					</ul>
				</nav>
				<div class="offcanvas-widget">
					<div class="widget social-widget">
						<div class="social-widget-wrap social-widget-none">
							<a href="#" title="Facebook" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" title="Twitter" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" title="Google+" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" title="Pinterest" target="_blank">
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-type-classic header-absolute header-transparent">
				<div class="topbar">
					<div class="container topbar-wap">
						<div class="row">
							<div class="col-sm-6">
								<div class="left-topbar">
									<div class="topbar-social">
										<a href="#" title="Facebook" target="_blank">
											<i class="fa fa-facebook facebook-bg-hover"></i>
										</a>
										<a href="#" title="Twitter" target="_blank">
											<i class="fa fa-twitter twitter-bg-hover"></i>
										</a>
										<a href="#" title="Google+" target="_blank">
											<i class="fa fa-google-plus google-plus-bg-hover"></i>
										</a>
										<a href="#" title="Pinterest" target="_blank">
											<i class="fa fa-pinterest pinterest-bg-hover"></i>
										</a>
										<a href="#" title="RSS" target="_blank">
											<i class="fa fa-rss rss-bg-hover"></i>
										</a>
										<a href="#" title="Instagram" target="_blank">
											<i class="fa fa-instagram instagram-bg-hover"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
							<div class="right-topbar">
									
									<div class="user-login">
									<?php if(!empty($_SESSION)): ?>
								<a href="logout.php" class="single-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
								<?php endif; ?>	
									</div>
								
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-container">
					<div class="navbar navbar-default  navbar-scroll-fixed">
						<div class="navbar-default-wrap">
							<div class="container">
								<div class="row">
									<div class="col-md-12 navbar-default-col">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>
												
												<a class="navbar-brand" href="index.php">
													<img class="logo" style="width: 192px; margin-top: 17px;"alt="mapromo" src="images/logo_mapromo.png" >
													<img class="logo-fixed" alt="mapromo" src="images/logo_mapromo.png">
													<img class="logo-mobile" alt="mapromo" src="images/logo_mapromo.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="menu-item-has-children dropdown">
														<a href="index.php" class="dropdown-hover">Home <span class="caret"></span></a> 
													</li>
													<?php 
														$req = $bd->query('select * from catalogue ');
														while($data = $req->fetch()):
														
										           ?>
													<li class="menu-item-has-children dropdown">
														<a href="index.php" class="dropdown-hover">
															<span class="underline"><?= $data['nom'] ?></span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<?php         
																$req3 = $bd->query('select * from category where idCatalogue ='.$data['idCatalogue']);           
																while($data3 = $req3->fetch()):?>
																<li><a value="<?= $data3['idCategory'] ?>" href="categorie.php?id=<?= $data3['idCategory'] ?>" ><?= $data3['nom'] ?></a></li>
																<?php endwhile; ?>
														</ul>
															<?php endwhile; ?>
													</li>
													<li class="navbar-search">
														<a class="navbar-search-button" href="#">
															<i class="fa fa-search"></i>
														</a>
													</li>
													
													
													
													
													
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									<form class="searchform">
										<input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
										<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
									</form>
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="content-container no-padding">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12 main-wrap">
							<div class="main-content">
								<div id="home-slider" data-autorun="yes" data-duration="6000" class="carousel slide fade dhslider dhslider-custom " data-height="650">
									<div class="dhslider-loader">
										<div class="fade-loading">
											<i></i><i></i><i></i><i></i>
										</div>
									</div>
									<div class="carousel-inner dhslider-wrap">
										<div class="item slider-item active">
											<div class="slide-bg slide-bg-1"></div>  
											<div class="slider-caption caption-align-left">
												<div class="slider-caption-wrap">
													<span class="slider-top-caption-text">Voyage de vacances de novembre</span>
													<h2 class="slider-heading-text">ORGANISÉ A DUBAI à 10900 DH seulement</h2>
													
													<div class="slider-buttons">
														
														<a href="articledetail.php?id=43" class="btn btn-lg btn-white-outline">Découvrir</a>
													</div>
												</div>
											</div>
										</div>
										<div class="item slider-item">
											<div class="slide-bg slide-bg-2"></div>  
											<div class="slider-caption caption-align-right">
												<div class="slider-caption-wrap">
													<span class="slider-top-caption-text">premier aperçu</span>
													<h2 class="slider-heading-text"> NOUVEAU VOLKSWAGEN GOLF 8 2020 </h2>
													
													<div class="slider-buttons">
														<a href="articledetail.php?id=21" class="btn btn-lg btn-white">Découvrir</a>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									<ol class="carousel-indicators parallax-content">
										<li data-target="#home-slider" data-slide-to="0" class="active"></li>
										<li data-target="#home-slider" data-slide-to="1"></li>
									</ol>
								</div>
								
                                
           
								<div class="product-categories-grid">
									<div class="product-categories-grid-wrap clearfix">
										
										<div class="product-category-wall wall-row "style="display: flex; flex-wrap: wrap;">
											
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=33">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-1"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>Collection Flormar</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=25">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-2"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>
																Samsung galaxy s20 ultra 5g
																</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=39">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-3"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>
																Marwa Spring Summer 2020 Collection
																</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
										</div>
									
										<div class="product-category-wall wall-row"style="display: flex; flex-wrap: wrap;">
											
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=11">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-4"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>Catalogue Carrefour Août Septembre 2020</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=15">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-5"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>
																Citroën Nouvelle Citroen Elysee
																</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
											<div class="wall-col col-sm-4 title-out height-auto product-category-wall">
												<a href="articledetail.php?id=44">
													<div class="product-category-grid-item">
														<div class="product-category-grid-item-wrap">
															<div class="product-category-grid-featured-wrap">
																<div class="product-category-grid-featured bg-6"></div>
															</div>
															<div class="product-category-grid-featured-summary">
																<h3>
																Voyage organisé paris depart maroc 2020
																</h3>
															</div>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-widget">
				<div class="container">
					<div class="footer-widget-wrap">
						<div class="row">
						<aside class="footer-text-wrap text-center">
							<div class="block-title"><span style="font-size: 30px;">À PROPOS</span>
							</div>
							<div style="font-size: 15px;padding: 30px;">
							Mapromo met à votre disposition les dépliants d'un grand nombres de Magasins nationaux, et ce dans le but de vous mettre à jour concernant les nouveautés des catalogues, soldes et promotions Maroc. 
							</div>
							<div class="footer-email-wrap" style="font-size: 18px;">Contactez-nous: 
								<a href="mailto:contact.catalogueaumaroc@goodgamesquad.com">contact.mapromo@gmail.com</a>
							
							</div>
						</aside>	
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="footer">
				<div class="footer-info">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="footer-info-logo">
									<a href="#"><img alt="The DMCS" src="img/logo_mapromo.png" style="width: 200px;"></a>
								</div>
								<div class="copyright text-center">Copyright right © 2020 MAPROMO. All Rights Reserved.</div>
								<div class="footer-social">
									<a href="#" title="Facebook" target="_blank">
										<i class="fa fa-facebook facebook-bg-hover"></i>
									</a>
									<a href="#" title="Twitter" target="_blank">
										<i class="fa fa-twitter twitter-bg-hover"></i>
									</a>
									<a href="#" title="Google+" target="_blank">
										<i class="fa fa-google-plus google-plus-bg-hover"></i>
									</a>
									<a href="#" title="Pinterest" target="_blank">
										<i class="fa fa-pinterest pinterest-bg-hover"></i>
									</a>
									<a href="#" title="RSS" target="_blank">
										<i class="fa fa-rss rss-bg-hover"></i>
									</a>
									<a href="#" title="Instagram" target="_blank">
										<i class="fa fa-instagram instagram-bg-hover"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
		

		<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.min.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/jquery.parallax.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
		<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
</body>
</html>