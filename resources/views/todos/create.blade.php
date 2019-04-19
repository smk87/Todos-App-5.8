@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create Todo</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create new todo
            </div>
            <div class="card-body">
                <form action="/store-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Descriptions">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
