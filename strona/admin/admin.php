<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <table>
                <th><h1>Twój nick: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1></tr>
                <th><h1>Panel admina</h1></tr>
                <th><a href="../index.php" class="btn btn-warning">wróc do strony głównej</a></tr>
                <th><a href="../read_admin.php" class="btn btn-warning">zarządzaj stronami</a></tr>
                <th><a href="../logout.php" class="btn btn-danger">wyloguj się z konta</a></tr>
            </table>
        </div>
    </div>
</body>
</html>
