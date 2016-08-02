<!DOCTYPE html>
<html>
<head>
	<title>step4</title>
</head>
<body>

<div id="app4">
	<input v-model = "newTodo" v-on:keyup.enter = "addTodo">
	<ul>
    <li v-for="todo in todos">
      <span>@{{ todo.text }}</span>
      <button v-on:click="removeTodo($index)">X</button>
    </li>
  </ul>
</div>
@yield('content')
<script src="js/vue.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>