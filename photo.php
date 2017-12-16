	<?php include 'inc\header.php';?>

    
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

			<div class="about">
				<h2>Image Gallary</h2>
				<!-- <div class="event" style="color:red;background:#95cbd4; border:solid 2px black"><center><h1>Events</h1></center> -->
		  <!--Pagination-->
      <?php 
        $per_page=6; //proti page 3 ta news rakhte cassi.
        if (isset($_GET["page"])) {
          $page=$_GET["page"];
        }else{
          $page=1;
        }
        $start_page=($page-1)*$per_page;
      ?>
    <!--Pagination-->
		<?php

$query="SELECT * FROM photos";
$result=$db->select($query);
if($result){
while($row=$result->fetch_assoc())
{
	      echo '<div class="single"><div class="wrap">
        <a href="admin/'.$row['location'].'" rel="lightbox[plants]" title="admin/'.$row['caption'].'"><img src="admin/'.$row['location'].'" alt="Plants" /></a>
      </div></div>';
      
 }}			
?>		

		</div>

  </div>

		<?php include 'inc\sidebar.php';?>
   
<?php include 'inc\footer.php';?>
<!-- <script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script> -->
<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
