<?php
setcookie('noCokkie', 'noCokkie', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    ]);
setcookie('noneCokkie', 'noneCokkie', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'None'
    ]);
setcookie('strictCokkie', 'strictCokkie', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
setcookie('laxCokkie', 'laxCokkie', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
    ]);
?>
<html>
<head>
<style>
body {
}
.container {
width: 50%;
text-align: center;
margin: auto;
}
.result {
border: solid 1px #000;
margin: 30px auto;
text-align: left;
padding: 10px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>クッキーのSameSite属性を検証デモ</h1>
        <p>ここに送信されたクッキーが表示されます</p>
        <div class="result">
        noCokkie: <?php echo $_COOKIE['noCokkie']; ?><br>
        noneCokkie: <?php echo $_COOKIE['noneCokkie']; ?><br>
        strictCokkie: <?php echo $_COOKIE['strictCokkie']; ?><br>
        laxCokkie: <?php echo $_COOKIE['laxCokkie']; ?>
        </div>
        <a href="./reset.php">クッキーをリセット</a>
    </div>
</body>
</html>

