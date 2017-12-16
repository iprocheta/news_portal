<?php include 'inc\header.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add videos</h2>
                 <?php
                        if(isset($_GET['vid']) ) {
                        $id=$_GET['vid'];
                        $query = "delete from video where v_id='$id'";
     
                       $result=$db->delete($query);
                       if ($result) {
                       echo "video Deleted successfully";
   
                       } else {
                       echo "Delete Failed";
                      }
                  }
                      ?>
                <div class="block">               
                 <form method="post" enctype="multipart/form-data">
                     <table border="1">
                     <tr>
                     <td>Upload  Video form pc</td></tr>
                     <tr>
                     <td><input type="file" name="fileToUpload"/></td></tr>

                    <tr> 
                     <td><br>Upload  Video form URL</td></tr>
                    <td><input type="text" name="url" placeholder="Enter video url"/></td>
                     </tr>
                     <tr><td>

                     <br><input type="submit" value="Uplaod" name="upd"/>
                     <input type="submit" value="Display Video" name="disp"/>
                      <input type="submit" value="Display Video From URL" name="dis"/>
                     </td></tr>
                    </table>
                 </form>
                 <br>
                    <br>
                    <br>
                    <hr>
                    <?php

$con = mysqli_connect("localhost", "root", "", "news") or die("Error " . mysqli_error($con));
extract($_POST);
$target_dir = "vupload/";

if(!empty($_FILES) && !empty($_FILES["fileToUpload"]["name"]) ){
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
}
if(!empty($upd) && empty($url))
 {
     $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
     {
         echo "File Format Not Suppoted";
     }
     else
    {
         $video_path=$_FILES['fileToUpload']['name'];


         mysqli_query($con,"insert into video(video_name) values('$video_path')");
         move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
         echo "uploaded ";
     }
 }
if(!empty($url))
{
     

        $video_url=$_POST['url'];

         mysqli_query($con,"insert into video(url) values('$video_url')");
       // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
         echo "uploaded ";

    }
// }
if(isset($_POST['dlt']))
{
    // $query=
}
if(!empty($disp))
{

    $query=mysqli_query($con,"select * from video ");
    while($all_video=mysqli_fetch_array($query))
    {
        ?>
    <?php if($all_video['url']==null){?> 
  <video width="300" height="200" controls> 
     
    <source src="vupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
  </video> 
     
    <!--  <?php //$t= str_replace("watch?v=","v/",$all_video['url']); ?>
    <object width="300" height="200" data="<?php echo $t; ?>" type="application/x-shockwave-flash"><param name="src" value="<?php echo $t; ?>" /></object> -->
   
    <a  onclick="return confirm('Are you want to Delete?');" href="?vid=<?php echo $all_video['v_id'];?>"> delete</a>

    
    <?php } } }
    if(!empty($dis))
{

    $query=mysqli_query($con,"select * from video ");
        while($all_video=mysqli_fetch_array($query))
   {
        ?>

 <!--  <video width="300" height="200" controls> 
     
    <source src="vupload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
  </video>  -->
    <?php if($all_video['video_name']==null){?> 
   <?php $t= str_replace("watch?v=","v/",$all_video['url']); ?>
    <object width="300" height="200" data="<?php echo $t; ?>" type="application/x-shockwave-flash"><param name="src" value="<?php echo $t; ?>" /></object> 
    
    <a  onclick="return confirm('Are you want to Delete?');" href="?vid=<?php echo $all_video['v_id'];?>"> delete</a>

    
    <?php } }} ?>

      
                        
                </div>

            </div>
        </div>
<?php include 'inc\footer.php';?>