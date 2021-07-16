@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Responses</h2>
    <div class="row " style="gap:10px;">
        @foreach ($responses as $response)
        <div class="card col-5 p-0 m-5">
            <div class="text-header p-3">
                {{$response->description}}
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                {{$response->created_at}}

                <a href="/questions/{{$response->question_id}}" class="btn btn-dark    ">The question</a>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection