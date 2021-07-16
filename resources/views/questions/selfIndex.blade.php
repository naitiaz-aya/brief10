@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        @foreach ($questions as $question)
        <div class="card col-5  m-5 p-0 mb-2">
            <div class="card-header">
                {{$question->title}}
            </div>
            <div class="card-body">
                <p class="card-text">{{$question->description}}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$question->created_at}}

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection