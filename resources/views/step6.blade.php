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
</div>
<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>