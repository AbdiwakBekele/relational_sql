<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>


        <?php 

        $server_name = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'school';

        $con = mysqli_connect($server_name, $username, $password, $database);

        if($con){
            echo "Connected";
        }else{
            echo "Not connected";
        }

        if(isset($_POST['submit']) ){

            $teacher_name = $_POST['teacher_name'];
            $teacher_email = $_POST['teacher_email'];
            $teacher_phone = $_POST['teacher_phone'];

            $sql = "INSERT INTO teachers (teacher_fullname, teacher_email, teacher_phone) 
                                VALUES ('$teacher_name', '$teacher_email','$teacher_phone') ";

            $result = mysqli_query($con, $sql);
            if($result){
                echo "Teacher Created";
            }else{
                echo "Error Creating Teacher";
            }


        }
        
        ?>

        <form action="create_teacher.php" method="post">

            Teacher Name:
            <input type="text" name="teacher_name">
            <br>

            Teacher Email:
            <input type="email" name="teacher_email">
            <br>

            Teacher Phone:
            <input type="text" name="teacher_phone">
            <br>

            <input type="submit" name="submit">

        </form>

    </body>

</html>