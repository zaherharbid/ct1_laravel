<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>UserName Page | Site1</title>
    <style>
    h1 span {
        color: red;
    }
    </style>
</head>

<body>
    <h1>Welcome <span><?= $username ?></span>, your age is <span><?= $age ?></span></h1>
    <p>Users count: <?= $users_count ?></p>
</body>

</html>