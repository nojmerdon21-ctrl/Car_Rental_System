<?php
include '../includes/config.php';

$id = $_GET['id'];

$query = "DELETE FROM client WHERE client_id = '$id'";
$result = $conn->query($query);

if($result === TRUE){
    echo "<script type='text/javascript'>
            alert('Request Successfully Deleted');
            window.location='client_requests.php';
          </script>";
}
?>