<?php

// require_once __DIR__ . '/Models/PremiumUser.php';
// require_once __DIR__ . '/Models/User.php';


// if (isset($_GET["email"])) {
//     $email = $_GET["email"];
//     $password = $_GET["password"];
//     $name = $_GET["name"];
//     $lastname = $_GET["lastname"];
//     $age = $_GET["age"];


//     $newUser = new PremiumUser($name, $lastname, $age, 20, "premium", $password, $email);
//     array_push($users, $newUser);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Account</title>
</head>

<body>
    <div class="container text-center my-5 border rounded-3 p-5 bg-dark text-white">
        <h1 class="text-uppercase my-3">sing up</h1>
        <form action="./Models/PremiumUser.php" method="post">
            <div>
                <input type="email" name="email" id="email" helper="type an email" required="required">
                <input type="date" name="age" id="age" required="required">
                <input type="text" name="name" id="name" required="required">
                <input type="text" name="lastname" id="lastname" required="required">
                <input type="password" name="password" id="password" helper="type a password" required="required">
            </div>
            <button class="btn btn-primary small my-3" type="submit">Sin Up</button>
        </form>
    </div>


</body>

</html>