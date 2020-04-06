<?php require('nav_bar.php')?>
<style>
#image-grid{
height:400px;
width:430px;
}</style>
<!--========================== left-sidebar ================================-->
            <?php //require('left_nav.php')?>
				<!--========================== main-content ================================-->
                
                <?php 
 include('include/db_config.php');
$que="select * from love_images where image_category='Birthday_Photos'"; 
$run=mysqli_query($con,$que);
   if(mysqli_num_rows($run) >= 1)
     {
	   $recordset = mysqli_query($con,"select * from love_images where image_category='Birthday_Photos'");
				
                 while($record = mysqli_fetch_array($recordset))
			   {

		 if(!empty($record["image_name"]))
	       {
	         $url= "images/Birthday_Photos/".$record["image_name"];
	       }
	
	echo' 
	
	<div class="col-md-4 col-sm-8 col-xs-12" id="image-grid">
					<div class="main-content">
						<article>
							<div class="post-img">';?>
								<a href="<?php echo $url;?>" target="_blank"><img class="img-responsive"   src="<?php echo $url; ?>"  alt="Post"/></a>
							</div>
						<a href="<?php echo $url;?>"  target="_blank" class="btn btn-default btn-sm btn-category" download>Download <i class="fa fa-download"></i></a>
						
						</article>
						
						
						<?php  //require('related-post.php');?>
						
					</div><!-- main-content -->
					
				</div>		
                
               
                	
                
                
                	<?php } 
					}
					else{
					echo'<img src="images/exam.jpg" class="img-responsive">
					
					<h2>Sorry Pictures are Comming soon....</h2>
					
					';
					}
	// require('right_nav.php');?>
			
<?php require('footer.php');?>