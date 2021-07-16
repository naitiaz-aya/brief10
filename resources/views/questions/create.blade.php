@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route ('storeQuestion')}} " method="post">
    @csrf
    <h2>Add Question</h2>
    <div class="row">
      <div class="col">
        <div class="form-group m-2">
          <label for="title">Title</label>
          <input type="text" class="form-control" placeholder="Your Question Here" name="title" id="title">
        </div>
      </div>
      
    </div>


    <div class="row">
      <div class="col m-2">
        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" class="form-control" placeholder="" name="description" id="description"></textarea>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-dark justify-content-center">Submit</button>
    

    </div>

  </form>
</div>
@endsection