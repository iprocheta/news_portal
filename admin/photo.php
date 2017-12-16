<?php include 'inc\header.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Photos</h2>
                 <?php
                        if(isset($_GET['vid']) ) {
                        $id=$_GET['vid'];
                        $query = "delete from photos where id='$id'";
     
                       $result=$db->delete($query);
                       if ($result) {
                       echo "Image Deleted successfully";
   
                       } else {
                       echo "Delete Failed";
                      }
                  }
                      ?>
                <div class="block">  
                 <?php
                    if (isset($_POST['upd'])) {
                        $caption= mysqli_escape_string($db->link, $_POST['caption']);
                        

                        $permited = array('jpg', 'jpeg', 'png', 'gif');
                        $file_name = $_FILES['location']['name'];
                        $file_size = $_FILES['location']['size'];
                        $file_temp = $_FILES['location']['tmp_name'];

                        $div = explode('.', $file_name);
                        $file_ext = strtolower(end($div));
                        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                        $uploaded_image = "photos/".$unique_image;

                        if (empty($caption) ||empty($uploaded_image)) {
                            echo "<div class='alert alert-warning'>
                                             <strong>Warning!</strong> Field must not be empty.
                                   </div>";
                        } elseif ($file_size > 1048567) {
                            echo "<span class='error'>Image Size should be less then 1MB!</span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                            echo "<span class='error'>You can upload only:-"
                                . implode(', ', $permited) . "</span>";
                        } else {
                            move_uploaded_file($file_temp, $uploaded_image);
                            $query = "INSERT INTO photos (location,caption) VALUES
                            ('$uploaded_image','$caption')";
                            $inserted_rows = $db->insert($query);
                            if ($inserted_rows) {
                                echo "<span class='success'>Image Inserted Successfully.    </span>";
                            } else {
                                echo "<span class='error'>Image Not Inserted !</span>";
                            }
                        }
                    }
                    ?>             
                 <form method="post" enctype="multipart/form-data">
                     <table border="1">
                     <tr>
                     <td><b>Upload  Image</td></tr>
                     <tr><td><input type="file" name="location"/></td></tr>
                     <tr><td><br><b>Caption</td></tr>
                     <tr><td><input type="text" name="caption" placeholder="Enter Image Caption..." class="medium" /></td></tr>

                     
                     <tr><td>
                     <br><input type="submit" value="Save" name="upd"/>
                     <input type="submit" value="Display image" name="disp"/>

                     </td></tr>
                    </table>
                 </form>
                 <br>
                    <br>
                    <br>
                    <hr>
                   <?php
if(isset($_POST['disp'])){
$query="SELECT * FROM photos";
$result=$db->select($query);
if($result){
while($row=$result->fetch_assoc())
{
        ?>
        
       <img src="<?php echo $row['location']?>" alt="post image" width="300" height="200"/>
       <a  onclick="return confirm('Are you want to Delete?');" href="?vid=<?php echo $row['id'];?>"> delete</a>
<?php } } }          
?>      
        
      
                        
                </div>

            </div>
        </div>

<?php include 'inc\footer.php';?>