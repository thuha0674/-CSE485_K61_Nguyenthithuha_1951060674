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
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    //b1:
    include "connect.php";
    //b2:
    $sql="SELECT * FROM exams WHERE id =$id";
    $result = mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);

    if(isset($_POST['sua'])){
        $exam_id=$_POST['id'];
        $exam_name=$_POST['exam_title'];
        $exam_datetime=$_POST['exam_datetime'];
        $duration=$_POST['duration']; 
        $total_question=$_POST['total_question'];
        $marks_per_right_answer=$_POST['marks_per_right_answer'];
        $created_on=$_POST['created_on'];
        $status=$_POST['status'];
        $exam_code=$_POST['exam_code'];
        //b1:kết nối
        include "../connect.php";
        //b2:truy vấn
        $sql="UPDATE exams SET id='$id', exam_tittle='$exam_name', exam_datetime='$exam_datetime', duration='$duration', total_question='$total_question', marks_per_rigth_answer='$marks_per_right_answer', created_on='$created_on', status='$status', exam_code='$exam_code'";
        $result=mysqli_query($conn,$sql);
        //b3:xử lý
        if($result > 0){
            header("Location:index.php");
        }else{
            echo "Lỗi!";    
        }
    }

?>
<body>
    <main>
        <form method="POST" action="">
            <div class="container">  
                <div class="col-md-6">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id">
                    </div>                  
                </div>
                <div class="col-md-6">
                    <label for="exam_title" class="col-sm-2 col-form-label">exam_title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="exam_title" name="exam_title">
                    </div>                  
                </div>
                <div class="col-md-6">
                    <label for="exam_datetime" class="col-sm-2 col-form-label">exam_datetime</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="exam_datetime" name="exam_datetime">
                    </div>                  
                </div>
                <div class="col-md-6">
                    <label for="duration" class="col-sm-2 col-form-label"duration</label>
                    <div class="col-sm-10">
                    <input type="time" class="form-control" id="duration" name="duration">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <label for="total_question" class="col-sm-2 col-form-label">total_question</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="total_question" name="total_question">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <label for="marks_per_right_answer" class="col-sm-2 col-form-label">marks_per_right_answer</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="marks_per_right_answer" name="marks_per_right_answer">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <label for="created_on" class="col-sm-2 col-form-label">created_on</label>
                    <div class="col-sm-10">
                    <input type="time" class="form-control" id="created_on" name="created_on">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <label for="status" class="col-sm-2 col-form-label">status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <label for="exam_code" class="col-sm-2 col-form-label">exam_code</label>
                    <div class="col-sm-10">
                    <input type="time" class="form-control" id="exam_code" name="exam_code">
                    </div> <br>                  
                </div>
                <div class="col-md-6">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success" id="sua" name="sua">Sửa</button>
                    </div>
                </div>
                
            </div> 
        </form>
    </main>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
