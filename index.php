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
            <h3> Please Login or <a href="register.php"> Register </a></h3>
            <div class="styled_content">
                <br>
                <form action="home.php" method="post">
                    <input type="email" placeholder="Email" name="giveEmail" align="center">
                    <input type="password" placeholder="Password" name="givePass" align="center">
                    <br><br>
                    <input type="submit">
                </form>
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
</html>'

?>