<?php
    echo '<!DOCTYPE html>
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
                <td> <a href="index.html"> HOME </a>  </td>
                <td> <a href="index.html"> NEWS </a>  </td>
                <td> <a href="index.html"> PORTFOLIO </a>  </td>
                <td> <a href="index.html"> FAQ </a>  </td>
                <td> <a href="index.html"> CONTACT </a>  </td>
            </tr>
        </table>
    </div>

</header>
<main>
    <center>
        <h3> Please Register or <a href="index.php"> Login </a></h3>

        <div class="styled_content">
            <br>
            <form action="registration.php" method="POST">
                <input type="text" placeholder="First Name" name="giveFName" align="center">
                <br>
                <input type="text" placeholder="Last Name" name="giveLName" align="center">
                <br>
                <input type="password" placeholder="Password" name="givePass" align="center">
                <br>
                <input type="password" placeholder="Re-Enter-Password" name="reGivePass" align="center">
                <br>
                <input type="email" placeholder="Email(eg:someone@some.com)" name="giveEmail" align="center">
                <br>
                <br>
                <input type="submit" name="buttonSave" value="Save">
            </form>

            <br>
            <br>

        </div>

    </center>
</main>
<section>

</section>
<article>

</article>
<footer>

</footer>
<nav>

</nav>
<aside>

</aside>

</body>
</html>';

?>