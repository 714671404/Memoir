<?php
session_start();
session_name('ceshi');
var_dump(session_name());
exit;
?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="UTF-8">
    <title>Aggis 's blog</title>
    <link href="css/main.blog.css" rel="stylesheet">
</head>

<body>

    <div class="all">
        <div class="header">
            <img src="images/logo/logo.png" alt="">
        </div>
        <div class="content"></div>
        <div class="footer"></div>
    </div>

</body>
</html>