@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" >
                    <div class="col-md-6">
                        @auth
                            @if(Auth::user()->role == 'admin')
                            <h5><a href="/users"class="btn btn-dark justify-content-center" >Users</a></h5>
        
        
                            </ul>
                            @endif
                            @endauth
        
                            <h5><a href="/myquestions" class="btn btn-dark justify-content-center">My Questions</a></h5>
                    </div>
                    <div class="col-md-6">
                        <h5><a href="/create"class="btn btn-dark justify-content-center" >Add a Questions</a></h5>
                        <h5><a href="/"class="btn btn-dark justify-content-center" >All Questions</a></h5>
                        <h5><a href="/myresponses"class="btn btn-dark justify-content-center" >My Responses</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection