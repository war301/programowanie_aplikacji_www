<?php
//phpinfo();
    function PokazKontakt()
    {
        $wynik ='
            <div>
                <h2 class="mt-5">Napisz do nas:</h2>
                <p>Uzupełnij podane pola :</p>
                <form action="'.$_SERVER["PHP_SELF"].'" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                        <span class="invalid-feedback"><?php echo "zły email";?></span>
                    </div>
                    <div class="form-group">
                        <label>Temat</label>
                        <input type="text" name="temat" class="form-control ">
                        <span class="invalid-feedback"><?php echo "zły temat";?></span>
                    </div>
                    <div class="form-group">
                        <label>Treść</label>
                        <textarea name="tresc" class="form-control"></textarea>
                        <span class="invalid-feedback"><?php echo "zła treść";?></span>
                    </div>
                    <input type="submit" name="tak" class="btn btn-primary" value="Potwierdź"  >
                    <a href="index.php" class="btn btn-secondary ml-2">wróc na stronę główną</a>
                </form>
            </div>    
            ';
            return $wynik;
    }
    function wyslijMailKontakt()
    {
        $odbiorca="war301@onet.pl";
        if(empty($_POST['temat']) && empty($_POST['tresc']) && empty($_POST['email'])){
            echo PokazKontakt();
        }
        else
        {
            
            $mail['subject'] = $_POST['temat'];
            $mail['body'] = $_POST['tresc'];
            $mail['sender'] = $_POST['email'];
            $mail['reciptient'] = $odbiorca;

            $header = "From: Formularz kontaktowy <".$mail['sender'].">\n";
            $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding:";
            $header .= "X-Sander: <".$mail['sender'].">\n";
            $header .= "X-Mailer: PRapwww mail 1.2\n";
            $header .= "X-Priority: 3\n";
            $header .= "Return-Path: <".$mail['sender'].">\n";
            
            //mail($mail['reciptient'],$mail['subject'],$mail['body'],$header);
                
            echo '[wiadomosc_wyslana]';
            
            
        }
    }
    
    function OdzyskajHaslo()
    {
        $wynik = '
        <div >
            <h2 class="heading">Przypomnienie hasła:</h2>
                <div class="rem-pass">
                    <form method="post" name="PassForm" enctype="multipart/form-data" action="contact.php">
                        <table class="logowanie">	
                            <th class="log4_t">[email]</td><td><input type="email" name="email" class="rem-pass" /></td></tr>
                            <th&nbsp;<input type="submit" name="login_location" class="logowanie" value="Wyślij" /></td></tr>
                            <th><a href="../stronahtml/index.php" class="btn btn-success">wróc do strony głównej</a></td></tr>
                        </table>
                    </form>
                </div>
        </div>
        ';
        return $wynik;
    }
    function PrzypomnijHaslo(){
        
        
        if(empty($_POST['email']))
            {
                echo '[nie_wypelniles_pola]';
                echo OdzyskajHaslo();
            }
        else{
            include "cfg.php";
            
            $mail['subject']='Email z danymi do logowania';
            $mail['body']='Dziękujemy za skorzystanie z opcji przypomnienia danych do konta,
            Login: '.$login.' Hasło: '.$pass.' .';
            $mail['reciptient'] = $odbiorca;
                
            $header  = 'From: Przypomnienie hasła\n';
            $header .= 'MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: ';
            $header .= 'X-Mailer: PRapWWW mail 1.2\n';
            $header .= 'X-Priority: 3\n';
            
            
            mail('', $mail['subject'], $mail['body'], $header);
            echo '[wiadomosc_z_danymi_wyslana]';
            
            
        }
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
                    <?php 
                        if(isset($_POST['tak'])){
                            header("location: index.php");
                        }
                        if(isset($_POST['login_location'])){
                            header("location: index.php");
                        }
                        if(isset($_POST['PrzypomnijHaslo'])){
                            PrzypomnijHaslo();
                        }
                        if(isset($_POST['przyciskDodawania'])){
                            wyslijMailKontakt();
                        }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>