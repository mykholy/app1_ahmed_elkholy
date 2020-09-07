@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">


    <div class="content ">
        <div class="title m-b-md">
            My profile
        </div>

        <p>my name is : {{$name}}</p>
        <p>my email : {{$name}}@gmail.com</p>
        <p>Supervise by : {{$name}}</p>
    </div>
</div>
@stop

