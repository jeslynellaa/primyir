<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Dear {{ $givenName }}, </p>
    <p>Your temporary credentials are: </p>
    <ul>
    <li> Username: {{ $username }} </li>
    <li> Password: {{ $rand_password }} </li>
    </ul>
    <p>Please use these credentials to log in to your account. We recommend that you change your password immediately after logging in.</p>

    <p>Thank you,</p>
    <p>e-SKWELAHAN Admin</p>
</body>
</html>