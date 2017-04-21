<?php
    /**
    * Created by PhpStorm.
    * User: User
    * Date: 17-Apr-17
    * Time: 1:50 PM
    */

    //Importing Database Script
    require ('database.php');
    session_start();

    if( isset($_SESSION['giveEmail']) ){
    header("Location: /");
   }

    //Creating sql query

    $message = '';
    $firstName= $_POST['giveFName'];
    $lastName= $_POST['giveLName'];
    //$password= $_POST['password'];
    $password= md5($_POST['givePass']);
    $rePass= md5($_POST['reGivePass']);
    $email= $_POST['giveEmail'];

    if(!empty($_POST['giveEmail']) && !empty($_POST['givePass']) && !empty($_POST['giveFName']) && !empty($_POST['giveLName']) && $password==$rePass):
        $query= "INSERT INTO info (fname,lname,password,email,time ) VALUES ('".$firstName."','".$lastName."','".$password."','".$email."',CURRENT_TIMESTAMP)";
        //var_dump($query);
        $res=mysqli_query($con,$query);
        $message="Successful";
    endif;

?>
<!DOCTYPE html>
<body>

<center>
    <h1>
        <?php
            echo $message;
        ?>
    </h1>
</center>
</body>
