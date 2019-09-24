
@extends('layout.app')

@section('content')
<h1 class="text-center my-5"> Todos Page</h1>

<div class="row justify-content-center">
    <div class="col md-8 offset-md-2">
            <div class="card card-default">
                    <div class="card-header"> Todos</div>
                    <div class="card-body">
                            <ul class="list-group">
                                    @foreach ($todos as $todo)

                                <li class="list-group-item"> {{$todo->name}}
                                        <a href= "/todos/{{$todo->id}}" class=" btn btn-primary btn-sm float-right"> View </a>
                                        @if (!$todo->completed)
                                        <a href= "/todos/{{$todo->id}}/complete" class=" btn btn-info btn-sm float-right mx-1"> Mark as Complete </a>
                                </li>

                                @endif


                                    @endforeach
                                    </ul>
                    </div>

                </div>
    </div>
</div>
@endsection


