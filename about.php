	<?php include 'inc\header.php';?>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>About us</h2>
				<?php 
				$query="select * from about where id='1'";
				$content=$db->select($query);
				if($content){

					while ($result=$content->fetch_assoc()) {
						
					
				?>
	
				<p><?php echo $result['content'];?></p>
				<?php }}?>
				
	    </div>

		</div>
		<?php include 'inc\sidebar.php';?>
<?php include 'inc\footer.php';?>
