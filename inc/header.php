
<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php 
$db=new Database();
$fm=new Format();

?>
<!DOCTYPE html>
<html>
<head>
	<title>KU News Portal</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen"/>
	
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<?php 
				$query="select * from title_slogan where id='1'";
				$news_title=$db->select($query);
				if($news_title){

					while ($result=$news_title->fetch_assoc()) {
						
					
				?>
				<h2><?php echo $result['title'];?></h2>
				<p><?php echo $result['slogan']?></p>
				<?php }} ?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				 <?php 
                $query="select * from tbl_social where id='1'";
                $socialmedia=$db->select($query);
                if($socialmedia){

                    while ($result=$socialmedia->fetch_assoc()) {
                        
                    
                ?> 
				<a href="<?php echo $result['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $result['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $result['ln'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $result['gp'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
				<?php } }?>
			</div>
			<div class="searchbtn clear">
			<form action="search_post.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>	
		<li><a href="contact.php">Contact</a></li>
		<li><a href="application.php">Be a Writer</a></li>
		<li><a href=" ">Gallery</a> 
        <ul>
            <li><a href="photo.php">Image Gallery </a></li>
            <li><a href="video.php ">Video</a></li>
            
            
            
        </ul>
            </li>
		
	</ul>
</div>