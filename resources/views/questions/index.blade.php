@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        @foreach ($questions as $question)

        <div class="card col-5  m-5 p-0 mb-2">
            <a href="{{ route('showQuestion', ['id' => $question->id])}}">
                <div class="card-header">
                    {{$question->title}}
                </div>
            </a>

            <div class="card-body">
                <p class="card-text">{{$question->description}}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$question->created_at}}
                @auth
                 @if(Auth::user()->role == 'admin')
                 <form action="/questions/{{$question->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
                @endif 
                @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection