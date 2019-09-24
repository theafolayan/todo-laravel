@extends('layout.app')

@section('content')
<h1 class="text-center my-5"> Update a Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header "> Update Existing Todo</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">

<ul class="list-group">
        @foreach ($errors->all() as $error)
    <li class="list-group-item">
            {{$error}}
    </li>
</ul>

@endforeach
                </div>

@endif
            <form action="/todos/{{$todo->id}}/update-todo" method="POST">
                <input type="hidden" name="todo_id" value="{{$todo->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Name Of Task</label>
                    <input type="text" name="name" class="form-control" value="{{$todo->name}}" id="" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="" cols="5" class="form-control" rows="5">{{$todo->description}}
                        </textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit"  class ="btn btn-primary"> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
