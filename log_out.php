<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22-Apr-17
 * Time: 2:10 AM
 */

session_start();

session_unset();

session_destroy();

header("Location: index.php");

?>