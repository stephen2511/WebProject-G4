<?php 
// Include the database configuration file  
require_once 'db.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["update"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $adminId = $_POST['adminId'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $ingred = $_POST['ingredients'];
        $direction = $_POST['direction'];
        $category = $_POST['category'];
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("UPDATE content SET name='$name', description='$desc', ingredient='$ingred', direction='$direction', category_id='$category', images='$imgContent', date_time=NOW() WHERE id=$adminId"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
header("Location: a_homeadmin.php");
?>