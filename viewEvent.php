<?php
require 'classes/db1.php';

require 'classes/db1.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    die("Error: Missing event ID.");
}

$sql = "
SELECT * 
FROM events e
JOIN event_info ef ON ef.event_id = e.event_id
JOIN student_coordinator s ON s.event_id = e.event_id
JOIN staff_coordinator st ON st.event_id = e.event_id
WHERE e.type_id = $id
";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}






?>


<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GASC2k26</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>

    <body>
   
    
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
       
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                   

            </div>
       
         
            <?php
                if (mysqli_num_rows($result) > 0) {

                 $i=0;
                while($row = mysqli_fetch_array($result)) {
             
                include 'events.php';  
                
                $i++;
                    }
           ?>
<div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
        <?php }?>
            <a class="btn btn-default" href="page1.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            

        

        </div><!--body content div-->

     
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
    
</html>
