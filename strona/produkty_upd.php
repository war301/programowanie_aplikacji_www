<?php
require_once "cfg.php";

if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
     
    $nazwa = $_POST["nazwa"];
    $opis = $_POST["opis"];
    $cena = $_POST["cena"];
    $ilosc =  $_POST["ilosc"];
    $dostepnosc =  $_POST["dostepnosc"];
    $kategoria =  $_POST["kategoria"];
    $zdjecie = $_POST["zdjecie"];
    
    if(empty($page_title_err) && empty($page_content_err)){
        $sql = "UPDATE obiekty_do_sklepu SET nazwa=?, opis=?, cena=?, ilosc=?, dostepnosc=?, kategoria=?, zdjecie=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssdiiibi", $nazwa, $opis,$cena,$ilosc,$dostepnosc,$kategoria,$zdjecie,$id);
            
            if(mysqli_stmt_execute($stmt)){
                header("location: produkty_read.php");
                exit();
            } else{
                echo "nie działa";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM obiekty_do_sklepu WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
        
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    $nazwa = $row["nazwa"];
                    $opis = $row["opis"];
                    $cena = $row["cena"];
                    $ilosc =  $row["ilosc"];
                    $dostepnosc =  $row["dostepnosc"];
                    $kategoria =  $row["kategoria"];
                    $zdjecie = $row["zdjecie"];
                } 
            } else{
                echo "nie działa";
            }
        }
        mysqli_stmt_close($stmt);
    }  
    mysqli_close($link);
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
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Edytuj produkt</h2>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                            <label>Nazwa produktu:</label>
                            <input type="text" name="nazwa" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label>Opis produktu:</label>
                            <textarea name="opis" class="form-control"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Cena produktu:</label>
                            <input type="text" name="cena" class="form-control" >
                            
                        </div>
                        <div class="form-group">
                            <label>Ilość produktu:</label>
                            <input type="text" name="ilosc" class="form-control" >
                            
                        </div>
                        <div class="form-group">
                            <label>Dostępność produktu:</label>
                            <input type="text" name="dostepnosc" class="form-control" >
                            
                        </div>
                        <div class="form-group">
                            <label>Kategoria produktu:</label>
                            <input type="text" name="kategoria" class="form-control" ">
                            
                        </div>
                        <div class="form-group">
                            <label>Zdjęcie produktu:</label>
                            <input type="file" name="zdjecie" class="form-control" >
                            
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Potwierdź" >
                        <a href="produkty_read.php" class="btn btn-secondary ml-2">wyjdź</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>