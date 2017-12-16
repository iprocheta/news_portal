

<?php
 include '../lib/Session.php';
 Session::checkSession();
 ?>

 
<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>
<?php include '../helpers/Format.php';?>
<?php 
    $db=new Database();
    $fm=new Format();

?>

<?php
  header("Cache-Control: no-cache, must-revalidate"); 
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--Boothstrap-->
   <!-- <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <link href="css/fancy-button/fancy-button.css" rel="stylesheet" type="text/css" />
    <!--Jquery UI CSS-->
    <link href="css/themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>

    <!--Fancy Button-->
    <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <!--dataTable-->
     <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
        <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                 <div class="floatleft logo">
                    <img src="img/ku.png" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>KU NEWS PORTAL</h1>
					<p>Admin Panel</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <?php
                        if (isset($_GET['action'])&& $_GET['action']=="logout") {
                           Session::destroy();
                      }
                     
                    ?>
                    <div class="floatleft marginleft10">
                    
                        <ul class="inline-ul floatleft">
                            <li>Hello admin</li>
                            
                            <li><a href="?action=logout">Logout</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="editprofile.php"><span>User Profile</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.php"><span>Inbox
                    <?php
                        $query="SELECT * FROM tbl_contact WHERE flag='0'";
                        $contact=$db->select($query);
                        if ($contact) {
                            $count=mysqli_num_rows($contact);
                         echo "(".$count.")";     //1 er pashe string bracet add korar jonno dot lagce
                        }
                            ?>
                </span></a></li>
                <?php
                    if (Session::get("role")==1) {
                
                ?>
                <!-- <li class="ic-charts"><a href="adduser.php"><span>Add User</span></a></li> -->
                <li class="ic-charts"><a href="application_list.php"><span>Application List
                    <?php
                        $query="SELECT * FROM tbl_application";
                        $contact=$db->select($query);
                        if ($contact) {
                            $count=mysqli_num_rows($contact);
                            echo "(".$count.")";
                        }
                            ?>
                </span></a></li>
                <li class="ic-charts"><a href="userlist.php"><span>User List</span></a></li>
                <?php }?>
                <li class="ic-charts"><a href="../index.php"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                     <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.php">Title & Slogan</a></li>
                                <li><a href="social.php">Social Media</a></li>
                                
                                <li><a href="copyright.php">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                         <li><a class="menuitem">Update Pages</a>
                            <ul class="submenu">
                                <li><a href="about.php">About Us</a></li>
                                <li><a>Contact Us</a></li>
                            </ul>
                        </li>
						<li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="addcat.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="addpost.php">Add Post</a> </li>
                                <li><a href="postlist.php">Post List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Gallary Option</a>
                            <ul class="submenu">
                               
                                 <li><a href="photo.php">Add Image</a></li>
                                 <li><a href="video.php">Add Video</a></li>
                                
                                
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>