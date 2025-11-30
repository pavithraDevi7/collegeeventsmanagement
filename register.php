
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GASC2k26</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body style="background-image: url('images/car-02.jpg');">
    <!--<p><?php require 'utils/header.php'; ?></p>-->
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">

   
        <label>Student USN:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>Student Name:</label><br>
        <input type="text" name="stu_name" class="form-control" required><br><br>

        <label>Branch:</label><br>
        <input type="text" name="branch" class="form-control" required><br><br>

        <label>Semester:</label><br>
        <input type="text" name="sem" class="form-control" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"  class="form-control" required ><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"  class="form-control" required><br><br>

        <label>College:</label><br>
        <input type="text" name="college"  class="form-control" required><br><br>
        
        
        <label>Event-id_number(Must):</label><br>
        <input type="text" name="event_id"  class="form-control" required><br><br>


        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a><br><br>
          
        <button><a href="page1.php">Back</a></button>

    </div>
    </div>
    </div>
    </form>
    
     <style>

    label{
        color:white;
    }

     </style>
    </body>
</html>

<?php

    if (isset($_POST["update"]))
    {
        $usn=$_POST["usn"];
        $stu_name=$_POST["stu_name"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $college=$_POST["college"];
        $event_id=$_POST["event_id"];


        if( !empty($usn) || !empty($stu_name) || !empty($branch) || !empty($sem) || !empty($email) || !empty($phone) || !empty($college) || !empty($event_id))
        {
        
            include 'classes/db1.php';     
                $INSERT="INSERT INTO participent (usn,stu_name,branch,sem,email,phone,college,event_id) VALUES('$usn','$stu_name','$branch',$sem,'$email','$phone','$college',$event_id)";

          
                if($conn->query($INSERT)===True){
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>