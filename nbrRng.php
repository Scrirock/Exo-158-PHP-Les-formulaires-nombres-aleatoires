<?php

    if (isset($_POST["x"], $_POST["y"])){
        if ((int)$_POST["y"] > getrandmax()) $_POST["y"] = getrandmax();
        if ((int)$_POST["x"] < -getrandmax()) $_POST["x"] = -getrandmax();
        echo rand((int)$_POST["x"], (int)$_POST["y"]);
    }
?>