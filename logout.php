<?php
    session_start();
    $_SESSION["RegisterId"] = null;
    $_SESSION["email"] = null;
    $_SESSION["type"] = null;
    echo '<script>location.href = "index.php"</script>';
?>