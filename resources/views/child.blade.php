@extends('layouts.master')

@section('title', 'Page Title')

@section('form')
    @if(auth()->check())
        <form method="POST" action="/">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
            </div>

            <div class="form-group">
                <label for="post">Post:</label>
                <input type="text" class="form-control" id="post" name="post" placeholder="Enter your post">
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value={{ Auth::User()->id }}>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @include('layouts.partials.formerrors')
        </form>
    @else
        <p>You must be logged in to create a post.</p>
        <p>If you own an account, please log into it.</p>
        <p>Otherwise create a new account.</p>
    @endif
@endsection

@section('posts')
    @foreach ($posts as $post)
        <pre>
            <div id="user">{{$post->user->username}}</div><div id="timestamp">{{date('F d, Y', strtotime($post->created_at))}}</div>
            <div id="post">{{$post->post}}</div>
        </pre>
    @endforeach
@endsection
