
  @extends('layout.app')
  @section('content')
  <h1 class="text-center my-5"> {{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card card-default">
                        <div class="card-header"> <b> Details </b></div>
                        <div class="card-body">
                                {{$todo->description}}
                        </div>
                        <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning"> Update</a>
                        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-3"> Delete</a>
                    </div>
        </div>
    </div>
    </div>

  @endsection
