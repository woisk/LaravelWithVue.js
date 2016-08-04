<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>step9</title>
    <link rel="stylesheet" type="text/css" href="style/animate.css">
</head>
<body>
<div id="app9">
<parent></parent>

<parent1>

</parent1>

</div>
<template id="child-template">
    <input v-model="msg">
    <button @click="notify">Dispatch Event</button>
</template>
<div id="events-example">
    <p>Messages: @{{ messages | json }}</p>
    <child2></child2>
</div>
<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>