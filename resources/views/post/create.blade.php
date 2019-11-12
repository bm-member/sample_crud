@extends('layouts.app')

@section('title', 'Create Post')

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
                    Create Post
                </div>
                <div class="card-body">
                    <form action="{{ url('post') }}" method="post">
                        @csrf
                        {{-- {{ csrf_field() }} --}}
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Create </button>
                        <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
                        {{-- <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection