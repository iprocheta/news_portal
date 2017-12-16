	<?php include 'inc\header.php';?>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>About us</h2>
				<!-- <div class="event" style="color:red;background:#95cbd4; border:solid 2px black"><center><h1>Events</h1></center> -->
		  
		<?php
		  $query="select * from video order by v_id desc";
          $result=$db->select($query);
          $num=0;
          while($all_video=mysqli_fetch_array($result)){
          $num++;
          if($num==5) break;?>   
		<?php if($all_video['url']==null){?> 
             <video width="300" height="200" controls>

               <source src="admin/vupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
          </video>
          <?php } ?>
           <?php if($all_video['video_name']==null){?> 
          <?php $t= str_replace("watch?v=","v/",$all_video['url']); ?>
       <object width="300" height="200" data="<?php echo $t; ?>" type="application/x-shockwave-flash"><param name="src" value="<?php echo $t; ?>" /></object> 
    
         <?php }} ?>
		  

		</div>
                
                  

	<!-- </div> -->

		</div>
		<?php include 'inc\sidebar.php';?>
<?php include 'inc\footer.php';?>

