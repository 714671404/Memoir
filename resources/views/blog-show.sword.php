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
                <div class="show-title">
                    <h2 class="title">HTML CSS 如何兼容IE浏览器</h2>
                    <div class="blog-show-time">
                        <span v-for="title in titles">{{ title.message }}</span>
                    </div>
                </div>
                <div class="show-content">
                    <h4 class="content-title">{{ content_title }}</h4>
                    <p>
                        <span v-for="list in content_lists">{{ list.a }}</span>
                    </p>
                    <div class="content-list">
                        <div class="content-wrap">
                            <p>开始的时候在google上查找，了解到布局变形，是因为IE浏览器与Google浏览器相互不兼容的原因并且给出解决方案如下。</p>
                            <p><img src="images/uploads/20171227020141.png"></p>
                            <p>可是后来发现即使添加了‘-moz-border-radius’与‘-webkit-border-radius’这两个属性，发现也没有什么效果。</p>
                            <p>后来继续在Google上查找发现原来想要解决不兼容IE浏览器的问题，是应该在head区域声明一些渲染属性</p>
                            <p><img src="images/uploads/20171227022807123.png"></p>
                            <p>发现这个以后我马上进行了测试，果然好用</p>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <p>记录这个内容是为了方便自己记忆，本人初识变成，如果有说的不对的地方，请见谅。</p>
                    </div>
                </div>
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