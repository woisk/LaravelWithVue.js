<!DOCTYPE html>
<html>
<head>
    <title>step7</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;

        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        p,li,label,span{
            font-family: 'Lato';
            font-size: 96px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <p>
            try "enter" !
        </p>
        <div id="app7">
            <input placeholder="click me" @keyup.enter="alertMsg"/>
            <br><p>Message is @{{message}}</p>
            <br>
            <input type="text" v-model="message" placeholder="edit it"><br>
            <input type="checkbox" id="checkbox" v-model="checked">
            <label for="checkbox">@{{ checked }}</label>

            <br>
            <input type="checkbox" id="jack" value="jack" v-model="checkedNames">
            <label for="jack">Jack</label>
            <input type="checkbox" id="john" value="John" v-model="checkedNames">
            <label for="john">John</label>
            <input type="checkbox" id="mike" value="Mike" v-model="checkedNames">
            <label for="mike">Mike</label>
            <br>
            <span>Checked names: @{{ checkedNames|json }}</span>
            <br>
            <input type="radio" id="one" value="one" v-model="picked">
            <label for="one">one</label>
            <input type="radio" id="two" value="two" v-model="picked">
            <label for="two">two</label>
            <br>
            <span>Picked : @{{ picked }}</span>
            <br>
            {{--<select name="select" id="select" v-model="selected">--}}
                {{--<option value="A" >A</option>--}}
                {{--<option value="B" selected>B</option>--}}
                {{--<option value="C">C</option>--}}
            {{--</select>--}}
            {{--<br>--}}
            {{--<span>Selected: @{{ selected|json }}</span>--}}
            <select v-model="selected">
                <option v-for="option in options" :value="option.value" >@{{ option.text }}</option>
            </select>
            <br>
            <span>Selected : @{{ selected }}</span>
            <br>
            <input type="checkbox" id="chck" v-model="toggle" :true-value="a" :false-value="b">
            <label for="chck">@{{ toggle }}</label>

        </div>
    </div>
</div>


<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>