<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>step5</title>
</head>
<body>
<div id="app5">
    <span>@{{ number+1 }}</span><br>
    <span>@{{ ok?'Yes':'No' }}</span><br>
    <span>@{{ message.split('').reverse().join('') }}</span><br>
    <span>@{{ message | capitalize }}</span><br>
    <span v-if="ok">Yes</span><br>
    <a :href="url">try</a><br>
    <button @click="doSomeThing">doSomeThing</button><br>
    <span>
        <p>a:@{{a}}</p>
        <p>b:@{{b}}</p>
    </span>


</div>
<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>