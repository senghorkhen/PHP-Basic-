
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        include 'header.php';
    ?>
    <h2>Contact Us</h2>
    <div class="main">
        <div class="col-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013834999078!2d104.88089491429264!3d11.55086504758067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20Num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1567775156537!5m2!1sen!2skh" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-6">
            <form action="#">
                Email:
                <input type="email" placeholder="email"><br>
                Message
                <textarea name="sms" id="message" cols="30" rows="10"></textarea>
            </form>
        </div>
    </div>
<?php
    include "footer.php";
?>
</body>
</html>