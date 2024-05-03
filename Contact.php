<?php
$nameError = $emailError = $messageError = $subjectError=" ";
$name = $email = $message =$subject ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
function test_input($data) {
    $data = trim($data);   
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is Must Be Enter";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Only letters allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailError = "Email is Must Be Enter";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email Format";
    }
  }

    
  if (empty($_POST["message"])) {
    $messageError = "Message is Must Be Enter";
  } else {
    $message = test_input($_POST["message"]);
  } 
  
  if (empty($_POST["subject"])) {
    $subjectError = "subject is Must Be Enter";
  } else {
    $subjectError = test_input($_POST["subject"]);
  }

}


session_start();

if ( $nameError === " " && $emailError === " " && $messageError === " " ) {
    $name_sender = $_POST["name"];
    $email_sender = $_POST["email"];
    $message_body= $_POST["message"];
    $to = $_POST["email"]; 
    $subject = $_POST["subject"];
    if (mail($to, $subject, $message_body)) {
      $_SESSION['message'] = "Email Sent SuccessFully."; 
      header("Location: index.php");
    }else{
      echo "<p style='  background: black;
                    color: red;
                    width: 350px;
                    padding: 15px;
                    height: auto;
                    text-align: center;
                    font-variant: petite-caps;
                    display: flex;
                    text-align: center;
                    justify-content: center;
                    align-items: center;
                    font-size: 20px;
                    border-radius: 7px;
                    margin: auto;
                    position: absolute;
                    top: 88px;
                    left: 450px;    animation: hideMe 3s forwards;'>Email Not Sent! Try Again.</p>";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/Contact.css">

</head>

<body>
    <div class='container'>
        <?php  include 'partials/Header.php' ?>

        <center>
            <h2 class='yellow'>Get In Touch</h2>
        </center>

        <div class="container-form">

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <label for="name"> Name</label>
                <br>
                <input type="text" id="name" name="name"><br>
                <p class='error-p'><?php echo   ($nameError === " ") ? " " :  $nameError ;?></p>
                <label for="subject">Subject</label>
                <br>
                <input type="text" id="subject" name="subject"><br>
                <p class='error-p'><?php echo   ($subjectError === " ") ? " " :  $subjectError ;?></p>
                <label for="email"> Email</label>

                <br>
                <input type="email" id="email" name="email"><br>
                <p class='error-p'><?php echo   ($emailError === " ") ? " " :  $emailError ;?></p>

                <label for="message"> Message</label>
                <br>
                <textarea id="message" name="message"></textarea>
                <br>
                <p class='error-p'><?php echo   ($messageError === " ") ? " " :  $messageError ;?></p>

                <br>
                <input type="submit" value="Send Message">
            </form>
        </div>
        <hr>


    </div>
</body>

</html>