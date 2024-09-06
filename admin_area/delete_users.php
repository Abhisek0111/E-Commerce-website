<?php

if(isset($_GET['delete_users'])){
    $delete_users=$_GET['delete_users'];

    // delete query

    $delete_query="delete from `user_table` where user_id=$delete_users";
    $result_product=mysqli_query($con,$delete_query);
    if($result_product){
        echo "<script>alert('User deleted successfully')</script>";
        echo "<script>window.open('./index.php?list_users','_self')</script>";
     }
}

?>