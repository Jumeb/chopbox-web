<?php
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $to = 'digitalrenter22@gmail.com';

    //Customise email
    $headers = 'From: '.$name.'  "\r\n"  Reply-To: '.$email.' "\r\n"  ';
    $subject = 'New Chopbox Template Order';
    $message = '
                Greetings Digital Rental Team, I '.$name.' will like to get the chopbox template of category '.$category.' and price '.$price.'. <br>
                Will be waiting for your resposne via '.$email.'
                ';
    mail($to, $subject, $message, $headers);
    $_SESSION['status'] = 'Successful';
    header('location: index.html');
} else {
    $_SESSION['status'] = 'Failed';
    header('location: index.html');
}
>