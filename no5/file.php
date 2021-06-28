<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    Selamat Datang <?= htmlspecialchars($_POST["name"]); ?><br>
    Alamat email anda : <?= htmlspecialchars($_POST['email']) ?></body>
</html>
