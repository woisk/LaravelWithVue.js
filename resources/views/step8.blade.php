<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>step8</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" type="text/css" href="style/animate.css">
    <style type="text/css">

        body{
            font-family: Lato;
        }
        .bounce-transition {
            height:80px;
            font-size:50px;
            display: inline-block; /* 否则 scale 动画不起作用 */
        }
        .bounce-enter {
            animation: bounce-in .5s;
        }
        .bounce-leave {
            animation: bounce-out .5s;
        }
        @keyframes bounce-in {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes bounce-out {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(0);
            }
        }


    </style>
</head>
<body>
<div id="app8">
    <span v-show="show" transition="bounce">Look at me!</span><br>
    <button @click="show = !show">toggle</button><br>
    <div v-show="show1" transition="fade">Look at this</div><br>
    <button @click="show1=!show1">toggle</button><br>
    <input type="text" v-model="query">
    <ul>
        <li v-for="item in list|filterBy query" transition="staggered" stagger="100">@{{ item.msg }}</li>
    </ul>

</div>


<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>