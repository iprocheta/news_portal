<?php include 'inc\header.php';?>
<?php include 'inc\slider.php';?>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		<!--Pagination-->
			<?php 
				$per_page=3; //proti page 3 ta news rakhte cassi.
				if (isset($_GET["page"])) {
					$page=$_GET["page"];
				}else{
					$page=1;
				}
				$start_page=($page-1)*$per_page;
			?>
		<!--Pagination-->

		<?php
			$query=("SELECT * ,tbl_admins.admin_name
					 FROM tbl_post 
					 inner join tbl_admins 
					 on tbl_admins.admin_id=tbl_post.admin_id 
					 order by id desc
					 limit $start_page,$per_page
					 ");
			$post=$db->select($query);
			if ($post) {
				while ($result=$post->fetch_assoc()){
				
		?>
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id'] ?>"><?php echo $result['title'] ?></a></h2>
				<h4><?php echo $fm->format_date($result['date'] )?>, By <a href="#"><?php echo $result['admin_name'] ?></a></h4>
				 <a href="post.php?id=<?php echo $result['id'] ?>"><img src="admin/<?php echo$result['image']?>" alt="post image"/></a>
				<p>
					<?php echo $fm->textShortent($result['body'] )?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result['id'] ?>">Read More</a>
				</div>
				<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://localhost/news_portal/post.php?id=<?php echo $result['id'] ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>

			<?php
				}
			?>

			<!--Pagination-->
			<div style=" margin-left: 180px;">
			<?php
				$query="SELECT * FROM tbl_post";
				$result=$db->select($query);
				$total_rows=mysqli_num_rows($result); //total no of rows of tbl_post
				$total_page=ceil($total_rows/$per_page);
				
				echo "<ul class='pagination'>";
				echo " <li><a href='index.php?page=1'>&laquo;</a></li>";

				for ($i=1; $i <$total_page ; $i++) { 
					if ($page==$i) {
						echo "<li><a class='active' href='index.php?page=$i'>$i</a></li>";
						//index page a pagination korte cassi 
					}else{
						
						echo "<li><a href='index.php?page=$i'>$i</a></li>";
					}
					
				}

				echo " <li><a href='index.php?page=$total_page'>&raquo;</a></li>";
				echo "</ul>";
			?>
			<!--Pagination-->

			<?php
				}else{
					header("location:404.php");
				}
			?>
			</div>
		</div>

<?php include 'inc\sidebar.php';?>
<?php include 'inc\footer.php';?>
