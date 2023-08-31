<?php
require_once "cfg.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $matka = $_POST["matka"];
    $nazwa = $_POST["nazwa"];

    
    
        $sql = "INSERT INTO kategorie (matka,nazwa) VALUES (?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "is", $matka, $nazwa);
            
            if(mysqli_stmt_execute($stmt)){
                header("location: kategorie_read.php");
                exit();
            } else{
                echo "nie działa";
            }
        }
        mysqli_stmt_close($stmt);
    
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
                    <h2 class="mt-5">Stwórz kategorie</h2>
                    <p>Uzupełnij pola</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Matka kategori:</label>
                            <input type="text" name="matka" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Nazwa kategori:</label>
                            <textarea name="nazwa" class="form-control"></textarea>
                        </div>
                        <div class="form-group">

                        <input type="submit" class="btn btn-primary" value="Potwierdź">
                        <a href="produkty_read.php" class="btn btn-secondary ml-2">Wyjdź</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>