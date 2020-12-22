@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Ask Your Question</h2>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to Questions Listing</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('questions.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Question Body</label>
                                <textarea rows="5" id="body" name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-outline-primary btn-lg">Add Question</button>
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-danger btn-lg">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection