<!DOCTYPE html>
<html>
<head>
    <meta lang="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>Dome文本</title>
    <style>

        box {
            -moz-border-radius: 15px; /* Firefox */
            -webkit-border-radius: 15px; /* Safari 和 Chrome */
            border-radius: 15px; /* Opera 10.5+, 以及使用了IE-CSS3的IE浏览器 */

            /*-moz-box-shadow: 10px 10px 20px #000; !* Firefox *!*/
            /*-webkit-box-shadow: 10px 10px 20px #000; !* Safari 和 Chrome *!*/
            /*box-shadow: 10px 10px 20px #000; !* Opera 10.5+, 以及使用了IE-CSS3的IE浏览器 *!*/

            /*behavior: url(css/ie-css3.htc); !* 通知IE浏览器调用脚本作用于'box'类 *!*/
        }

        body {
            margin: 20px;
            padding: 0;
            background: url('/images/bg/blog-bg.gif');
        }
        .header {
            margin: 0 auto;
            background-color: red;
            width: 300px;
            height: 300px;
            border-radius:50%;/*直接支持css3圆角属性的浏览器（如IE10）*/
        }
    </style>
</head>

<body>
    <div class="all">
        <div class="header"></div>
    </div>
</body>
</html>