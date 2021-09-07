<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Send Email</p>
    <form action='contactform.php' method='POST'>
        <input type='text' name='name' placeholder='Full Name' />
        <br>
        <input type='text' name='mail' placeholder='Your Email' />
        <br>
        <input type='text' name='subject' placeholder='Subject' />
        <br>
        <textarea name='message' placeholder="Your Message"></textarea>
        <br>
        <button type='submit' name='submit'>Send Email</button>
    </form>
</body>
</html>