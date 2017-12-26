<!DOCTYPE html>
<html>
<head>
    <meta lang="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>AGGIS 'S BLOG</title>

    <link href="images/ico/blog-favico.ico" rel="icon">

    <link href="css/default-property.css" rel="stylesheet">
    <link href="css/blog.main.css" rel="stylesheet">

</head>

<body>
    <!--最外层-->
    <div class="blog-all">

        <!--上半部分-->
        <?php require_once MEMOIR_PATH . '/resources/views/include/blog-header.ico.php'?>
        <!--End上半部分-->

        <!--内容-->
        <div class="blog-content" id="blog-content">
            <div class="blog-content-list" v-for="todo in todos">
                <h2><a v-bind:href="todo._href">{{ todo._title }}</a></h2>
                <div><a v-bind:href="todo._href">{{ todo._time }}</a></div>
            </div>
        </div>
        <!--End 内容-->

        <!--footer-->
        <?php require_once MEMOIR_PATH . '/resources/views/include/blog-footer.ico.php'?>
        <!--footer-->
    </div>
    <!--End 最外层-->

    <script src="js/vue/vue.min.js" type="text/javascript"></script>
    <script src="js/blog/blog.js" type="text/javascript"></script>
</body>
</html>