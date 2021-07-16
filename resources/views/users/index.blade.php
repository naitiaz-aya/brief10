@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-items-center">
    
    <div class="row">
    
        @foreach ($users as $user)
        <div class="card w-100 col-6 ">

            <div class="card-header">
                  <!-- Title -->
                 
                  <h3 class="h3 mb-0">{{$user->name}}</h3>
                </div>
                <!-- Card image -->
                <!-- List group -->
                <!-- Card body -->
                <div class="card-body">
                  <p class="card-text ">{{$user->role}}</p>
                  <span >{{$user->created_at}}</span>
                  <div class="card-footer">

                      <form action="/users/{{$user->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class=" col-1 btn btn-danger">Delete</button>
                            <a href="{{ route('editUser', ['id' => $user->id])}}" class="col-1 btn btn-success" >Edit</a>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
    </div>
    @endforeach
</div>
@endsection