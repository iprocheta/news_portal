 <?php include 'inc\header.php';?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <?php
                    if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $fb=$fm->validation($_POST['fb']);
                        $tw=$fm->validation($_POST['tw']);
                        $ln=$fm->validation($_POST['ln']);
                        $gp=$fm->validation($_POST['gp']);
        
                        $fb = mysqli_escape_string($db->link,$fb);
                        $tw = mysqli_escape_string($db->link,$tw);
                        $ln = mysqli_escape_string($db->link,$ln);
                        $gp = mysqli_escape_string($db->link,$gp);
                        
                        
                        if (empty($fb) || empty($tw)||empty($ln) || empty($gp)) {
                            echo "<div class='alert alert-warning'>
                                             <strong>Warning!</strong> Field must not be empty.
                                   </div>";
                        }
                        
                         else{

                                $query="UPDATE tbl_social SET fb='$fb',tw='$tw',ln='$ln',gp='$gp' WHERE id='1'";
                                
                               $update_rows = $db->update($query);
                                if ($update_rows) {
                                    echo "<span class='success'>Data Updated Successfully.    </span>";
                                } else {
                                    echo "<span class='error'>Data Not Updated !</span>";
                                }
                            


                         
                    }
                    } 
                    ?>
         

                <div class="block">  
                <?php 
                $query="select * from tbl_social where id='1'";
                $socialmedia=$db->select($query);
                if($socialmedia){

                    while ($result=$socialmedia->fetch_assoc()) {
                        
                    
                ?>             
                 <form action="social.php" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="fb" value="<?php echo $result['fb'];?>" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="tw" value="<?php echo $result['tw'];?>" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="ln" value="<?php echo $result['ln'];?>" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="gp" value="<?php echo $result['gp'];?>" class="medium" />
                            </td>
                        </tr>
                        
                         <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } }?>
                </div>
            </div>
        </div>
<?php include 'inc\footer.php';?>