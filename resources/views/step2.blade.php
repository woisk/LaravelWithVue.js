@extends('welcome')
@section('content')
<div id="app2" class="container">
    <div class="content">
        <ul>
            <li v-for="todo in todos">
                @{{ todo.text }}
            </li>
        </ul>
    </div>
</div>