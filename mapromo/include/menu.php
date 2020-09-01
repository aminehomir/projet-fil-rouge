<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					
                </div>
                <?php include 'include/connexion.php'; ?>
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
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		
			
					
					
							
							
							
							
					
			
		