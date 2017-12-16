		
<div class="sidebar clear">
			<div class="samesidebar clear">
                <div class="col-md-12 col-sm-12">
				<h2>News Catagory</h2>
				<?php
					$query=("SELECT * FROM tbl_category");
					$post=$db->select($query);
					if ($post) {
						while ($result=$post->fetch_assoc()){
				
				?>
					<ul>
						<li><a href="posts.php?catid=<?php echo $result['cat_id'] ?>"><?php echo $result['cat_name'] ?></a></li>				
					</ul>
					<?php
						}
					}else{
						echo "No category Found!!";
					}
				?>

           <!--  <?php
		  $query="select * from video";
          $result=$db->select($query);
          $num=0;
          while($all_video=mysqli_fetch_array($result)){
          $num++;
          if($num==2) break;?>   
		
             <video width="300" height="200" controls>

               <source src="admin/vupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
          </video>
         <?php } ?> -->
		   
                </div>
			</div>
			
			<div class="samesidebar clear">
                <div class="col-md-12 col-sm-12">

				<h2>Latest articles</h2>
				<?php
					$query=("SELECT * FROM tbl_post order by id desc limit 5");
					$post=$db->select($query);
					if ($post) {
						while ($result=$post->fetch_assoc()){
				
				?>
					<div class="popular clear">
						<h3><a href="post.php?id=<?php echo $result['id'] ?>"><?php echo $result['title'] ?></a></h3>
						<a href="post.php?id=<?php echo $result['id'] ?>"><img src="admin/<?php echo$result['image']?>" alt="post image"/></a>
						<p><?php echo $fm->textShortent($result['body'],150) ?></p>	
					</div>
					<?php
						}
					}else{
						echo "No Latest post Found!!";
					}
				?>
                </div>
			</div>
			
		</div>