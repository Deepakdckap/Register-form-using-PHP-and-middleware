<?php


$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (empty($username)||empty($email) ||empty($pass))
{
    header("location: /");
}

//validate
if($username && $email && $pass){
    // check the user already exixts in db;
    $statement = $app['db']->query("SELECT * FROM login WHERE email ='$email'");
    $exists=$statement->fetchAll();  

    if ($exists) {
        echo"<script>alert('Username is already taken')</script>";
        $_SESSION['user-already-exists-error'] ='The user name is already exists';
        header('Location: /');
    }
    else{
        // $statement = $app['db']->query("INSERT INTO login(username,email,password)VALUES('$username','$email',md5('$pass'))");
        $statement = $app['db']->query("INSERT INTO login(username,email,password)VALUES('$username','$email',sha1('$pass'))");

        unset($_SESSION['user-already-exists-error']);


        header('Location: /home');
        $_SESSION['name'] = [
            'username' => $username
        ];



        // $to = "vigneshshankardckap@gmail.com";
        // $subject = "This mail form PHP";
        // $message = "Hello,<br/>\n";
        // $message .= "Your username is " . $username . "<br/>\n";
        // $header = "From:deepakmdckap@gmail.com";

        // $retval = mail($to,$subject,$message,$header);

        // if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }


        // mail( to, subject, message, headers, parameters );
        // mail("vigneshshankardckap@gmail.com","This mail form PHP","Thanks for filling, for further details kindly reach us","deepakmdckap@gmail.com");

        // echo "<script>alert('thank you for filling')</script>";
    }
}

?>