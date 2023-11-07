<?php


if ($_POST['lang'] == "en") {
    setcookie('lang', 'en');
} else {
    setcookie('lang', 'es');
}

if ($_COOKIE['lang'] == "en") {
    echo "This is the webpage in English";
} else {
    echo "Esta es la pagina en espaniol";
}

?>