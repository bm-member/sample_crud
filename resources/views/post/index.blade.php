@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-right mb-3">
            <a href="{{ url('post/create') }}" class="btn btn-primary">
                Create
            </a>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12 mb-3">

            <div class="card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url("post/$post->id") }}" class="btn btn-primary">View</a>
                    <a href="{{ url("post/$post->id/edit") }}" class="btn btn-success">Edit</a>
                    <a href="{{ url("post/$post->id/delete") }}" 
                        onclick="return confirm('Are you sure to delete this post?')"
                        class="btn btn-danger">Delete</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection