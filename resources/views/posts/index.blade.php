@extends('site_layouts.app')
@section('content')
<!--<a href="/posts/create"> add new post </a>-->
<a href="{{route('posts.create')}}"> add new post </a>
<table class="table" >

    <tr>
    
    <th>#</th>
    <th>user_name</th>
    <th>user_email</th>
<th>tile</th>
    <th>description</th>
    <th>created_at</th>
    
    </tr>
    @foreach ($posts as $post)
    
    <tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->user->name}}</td>
    <td>{{ $post->user->email}}</td>
    
    <td>{{ $post->title}}</td>
    <td>{{ $post->description}}</td>
    <td>{{ $post->created_at}}</td>
    <td> <a href="/posts/{{ $post->id}}" >show</a></td>
    <td> <a href="/posts/{{ $post->id}}/edit" >edit</a></td>
    <td>

        <form action="/posts/{{ $post->id}}"method="post">
            @csrf
            @method('DELETE')
           <input type="submit" name="delete" value="DELETE">
        </form>
    </td>
    </tr>

    
    @endforeach
    
    @endsection
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   