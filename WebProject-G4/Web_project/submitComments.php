<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Comment Details</title>
</head>
<body>
  <?php
    include 'db.php';
    
    if(isset($_POST['submitBtn'])){
      $name = $_POST['comment-name'];
      $ratingValue = $_POST['rating-value'];
      date_default_timezone_set("Asia/Kuala_Lumpur"); 
      $date = date('Y-m-d H:i:s');
      $comment = $_POST['comment'];

      $sql = "INSERT INTO comment (comment_name, rating, date_time, comment) VALUES ('$name', '$ratingValue', '$date', '$comment');";

      if($conn->query($sql) === TRUE){
          header( "refresh:3;url=web_comments.php" );
          echo '<script>alert("Comments have been successfully stored")</script>';
          header("Location: recipe_breakfast.php");
      } else {
          echo "Error inserting data: $conn->error";
      }
  
      $conn->close();
    }
  ?>
</body>
</html>