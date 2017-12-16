
	
<div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="Entering gate of Khulna University " /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="Khulna University Shaeed Minar " /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="Remarkable Orientation and Receiption" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="Odommo Bangla" /></a>
        </div>
        <div style="float:right;margin-top:-250px;margin-right:20px;" >
        
            <?php
		     $query= "select * from video order by v_id desc";
          $result=$db->select($query);
         
         $all_video=mysqli_fetch_array($result);
       
                   if($all_video['url']==null){?> 
          <video width="300" height="200" controls>

               <source src="admin/vupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
          </video> <?php } ?>  
		
              <?php if($all_video['video_name']==null){?> 
        <?php $t= str_replace("watch?v=","v/",$all_video['url']); ?>
       <object width="300" height="200" data="<?php echo $t; ?>" type="application/x-shockwave-flash"><param name="src" value="<?php echo $t; ?>" /></object> 
    
         <?php } ?>
         <div class="fb-share-button" data-href="<?php echo $t; ?>" >   
       
       </div>
		  
        </div>

</div>