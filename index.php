<?php
$emailValidated = false;
$messageValidated = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="col-md-5 container-emailform">
    <h1>Let's keep in touch!</h1>
    <form action="" method="POST">
        <label for="">Email:
            <?php
            if(isset($_POST["submit"])) {
                try {
                if(empty($_POST["email"])){
                        throw new Exception ("<span class='error'><b>Il y a un problème avec votre email</b></span>"."<br>");
                }
                    else{
                        echo "<span class='validated'>Votre email semble être correct</span>".'<br>';
                        $emailValidated = true;
                    }
                }
                catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            ?>
        </label><br>
            <input type="email" name="email"><br>
        <label for="">Message:
            <?php
            if(isset($_POST["submit"])) {
                try {
                if(empty($_POST["message"])){
                        throw new Exception ("<span class='error'><b>Il y a un problème avec votre message</b></span>"."<br>");
                }
                    else {
                        echo "<span class='validated'>Merci pour votre message</span>".'<br>';
                        $messageValidated = true;
                    }
                }
                catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            ?>
        </label><br>
            <textarea name="message" id="" maxlength="500"></textarea><br>
        <input class="btn center-block" type="submit" name="submit" value="Send Message!">
        <br>
    <?php

 //!!!!!!!!!!!!!!! TO ACTIVATE EMAIL FUNCTION $to to be changed with a correct email !!!!!!!!!!!//

    // if($emailValidated && $messageValidated) {

    //     $emailFrom = $_POST["email"];
    //     $message = $_POST["message"];

    //     $to        = 'email@email.Com';  // <-------------- !!!
    //     $subject   = 'Subject random';
    //     $message   = $_POST["message"];
    //     $headers = 'From: '.$emailFrom. "\r\n".
    //     'Reply-To:'.$emailFrom. "\r\n".
    //     'X-Mailer: PHP/' . phpversion();

    //     mail($to, $subject, $message, $emailFrom);

    // }

    ?>

    </form>
</div>

</body>
</html>