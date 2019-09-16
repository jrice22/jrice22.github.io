<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Liberty</title>
</head>
<body>
    
            <header>

            <img src="img/logo.png" alt="logo" class="logo">
            <div class="grid1">
            <i class="icon ion-md-call phone"></i>
            <p><span class="hours">(720)-949-8600</span><br>
            @LibertyEnviroLLC.com</p>

            <i class="icon ion-md-time time"></i>
            <p><span class="hours">Open Hours</span><br>
            Mon - Fri 8:00am - 5:00pm</p>

            </div>


            </header>


            <nav class="nav">
            <ul>
                <li> <a href="index.html"><span class="home">Home</span></a></li>
                <li> <a href="#">Projects</a></li>
                <li> <a href="about.html">About</a></li>
                <li> <a href="schedule.html">Schedule</a></li>
                <li> <a href="contact.php">Contact</a></li>
                
    
            </ul>
        </nav>

        <section>



        <?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
      $name_error = 'Invalid name';
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
      $subject_error = 'Invalid subject';
    }
    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
      $email_error = 'Invalid email';
    }
    if(strlen($message) === 0){
      $message_error = 'Your message should not be empty';
    }
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" name="name">
  <p><?php if(isset($name_error)) echo $name_error; ?></p>
  <label for="subject">Subject:</label><br>
  <input type="text" name="subject">
  <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
  <label for="email">Email:</label><br>
  <input type="text" name="email">
  <p><?php if(isset($email_error)) echo $email_error; ?></p>
  <label for="message">Message:</label><br>
  <textarea name="message"></textarea>
  <p><?php if(isset($message_error)) echo $message_error; ?></p>
  <input type="submit" name="submit" value="Submit">
  <?php 
    if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      $to = 'youremail@addres.com'; // edit here
      $body = " Name: $name\n E-mail: $email\n Message:\n $message";
      if(mail($to, $subject, $body)){
        echo '<p style="color: green">Message sent</p>';
      }else{
        echo '<p>Error occurred, please try again later</p>';
      }
    }
  ?>
</form>

</section>









        <footer>
                    <div class="footer-navi">
                        <ul class="footer-nav">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="schedule.html">Schedule</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
    
                    </div>
                    
            
                <div class="copyright">
                    <img src="img/logo.png" alt="company logo" class="footer-logo">
                    <p>
                        Copyright &copy; <script type="text/javascript">
                            document.write(new Date().getFullYear());
                          </script> by Liberty Environmental. All rights reserved.
                    </p>
                </div>
    
    
    
                <div class="social-images">
                        <ul class="social-icons">
                            <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-logo-googleplus"></i></a></li>
                            <li><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
    
                        </ul>
                    </div>



                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                        <script src="js/script.js"></script>

                </footer>



</body>
</html>