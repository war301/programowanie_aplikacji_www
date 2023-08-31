<?php
require_once "cfg.php";
 
$page_title = $page_content = "";
$page_title_err = $page_content_err ="";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $input_name = trim($_POST["page_title"]);
    if(empty($input_name)){
        $page_title_err = "Please enter a page_title.";
    } else{
        $page_title = $input_name;
    }
    
    $input_page_content = trim($_POST["page_content"]);
    if(empty($input_page_content)){
        $page_content_err = "Please enter an page_content.";     
    } else{
        $page_content = $input_page_content;
    }
    
    if(empty($page_title_err) && empty($page_content_err) ){
        $sql = "INSERT INTO page_list (page_title, page_content) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_page_content);
            
            $param_name = $page_title;
            $param_page_content = $page_content;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: read_admin.php");
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
                    <h2 class="mt-5">Stwórz stronę </h2>
                    <p>Uzupełnij pola</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nazwa strony:</label>
                            <input type="text" name="page_title" class="form-control <?php echo (!empty($page_title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $page_title; ?>">
                            <span class="invalid-feedback"><?php echo $page_title_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Zawartość strony:</label>
                            <textarea name="page_content" class="form-control <?php echo (!empty($page_content_err)) ? 'is-invalid' : ''; ?>"><?php echo $page_content; ?></textarea>
                            <span class="invalid-feedback"><?php echo $page_content_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Potwierdź">
                        <a href="read_admin.php" class="btn btn-secondary ml-2">Wyjdź</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
