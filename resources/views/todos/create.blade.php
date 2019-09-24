@extends('layout.app')

@section('content')
<h1 class="text-center my-5"> Create To-Do</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header "> Create New Todo</div>
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
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Name Of Task</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="eg: Learn Javascript">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="I need to complete ...." id="" cols="5" class="form-control" rows="5"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit"  class ="btn btn-primary"> Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
