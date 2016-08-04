/**
 * Created by Administrator on 2016/8/2.
 */
Vue.transition('myAnimateTest',{
    enterClass:'bounceInLeft',
    leaveClass:'bounceOutRight'
});
/*var MyComponent = Vue.extend({
    template:'<div>A custom component!</div>'
});
Vue.component('my-component',MyComponent);*/
var Child = Vue.extend({
    props:['msg'],
   template:'<div>{{msg}}</div>'
});
var Parent = Vue.extend({
    template: '<div><my-component msg = "hello"></my-component></div>',
    components : {
        // <my-component> 只能用在父组件模板内
        'my-component': Child
    }
});

var Child1 = Vue.extend({
    props:['myName'],
    template:'<div>{{myName}}</div>'
});
var Parent1 = Vue.extend({
    template:' <input type="text" v-model="myNames">' +
    '<child1 :my-name="myNames"></child1>' +
    '<button @click=""></button>',
    components:{
        'child1':Child1
    }
});

// 注册子组件
// 将当前消息派发出去
Vue.component('child2', {
    template: '#child-template',
    data: function () {
        return { msg: 'hello' }
    },
    methods: {
        notify: function () {
            if (this.msg.trim()) {
                this.$dispatch('child-msg', this.msg)
                this.msg = ''
            }
        }
    }
});
// 注册子组件
// 将当前消息派发出去
Vue.component('child', {
    template: '#child-template',
    data: function () {
        return { msg: 'hello' }
    },
    methods: {
        notify: function () {
            if (this.msg.trim()) {
                this.$dispatch('child-msg', this.msg)
                this.msg = ''
            }
        }
    }
})

// 初始化父组件
// 将收到消息时将事件推入一个数组
var parent = new Vue({
    el: '#events-example',
    data: {
        messages: []
    },
    // 在创建实例时 `events` 选项简单地调用 `$on`
    events: {
        'child-msg': function (msg) {
            // 事件回调内的 `this` 自动绑定到注册它的实例上
            this.messages.push(msg)
        }
    }
})
Vue.component('parent',Parent);
Vue.component('parent1',Parent1);


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
});
var vue3 = new Vue({
    el:'#app3',
    data:{
        msg:"Hello"
    },
    methods:{
        reverseMsg :function () {
            this.msg = this.msg.split('').reverse().join('');
        }
    }
});
var vue4 = new Vue({
    el:'#app4',
    data:{
        newTodo:'',
        todos:[
        {text:'Add some todos'}
        ]
    },
    methods:{
        addTodo:function (){
            var text = this.newTodo.trim();
            if(text){
                this.todos.push({text:text})
                this.newTodo = '';
            }
        },
        removeTodo:function(index){
            this.todos.splice(index,1);
        }
    }
});
var vue5 = new Vue({
   el:'#app5',
    data:{
       number:56,
        ok:true,
        message:'Hello',
        url:'http://baidu.com',
        a:10
    },
    computed:{
        /*只调用get方法的一种写法
        b:function () {
            return this.a+1
        }*/
        aa:{
            get:function () {
                return this.a;
            },
            set:function (val) {
                if(val){
                    this.a = val;
                }else{
                    return this.a = 10;
                }
            }
        },
        b:function () {
            return this.a+1;
        }
    },
    methods:{
        doSomeThing:function () {
            alert('yes');
        }
    }
});
var vue6 = new Vue({
    el:'#app6',
    data:{
        isA:true,
        isB:false,
        classVal:{
            'class-a':false,
            'class-b':true
        },
        classValue:[
            'class-a',
            'class-b',
            {'class-a':true}
        ],
        styleVal:{
            transform:'translate(50px,0)'
        },
        ok:true,
        parent:'parent',
        items:[
            'one',
            'two',
            'tree'
        ]
    },
    computed:{
        joinTest:function () {
            return this.items.join();
        },
        popTest:function () {
            return this.items.pop();
        },
        unshiftTest:function () {
            return this.items.unshift('123');
        },
        shiftTest:function () {
            return this.items.shift();
        }

    },
    methods:{
        setItem:function () {
            this.items.$set(1,'four');
        }
    }
});
var vue7 = new Vue({
   el:'#app7',
    methods:{
       alertMsg:function () {
           alert('hello LWV!');
       }
    },
    data:{
        checkedNames:[],
        selected:'B',
        options:[
            {text:'one',value:'A'},
            {text:'two',value:'B'},
            {text:'three',value:'C'}
        ],
        a:'A',
        b:'B'
    }
});
var vue8 = new Vue({
    el:'#app8',
    data:{
        show:true,
        expand:'fade',
        show1:true,
        ok:true,
        list:[
            {msg:'John'},
            {msg:'Mike'},
            {msg:'Jobs'},
            {msg:'Jobs1'},
            {msg:'Jobs2'},
            {msg:'Jobs3'},
            {msg:'Jobs4'},
            {msg:'Jobs5'}
        ]
    },
    methods:{
        toggle:function () {
            if(this.show)
                this.show = false;
            else
            this.show=true;
        }
    }
});
var vue9 = new Vue({
    el:'#app9',
    data:{
        //msg:'hello'
    }

});





















