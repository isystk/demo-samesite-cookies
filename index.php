<?php
setcookie('noCokkie', '1', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    ]);
setcookie('noneCokkie', '1', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'None'
    ]);
setcookie('strictCokkie', '1', [
    'expires' => time()+3600,
    'path' => '/samesite-cookies',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
setcookie('laxCokkie', '1', [
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
        noCokkie: <?php if($_COOKIE['noCokkie'] == '1'){ echo '○'; }  ?><br>
        noneCokkie: <?php if($_COOKIE['noneCokkie'] == '1'){ echo '○'; } ?><br>
        strictCokkie: <?php if($_COOKIE['strictCokkie'] == '1'){ echo '○'; } ?><br>
        laxCokkie: <?php if($_COOKIE['laxCokkie'] == '1'){ echo '○'; } ?><br>
        </div>
        <a href="./reset.php">クッキーをリセット</a>
    </div>
</body>
</html>

