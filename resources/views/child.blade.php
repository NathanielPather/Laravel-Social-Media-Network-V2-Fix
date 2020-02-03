@extends('layouts.master')

@section('title', 'Page Title')

@section('form')
    @if(auth()->check())
        <form method="POST" action="{{ url('/') }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label>User:</label>
                <input type="text" name="user" placeholder="Enter your username">
                @if ($errors->has('user'))
                    <span>{{ $errors->first('user') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label>Post:</label>
                <input type="text" name="post" placeholder="Enter a post">
                @if ($errors->has('post'))
                    <span>{{ $errors->first('post') }}</span>
                @endif
            </div>

            <div class="form-group">
                <button>Submit</button>
            </div>
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
