<!DOCTYPE html>
<html>
<head>
    <meta lang="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">

    <title>BLOG DISPLAY PAGE</title>

    <link href="images/ico/blog-favico.ico" rel="icon">

    <link href="css/default-property.css" rel="stylesheet">
    <link href="css/blog.main.css" rel="stylesheet">
</head>

<body>
    <div class="all">

        <!--header-->
        <?php require_once MEMOIR_PATH . '/resources/views/include/blog-header.ico.php'?>
        <!--End header-->

        <!--content-show-->
        <div class="content-show">
            <div class="show-list">
                <h2 class="show-list-title">开始学习 HTML CSS 基础知识</h2>
                <p class="blog-show-author">
                    <span>2017年12月26日</span>
                    <span>/</span>
                </p>
            </div>
        </div>
        <!--End content-show-->

        <!--blog-footer-->
        <?php require_once MEMOIR_PATH . '/resources/views/include/blog-footer.ico.php'?>
        <!--End blog-footer-->
    </div>

<script src="js/vue/vue.min.js" type="text/javascript"></script>
<script src="js/blog/blog.js" type="text/javascript"></script>
</body>
</html>