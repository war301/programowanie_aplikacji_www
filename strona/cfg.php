
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $baza = 'moja_strona';
    $dbtable = 'page_list';
    $login = 'admin';
    $pass = '123456';
    $mail = 'war301@localhost.com';

    $link =mysqli_connect($dbhost, $dbuser, $dbpass,$baza);

    if ($link->connect_error) {
        echo "<b>Lost connection</b>";
        die("Connection failed: " . $link->connect_error);
    }
    if(!mysqli_select_db($link, $baza)) echo "Database not selected";

?>