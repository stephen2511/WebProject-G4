<?php
require('db.php');

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this recipe?")) {
                window.location.href = "a_deletedata.php?confirm_delete_id=<?php echo $delete_id; ?>";
            }
        }
    </script>

  <title>Delete Recipe</title>
  
<body>   
<script>
        // Call the confirmDelete function when the page finishes loading
        window.addEventListener("load", confirmDelete);
    </script>

    </body>
</html>

<?php
} elseif (isset($_GET['confirm_delete_id'])) {
    $delete_id = $_GET['confirm_delete_id'];

    // Retrieve the admin details from the database
    $query = "SELECT * FROM content WHERE id = $delete_id";
    $result = mysqli_query($conn, $query);
    $admin = mysqli_fetch_assoc($result);

    if($admin) {
        // Delete the admin from the database
        $delete_query = "DELETE FROM content WHERE id = $delete_id";
        mysqli_query($conn, $delete_query);

        // Show a success message
        echo "<script>alert('Admin with ID $delete_id has been deleted successfully.');</script>";
    } else {
        // Show an error message if the admin is not found
        echo "<script>alert('Admin not found.');</script>";
    }

    // Redirect to the homeadmin.php page
    echo "<script>window.location.href = 'a_homeadmin.php';</script>";
} else {
    // Redirect to the home.php page if delete_id is not provided
    header("Location: a_homeadmin.php");
    exit();
}
?>
