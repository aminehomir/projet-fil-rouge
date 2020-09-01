
    
    <?php include 'include/sess.php'; ?>
    <?php include 'include/header.php'; ?>
    <?php include 'include/menu.php'; ?>
    <?php 
                                                    
                                                    $idd=$_GET['id'];
                                                    $req = $bd->query("SELECT * FROM category WHERE idCategory=' $idd'");
                                                    while($data4 = $req->fetch()):
                                            ?>
       <h1 style=" font-weight: 600; padding-top: 27px; padding-bottom: 27px; text-align: center; height: 100px;font-size: 56px; color: #555959;"><?= $data4['nom'] ?></h1>
       <?php endwhile; ?>
       <?php $idd=$_GET['id'];?>
    <?php if(!empty($_SESSION)): ?>
    <a href="user/add.php?id=<?= $idd ?>" class="btn btn-dark">
                                        <i class="addbtn" >ajouter un article</i>
                                    </a><?php endif; ?>
       <div class="row">
     
            
             </div>
                 
             <div class="product-categories-grid">
									<div class="product-categories-grid-wrap clearfix" >
                                    
										<div class="product-category-wall wall-row" style="display: flex; flex-wrap: wrap;">
                                            
                                            <?php 
                                                    
                                                    $idd=$_GET['id'];
                                                    $req = $bd->query("SELECT * FROM article WHERE  idCategorie=' $idd' ORDER BY idArticle DESC ");
                                                    while($data4 = $req->fetch()):
                                            ?>
                                            <div class="wall-col col-sm-4 title-out height-auto product-category-wall">
                                            <div style="margin-top: 30px;margin-bottom: 1px;">
                                                    <?php if(!empty($_SESSION)): ?>
                                                    <a href="user/update.php?id=<?= $data4['idArticle'] ?>" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                    </a>  <?php endif; ?>
                                                    <?php if(!empty($_SESSION)): ?>
                                                    <a href="user/delete.php?id=<?= $data4['idArticle'] ?>" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                    </a>     <?php endif; ?> 
                                                </div>
												<a href="articledetail.php?id=<?= $data4['idArticle'] ?>">
                                               
                                                     
													<div class="product-category-grid-item">
                                                         
														<div class="product-category-grid-item-wrap">
                                                        
															<div class="product-category-grid-featured-wrap">
                                                            
                                                                
															<div class="product-category-grid-featured bg-4"style="background-image: url(<?=  $data4['image'] ?>);"></div>
															</div>
                                                            <div class="post-date" >

                                                                <span><?=  $data4['date'] ?></span> 
                                                                </div>
															<div class="product-category-grid-featured-summary">
                                                            
                                                                
																<h3><?= $data4['titre'] ?></h3>
                                                                
															</div>
														</div>
													</div>
												</a>
                                            </div>
                                             
                                            <?php endwhile; ?>

										
                                        </div>
									</div>
                                
            </div>                   
       
    

                                  
    
                       

    <?php include 'include/footer.php'; ?>
