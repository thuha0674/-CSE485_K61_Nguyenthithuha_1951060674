<?php
    //kết nối CSDL
    $conn=mysqli_connect('localhost','root','','test_management');
    if(!$conn){
        die("không thể kết nối");
    }

?>