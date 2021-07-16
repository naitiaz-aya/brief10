@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row border rounded border-3 m-1 justify-content-center ">
        
            <H4>{{$question->title}}</H4>
               
            
            
                <p class="card-text">{{$question->description}}</p>
                <span>{{$question->created_at}}</span>
            
           
       

    </div>
    <section class="mt-2">


        <div class="col-10">
            <form action="{{route('storeResponse')}}" method="post">
                @csrf
                <textarea class="form-control col-10" id="text" name="description" placeholder="Type your answer" rows="3"></textarea>
                <input type="hidden" value="{{$question->id}}" name="question_id">
                <button class="btn btn-dark text-white mt-2 ml-5"  type="submit">Post your Comment</button>
            </form>
        </div>
        @foreach ($responses as $response)
        <div class="p-2 border rounded border-1 m-4 d-flex justify-content-between">
            <h5>The Comment</h5>
            <p class="m-0">{{$response->description}}</p>
            <span>{{$response->user->name}}</span>
            @auth
                @if(Auth::user()->role == 'admin')
                <form action="{{ route( 'deleteResponse', ['id' => $response->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">❌</button>
                </form>
                @endif
            @endauth
            
        </div>
        @endforeach
    </section>
</div>
@endsection