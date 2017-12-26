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
        <div class="content-show" id="content-show">
            <div class="show-list">
<<<<<<< HEAD
                <h2 class="show-list-title">ie 兼容问题 相关记录</h2>
                <p class="blog-show-author">
                    <span>2017-12-26</span>
                </p>
=======
                <div class="show-title">
                    <h2 class="title">HTML CSS 如何兼容IE浏览器</h2>
                    <div class="blog-show-time">
                        <span v-for="title in titles">{{ title.message }}</span>
                    </div>
                </div>
                <div>
                    <p>头部声明</p>
                </div>
>>>>>>> 7280ce6a9c8728bfa875fc9c26faa58d9d0f2256
            </div>
            <div>aaaaaaaaaaaaaa</div>
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