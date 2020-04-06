<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:signin.php?session_error');   
}		
  
?>
<?php  require('nav_bar.php');    ?>



    
      <form action="emp_img_db.php" method="post" name="set_emp_img"  enctype="multipart/form-data" >
      <div class="container">
 <div class="row">
          <div class="col-lg-4">
                 <div class="form-group">
                     <label for="#">Image-category :</label>
                 <select  class="form-control" name="img-cat" >
                 <option selected>Love_Photos</option>
                 <option >Christmas_Photos</option>
                 <option >Anniversery_Photos</option>
                 <option >New_year_Photos</option>
                 
                 <option >Sad_Photos</option>
                 <option >Attitude_Photos</option>
                 <option >Friendship_Photos</option>
                 <option >Valentine_Photos</option>
                 
                 <option >Eid_Photos</option>
                 <option >Diwali_Photos</option>
                 <option >Holi_Photos</option>
                 <option >Birthday_Photos</option>
                 
                 
                 
                 </select>
                      </div>
		      </div>
              <div class="col-lg-4">
                 <div class="form-group">
                     <label for="#">Image-author :</label>
                 <input type="text" class="form-control"  name="img-author" >
                      </div>
		      </div>
              <div class="col-lg-4">
                 <div class="form-group">
                     <label for="#">Image-date :</label>
                 <input type="text" class="form-control" value="<?php echo date("F d Y");?>" name="img-date" >
                      </div>
		      </div>
              
              </div>
               <div class="row">
         <div class="col-lg-4">
                
      <div class="form-group">
                 <label><i class="fa fa-paperclip" style="font-size:22px"></i> &nbsp;Attachments   <span style="color:#FF0000; padding-left:10px;">Maximum size: 20MB </span>:</label>
                        
                      <input type="file" name="file" id="file_upload" />
                         </div>
                   </div>
                    
                    
                     <div class="col-lg-4">
                                     
      <div class="form-group">

                       <input type="submit" name="submit"  value="Click Here To Upload">
                       </div>
                </div>
                           <div class="col-lg-4">
                                     
      <div class="form-group">
                
                
                <a class="#" data-toggle="modal" data-target="#exampleModal" style="color:white;">
            <button class="btn btn-warning">Logout</button></a>
            </div>
            </div>
            
  </div><!---container-fluid-->     
</div><!---sidenav-->


    </form>

   <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
   
      
 <!-- Logout Modal-->
<?php require('footer.php');?>