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
        ]
    }
})