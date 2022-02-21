@extends('site_layouts.app')
@section('content')

    <form  action="/posts" method="post">
        @csrf
        
      
          <div class="mb-3">
            <label  class="form-label">title</label>
            <input type="text"  value="{{old('title')}}"class="form-control" name="title">
          </div>
          <div class="mb-3">
            <label  class="form-label">description</label>
            <input type="text"  value="{{old('description')}}" class="form-control" name="description">
          </div>
        
        <button type="submit" class="btn btn-primary">add</button>
      </form>


@include('shared.errors')
@endsection
















