<?php
require_once "cfg.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $nazwa = $_POST["nazwa"];
    $opis = $_POST["opis"];
    $cena = $_POST["cena"];
    $ilosc =  $_POST["ilosc"];
    $dostepnosc =  $_POST["dostepnosc"];
    $kategoria =  $_POST["kategoria"];
    $zdjecie = $_POST["zdjecie"];
    

    if(empty($nazwa_err) && empty($nazwa_err_err) ){
        $sql = "INSERT INTO obiekty_do_sklepu (nazwa, opis,cena,ilosc,dostepnosc,kategoria,zdjecie) VALUES (?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ssdiiib", $nazwa, $opis,$cena,$ilosc,$dostepnosc,$kategoria,$zdjecie);
            
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
                    <h2 class="mt-5">Stwórz produkt</h2>
                    <p>Uzupełnij pola</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <input type="submit" class="btn btn-primary" value="Potwierdź">
                        <a href="produkty_read.php" class="btn btn-secondary ml-2">Wyjdź</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>