@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if ($errors->any())
            @foreach ($errors->all() as $err)
            <div class="alert alert-danger">
                {{ $err }}
            </div>
            @endforeach
            @endif

            <div class="card">
                <div class="card-header">
                    Edit Post
                </div>
                <div class="card-body">
                    <form action="{{ url("post/$post->id/edit") }}" method="post">
                        @csrf
                        {{-- {{ csrf_field() }} --}}
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content" rows="3">
                                {{ $post->content }}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Update </button>
                        <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
                        {{-- <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection