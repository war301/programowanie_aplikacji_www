<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}  
?>
 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Arkadiusz Kulesza" />
    <link rel="stylesheet" href="../stronahtml/css/styles.css" type="text/css" />
    <title>ta zakładka</title>
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
    <style>
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Panel zarządzania treścią</h2>
                        <a href="add_admin.php" class="btn btn-success pull-left"><i class="fa fa-plus"></i>Dodaj stronę</a>
                        <a href="../stronahtml/index.php" class="btn btn-success pull-left">Cofnij do strony głownej</a>
                    </div>
                    <?php
                    require_once "cfg.php";
                    
                    $sql = "SELECT * FROM page_list";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>page_title</th>";
                                        echo "<th>page_content</th>";
                                        echo "<th>status</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['page_title'] . "</td>";
                                        echo "<td>" . $row['page_content'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="upd_admin.php?id='. $row['id'] .'" class="mr-3" title="edytuj" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="del_admin.php?id='. $row['id'] .'" title="usuń" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Nie ma żadnych stron</em></div>';
                        }
                    } else{
                        echo "Nie działa";
                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>