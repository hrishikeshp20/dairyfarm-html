<?php
session_start();
session_destroy();
header("Location: http://127.0.0.1:5501/dairyfarm-html/index.html");
?>