@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
<div class="px-64">
        <h1 class="font-bold text-3xl">Tasks</h1>
        <ul>
            @foreach ($taskssss as $task)
                <li class="border my-3 p-3">{{$task->title}}
                    <small class='float-right'>Created at {{$task->created_at}}</small> 
                </li>    
            @endforeach
        </ul>
</div>
    
@endsection