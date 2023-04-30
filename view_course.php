<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <table>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>Assigned Teacher</th>
            </tr>

            <?php
            include('connection.php');
             echo "<br>";

            //Read Command
            $sql = "SELECT * FROM courses";
            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_assoc($result) ){
                $teacher_id = $row['teacher_id'];

                $teacher_sql = "SELECT * FROM teachers WHERE teacher_id = '$teacher_id'";
                $result_teacher = mysqli_query($con, $teacher_sql);

                while ($row_teacher = mysqli_fetch_assoc($result_teacher)) {
                echo "<tr>";
                    echo "<td>" . $row['course_name'] . "</td>" ;
                    echo "<td>" . $row['course_description'] . "</td>" ;
                    echo "<td>" . $row_teacher['teacher_fullname'] . "</td>" ;
                echo "</tr>";
                
                }
            }
        ?>


        </table>

    </body>

</html>