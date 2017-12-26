var app = new Vue({
    el: '#a-navigation',
    data: {
        a_navigation: [
            {href: 'blog', name: 'AGGIS \'S BLOG'},
            {href: 'blog', name: '首页'}
        ]
    }
})
var content_show = new Vue({
    el: '#content-show',
    data: {
        titles: [
            {message: '2017-12-26'},
            {message: '/'},
            {message: '阅读数：0'},
            {message: '/'},
            {message: '分类：HTML CSS'},
        ],
        content_title: '这些天这在写博客，为了加深记忆从而把遇到的一些问题记录下来',
        content_lists: [
            {a: '事出原因：'},
            {a: '写博客的时候发现本来正常的页面，在IE浏览器上回扭曲变形'}
        ],
    }
})