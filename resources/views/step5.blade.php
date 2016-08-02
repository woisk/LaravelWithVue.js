@extends('step4')
@section('content')
<div id="app5">
    <span>@{{ number+1 }}</span>
    <span>@{{ ok?'Yes':'No' }}</span>
    <span>@{{ message.split('').reverse().join('') }}</span>
</div>
