<?php
setcookie('noCokkie', 'noCokkie', time()-60);
setcookie('noneCokkie', 'noneCokkie', time()-60);
setcookie('strictCokkie', 'strictCokkie', time()-60);
setcookie('laxCokkie', 'laxCokkie', time()-60);

header('Location: https://demo.isystk.com/same-site-cookies/');
exit();
?>

