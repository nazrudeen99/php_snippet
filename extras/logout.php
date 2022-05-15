<?php
session_start();
session_destroy();
header('Location: /php-crash-main/13_sessions.php');