<?php

    if (isset($_POST["x"], $_POST["y"])){
        echo rand((int)$_POST["x"], (int)$_POST["y"]);
    }

?>