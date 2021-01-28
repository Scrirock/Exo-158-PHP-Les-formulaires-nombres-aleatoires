<?php

    if (isset($_POST["x"], $_POST["y"])){
        if ($_POST["y"] > getrandmax()) $_POST["y"] = getrandmax();
        echo rand((int)$_POST["x"], (int)$_POST["y"]);
    }
?>