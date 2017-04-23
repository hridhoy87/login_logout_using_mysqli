<?php
/**
 * Created by PhpStorm.
 * User: Asad
 * Date: 17-Apr-17
 * Time: 2:24 AM
 */
session_start();

if( !isset($_POST['giveEmail']) || !isset($_POST['givePass'])){
    header("index.php");
}

//if( isset($_SESSION['giveEmail']) ){
//    header("Location: http://www.google.com");
//}

require "database.php";

$message="";

//$password=($_POST['givePass']);
$password=md5($_POST['givePass']);
$email=$_POST['giveEmail'];

if(!empty($password) && !empty($email)):

    $query="SELECT * FROM info WHERE email='".$email."'";//." AND 'password'='".$password."'";

    var_dump($query);

    $followingdata=mysqli_query($con,$query);

    $result = $followingdata->fetch_array(MYSQLI_ASSOC);

    var_dump($result);

    if ( count($result)<0 || $password != $result['password']) {

        echo 'Sorry Credentials did not match';
//        header("Location: http://www.google.com");

    }else {

        $_SESSION['giveEmail'] = $result['id'];
        $message = "LOGGED IN SUCCESSFULLY";
        header("Location: logged_in.php");

    }

endif;
?>


        //1547

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Web Page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<header>

    <div class="styled_nav_top">
        <table align="right" cellpadding="0px" cellspacing="0px" width="50%" border="0"> <!--class="styled_nav_top_table"-->
            <tr>
                <td> <a href="index.php"> HOME </a>  </td>
                <td> <a href="index.php"> NEWS </a>  </td>
                <td> <a href="index.php"> PORTFOLIO </a>  </td>
                <td> <a href="index.php"> FAQ </a>  </td>
                <td> <a href="index.php"> CONTACT </a>  </td>
                <td> <a href="log_out.php"> Log Out </a>  </td>
            </tr>
        </table>
    </div>

</header>
<main>
    <center>'
    .$message.
    '</center>
</main>
<section>

</section>
<article>
       <center>
       <img src="image1.jpg" sizes="500px 500px">
       </center>
</article>
<footer>

</footer>
<nav>

</nav>
<aside>

</aside>

</body>
</html>'

?>