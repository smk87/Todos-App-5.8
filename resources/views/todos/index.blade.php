@extends('layouts.app')

@section('title')
Todos List
@endsection

@section('content')
<h1 class="text-center my-5">TODOS PAGE</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                @foreach ($todos as $todo)
                <ul class="list-group">
                    <li class="list-group-item">
                        {{$todo->name}}
                        @if(!$todo->completed)
                        <a class="btn btn-warning float-right" href="/todos/{{$todo->id}}/complete">Complete</a>
                        @endif
                        <a class="btn btn-primary float-right mr-2" href="/todos/{{$todo->id}}">View</a>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
