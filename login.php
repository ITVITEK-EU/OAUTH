<?php
    session_start();
    header("Location: https://aplikace.itvitek.eu/login?callback=https://aplikace.itvitek.eu/url?callback={url}/auth/auth&");
?>