<html>
<head>
    <title>
        step6
    </title>
    <style type="text/css">
        .static{
            height:200px;
            width:200px;
        }
        .class-a{
            background: red;
        }
        .class-b{
            background: blue;
        }
    </style>
</head>
<body>
<div id="app6">
    <div class="static" :class="{'class-a':isA,'class-b':isB}">
    </div>
    <div class="static" :class="classVal" :style="styleVal">
    </div>
    <div class="static" :class="classValue">
    </div>
    <div v-if="ok">Yes</div>
    <div v-else>No</div>
    <div v-show="ok">Yes</div>
    <div v-show="!ok">No</div>
    <div v-for="item in items">
        @{{ parent }}-@{{ $index }}-@{{ item }}
    </div>
    <div v-for="(index,item) in items">
        @{{ index }}-@{{ item }}
    </div>
    <div v-for="(index,item) of items">
        @{{ index }}-@{{ item }}
    </div>
    {{--<div v-for="(index,item) of joinTest">
        @{{ index }}-@{{ item }}
    </div>--}}
    <div v-for="item in popTest">
        @{{ index }}-@{{ item }}
    </div>
    <div v-for="item in popTest">
        @{{ index }}-@{{ item }}
    </div>
    <div v-for="(index,item) of items">
        @{{ index }}-@{{ item }}
    </div>
    <button @click="setItem">设置数组值</button>
    {{--<div v-for="(index,item) of unshiftTest">
        @{{ index }}-@{{ item }}
    </div>--}}
    {{--<div v-for="(index,item) of shiftTest">
        @{{ index }}-@{{ item }}
    </div>--}}
</div>
<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>