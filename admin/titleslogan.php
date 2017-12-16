<?php include 'inc\header.php';?>
        
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>
                 <?php
                    if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $title=$fm->validation($_POST['title']);
                        $slogan=$fm->validation($_POST['slogan']);
        
                        $title = mysqli_escape_string($db->link,$title);
                        $slogan = mysqli_escape_string($db->link,$slogan);
                        
                        
                        if (empty($title) || empty($slogan)) {
                            echo "<div class='alert alert-warning'>
                                             <strong>Warning!</strong> Field must not be empty.
                                   </div>";
                        }
                        
                         else{

                                $query="UPDATE title_slogan SET title='$title',slogan='$slogan' WHERE id='1'";
                                
                               $update_rows = $db->update($query);
                                if ($update_rows) {
                                    echo "<span class='success'>Data Updated Successfully.    </span>";
                                } else {
                                    echo "<span class='error'>Data Not Updated !</span>";
                                }
                            


                         
                    }
                    } 
                    ?>
         

                <div class="block sloginblock">               
                 <form action="titleslogan.php" method="post" enctype="multipart/form-data">
                    <table class="form">                    
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Website Title..."  name="title" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Website Slogan..." name="slogan" class="medium" />
                            </td>
                        </tr>
                         
                        
                         <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc\footer.php';?>