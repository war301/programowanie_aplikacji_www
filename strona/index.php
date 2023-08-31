<?php
include "cfg.php";

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

switch ($_GET['page']) {
    case 'glowna':
    default:    
        $id = 1;
        break;

    case 'miejsce1':
        $id = 2;
        break;

    case 'miejsce2':
    
        $id = 3;
        break;

    case 'miejsce3':
        $id = 4;
        break;

    case 'miejsce4':
        $id = 5;
        break;

    case 'miejsce5':
        $id = 6;
        break;

    case 'stronakontaktowa':
        $id = 7;
        break;
    case 'filmy':
        $id = 8;
        break;    
}

?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Arkadiusz Kulesza" />
    <link rel="stylesheet" href="../stronahtml/css/styles.css" type="text/css" />
    <title>ta zakładka</title>
	<script src="../stronahtml/js/kolorujtło.js" type="text/javascript"></script>
    <script src="../stronahtml/js/timedata.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        table {
        font-family: sans-serif;
        font-size: 30px;
    }
    </style>
</head>

<div style="position: absolute; top: 60px; right: 650px;">

<div id="zegarek"></div>
<div id="data"></div>
</div>

<div style="position: absolute; top: 50px; right: 30px;" >
<form method="POST" name="background">
    <hr>zabawa tłem:</hr>
    <input type="button" value="żółty" onclick="changeBackground('#FFF000')">
    <input type="button" value="czarny" onclick="changeBackground('#000000')">
    <input type="button" value="biały" onclick="changeBackground('#FFFFFF')">
    <input type="button" value="zielony" onclick="changeBackground('#00FF00')">
    <input type="button" value="niebieski" onclick="changeBackground('#0000FF')">
    <input type="button" value="pomarańczowy" onclick="changeBackground('#FF8000')">
    <input type="button" value="szary" onclick="changeBackground('#c0c0c0')">
    <input type="button" value="czerwony" onclick="changeBackground('#FF0000')">
</form>
</div>

<table cellpadding="0px" cellspacing="0px" id="navBar">
    <tr>
        <td>
        <a class="selected" href="index.php">Strona główna</a>
        </td>
        <td>
            <a href="index.php?page=stronakontaktowa">kontakt</a>
        </td>
        <td>
            <a href="index.php?page=filmy">filmy</a>
        </td>
        
        <td>
            <?php
                session_start();
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    echo '<a href="login.php">zaloguj</a>';
                }
                else{
                    echo '<a href="../stronahtml/admin/admin.php">admin</a>';  
                }
            ?>
        </td>
    </tr>
</table>
<div style="position: absolute; top: 100px; right: 10px;">
<?php
  $nr_indexu = '158936';
  $nrGrupy = '2';
  
  echo 'Arkadiusz Kulesza'.$nr_indeksu.' grupa '.$nrGrupy.'<br/><br/>';
?>
</div>
<body onload="startclock()">
<div class="content" >
<?php
        include "showpage.php";
        echo Showpage($id);
?>
</div>
</body>


