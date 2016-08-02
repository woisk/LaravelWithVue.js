/**
 * Created by Administrator on 2016/8/2.
 */
var vue = new Vue({
    el:'#app',
    data:{
        message:'Hello world!'
    }
});
var vue2 = new Vue({
    el:'#app2',
    data:{
        todos:[
            {text:'learn php'},
            {text:'learn laravel'},
            {text:'do something awesome'},
        ]
    }
})