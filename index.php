<?php require('nav_bar.php')?>

<!--========================== left-sidebar ================================-->
            <?php //require('left_nav.php')?>
				<!--========================== main-content ================================-->
                
                <?php 
 include('include/db_config.php');

	   $recordset = mysqli_query($con,"select * from love_images order by image_date desc");
				
                 while($record = mysqli_fetch_array($recordset))
			   {

		 if(!empty($record["image_name"]))
	       {
	         $url= "images/".$record["image_category"] ."/".$record["image_name"];
	       }
	
	echo' 
	
	<div class="col-md-4 col-sm-8 col-xs-12" id="image-grid">
					<div class="main-content">
						<article>
							<div class="post-img">';?>
								<a href="<?php echo $url; ?>" target="_blank"><img class="img-responsive"   src="<?php echo $url; ?>"  alt="Post"/></a>
							</div>
						<center> <a href="<?php echo $url;?>"  target="_blank" class="btn btn-default btn-sm btn-category">View <i class="fa fa-eye"></i></a>
                        <a href="<?php echo $url;?>"  target="_blank" class="btn btn-default btn-sm btn-category" download>Download <i class="fa fa-download"></i></a>
                        <a href="whatsapp://send?text=Hey just click here to get Special Photo Send By Me : https://dpking.programsyntax.com/images/Valentine_Photos/p2.jpg" data-action="share/whatsapp/share"target="_blank" class="btn btn-default btn-sm btn-category">Whatsapp <i class="fa fa-whatsapp"></i></a>
                       </center>
						
						</article>
						
						
						<?php  //require('related-post.php');?>
						
					</div><!-- main-content -->
					
				</div>		
                
               
                	
                
                
                	<?php } // require('right_nav.php');?>
			
<?php require('footer.php');?>