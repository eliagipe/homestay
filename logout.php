<?php
    session_start();
    $_SESSION["type"] = null;
    echo '<script>location.href = "index.php"</script>';
?>