<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test_management</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
                <table class="table table-bordered">
                    <thead class="table">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Exam_title</th>
                            <th scope="col">Exam_datetime</th>
                            
                            <th scope="col"><a href="chitiet.php">Chi tiết</a></th>
                            <th scope="col"><a href="them.php">Thêm</a></th>
                            <th scope="col"><a href="#">Chỉnh Sửa</a></th>                              
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //bước 1;kết nối csdl
                                include "connect.php";
                            //bước 2:truy vấn
                                $sql = "SELECT * FROM exams";
                                $result = mysqli_query($conn,$sql);
                            //bước 3: phân tích và xử lý
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo '<tr>';                       
                                        echo '<td>'.$row['id'].'</td>';
                                        echo '<td>'.$row['exam_title'].'</td>';
                                        echo '<td>'.$row['exam_datetime'].'</td>';
                                        echo '<td><a href="chitiet.php'.$row['id'].'">Chi tiết</a></td>';
                                        echo '<td><a href="them.php'.$row['id'].'">Thêm</a></td>';
                                        echo '<td><a href="sua.php?id='.$row['id'].'">Sửa</a> | <a href="xoa.php?id='.$row['id'].'">Xóa</a></td>';                                
                                        echo '</tr>';
                                    }
                                }
                        ?>          
                    </tbody>








 <!-- bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>