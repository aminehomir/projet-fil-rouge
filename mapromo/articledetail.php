
    
    <?php include 'include/sess.php'; ?>
    <!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>MAPROMO</title>
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
							   	
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
            
            <div id="content" class="site-content container">
                <div class="tie-row main-content-row"style="flex-wrap: wrap; display: flex;">
                    <div class="main-content tie-col-md-8 tie-col-xs-12" style="width: 740px;"role="main"> 
                        <?php 
                                                    
                                                    $idd=$_GET['id'];
                                                    $req = $bd->query("SELECT * FROM article WHERE idArticle=' $idd'");
                                                    while($data5 = $req->fetch()):
                                            ?>
                                  
                                                            <h3 style="font-size: 35px;"><?= $data5['titre'] ?></h3>
                                                            <h6 style="font-size: 15px;"class="icon-time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $data5['date'] ?>2020</h6>
                                                            <p style="font-size: 17px;"><?= $data5['description'] ?></p>
                                                            <img src="<?=  $data5['image'] ?>" alt="" class="img-responsive" style="width:width: 10%;;"/>
                                                    
                                                       <?php endwhile; ?>

                                <div class="product-categories-grid" style="margin-top: 50px;">
                                    <div class="product-categories-grid-wrap ">
                                                        
                                        <div class="product-category-wall wall-row" >
                                                                
                                                                <?php 
                                                                        
                                                                        $idd=$_GET['id'];
                                                                        $req = $bd->query("SELECT * FROM image_details WHERE id_article=' $idd'");
                                                                        while($data4 = $req->fetch()):
                                                                ?>
                                                                
                                                            
                                                    <div>

                                                        
                                                                <div>        
                                                                    <?php if(!empty($_SESSION)): ?>
                                                                    <a href="user/deletedetails.php?id=<?= $data4['id'] ?>" class="btn btn-danger">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>     <?php endif; ?> 
                                                                    <img src="<?=  $data4['image'] ?>" alt="" class="img-responsive" style="width:width: 10%;;"/>
                                                                </div>
                                                                

                                                    </div> 		
                                                            <?php endwhile; ?>

                                        </div>  
                                            
                                                            
                                    </div>

                                </div>

                    </div>
                    <div class="sidebar tie-col-md-4 tie-col-xs-12 normal-side is-sticky is-fixed" id="stickysidebar"aria-label="Sidebar Principale" style="margin-bottom:30px;height: 400px; box-shadow: 0px 0px 10px #aaaaaa; position: sticky; transform: translateY(20px); left: 955.612px; top: 169px; overflow: visible;box-sizing: border-box;min-height: 1px;width: 395px;padding: 50px;">
                   
                        <div id="social-5" class="container-wrapper widget social-icons-widget">
                            <div class="widget-title the-global-title has-block-head-4">
                                <div class="the-subtitle" style="font-size: 26px;">Suivez MAPROMO !</div>
                            </div><ul class="solid-social-icons is-centered" style="font-size: 15px;">
                                <li class="social-icons-item">
                                    <a href="#" title="Facebook" target="_blank">
                                    <span class="fa fa-facebook"></span>
                                    <span class="screen-reader-text">Facebook</span></a>
                                </li>
                                <li class="social-icons-item">
                                    <a href="#" title="Twitter" target="_blank">
                                    <span class="fa fa-twitter"></span>
                                    <span class="screen-reader-text">Twitter</span></a>
                                </li>
                                <li class="social-icons-item">
                                    <a href="#" title="Pinterest" target="_blank">
                                    <span class="fa fa-pinterest"></span>
                                    <span class="screen-reader-text">Pinterest</span></a>
                                </li>
                                <li class="social-icons-item">
                                    <a href="#" title="Google+" target="_blank">
                                    <span  class="fa fa-google-plus"></span>
                                    <span class="screen-reader-text">Google+</span></a>
                                </li>
                                
                            </ul> 
                            <div class="clearfix"></div><div class="clearfix"></div>
                        </div>
                        <div id="search-3" class="widget widget_search"><div class="widget-top"><h4>Rechercher</h4><div class="stripe-line"></div></div>
                            <div class="widget-container">
                                <form role="search" method="get" class="search-form" action="https://promotionaumaroc.com/">
                                
                                    
                                        <div class="active-pink-4 mb-4">
                                            <input class="form-control" type="text" placeholder="Search" >
                                            
                                        
                                        </div>
                                
                                    <input type="submit" class="search-submit" value="Rechercher">
                                </form>
                            </div>
                        </div>
                        </div>
                </div>
            </div>    
            
          
	
  
             

                        

                        


                        

                        

                        

                    
            
                        
                               
             
                                  
    
                       

    <?php include 'include/footer.php'; ?>
