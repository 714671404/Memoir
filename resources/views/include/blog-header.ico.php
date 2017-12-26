<!--上半部分-->
<div class="blog-header">
    <div class="logo">
        <a href="blog">
            <img src="images/logo/blog-logo.jpg" alt="">
        </a>
        <h1>AGGIS 'S BLOG</h1>
        <p>从心开始，从零做起</p>
    </div>
    <div class="navigation">
        <div class="top-navigation">
            <ul class="a-navigation" id="a-navigation">
                <li v-for="todo in a_navigation"><a v-bind:href="todo.href">{{ todo.name }}</a></li>
            </ul>
            <div class="clear">&nbsp;</div>
        </div>
    </div>
</div>
<!--End上半部分-->