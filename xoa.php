<?php
    include "../connect.php";
?>


<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    //b1:
    include "connect.php";
    //b2:
    $sql="DELETE FROM exams WHERE id='$_GET[id]'";
    $result = mysqli_query($conn,$sql);
    //b3:
    if($result > 0){ 
        header("Location:index.php");
        }else{
           echo "Lỗi!";
        }
?>

