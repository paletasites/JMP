<?php 
    $cookie_name = "pagina_001";
    $cookie_value = "";
    $cookie_duration = time() + (86400 * 10);

    setcookie($cookie_name, $cookie_value, $cookie_duration, "/");

    // echo "cookie criado com sucesso :)";
?>