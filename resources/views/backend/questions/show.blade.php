@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Question Details</h2>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to Questions Listing</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $question->votes }}</strong> {{ str_plural('vote', $question->votes) }}
                                </div>
                                <div class="status {{ $question->status }}">
                                    <strong>{{ $question->answers }}</strong> {{ str_plural('answer', $question->votes) }}
                                </div>
                                <div class="views">
                                    <strong>{{ $question->views }}</strong> {{ str_plural('view', $question->votes) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="mt-0">
                                        <a href="{{ $question->url }}">
                                            {{ $question->title }}
                                        </a>
                                    </h3>
                                    <div class="ml-auto">
                                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Modify</a>
                                        <form action="{{ route('questions.destroy', $question->id) }}" method="post" class="mt-1">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <p class="lead">
                                    Asked by
                                    <a href="{{ $question->user->url }}">
                                        {{ $question->user->name }}
                                    </a>
                                    <small>{{ $question->created_date }}</small>
                                </p>
                                <p>{{ $question->body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection