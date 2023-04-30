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

        include('connection.php');

            if(isset($_POST['submit']) ){
                $course_name = $_POST['course_name'];
                $course_desc = $_POST['course_desc'];
                $teacher_id = $_POST['teacher_id'];


                $sql_course = "INSERT INTO courses (teacher_id, course_name, course_description)
                                VALUES ('$teacher_id', '$course_name', '$course_desc')  ";

                $result_course = mysqli_query($con, $sql_course);
                if($result_course){
                    echo "Course Created Successfully";
                }else{
                    echo "Error";
                }

            }
         ?>

        <form action="create_course.php" method="post">
            Course Name:
            <input type="text" name="course_name">
            <br>

            Course Schedule:
            <input type="text" name="course_schedule">
            <br>

            Course Desc:
            <input type="text" name="course_desc">
            <br>
            Assigned Teacher:
            <select name="teacher_id">

                <option value="">Choose</option>

                <?php 
                    $sql_teacher = "SELECT * FROM teachers";
                    $teacher_result = mysqli_query($con, $sql_teacher);

                    while($row = mysqli_fetch_assoc($teacher_result)){
                        ?>

                <option value="<?php echo $row['teacher_id'] ?>"><?php echo $row['teacher_fullname']; ?></option>
                <?php
                        }
                    ?>
            </select>
            <input type="submit" name="submit">

        </form>

    </body>

</html>