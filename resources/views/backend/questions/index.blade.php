@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Questions Listing</div>
                    <div class="card-body">
                        @foreach($questions as $question)
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
                                    <h3 class="mt-0">
                                        <a href="{{ $question->url }}">
                                            {{ $question->title }}
                                        </a>
                                    </h3>
                                    <p class="lead">
                                        Asked by
                                        <a href="{{ $question->user->url }}">
                                            {{ $question->user->name }}
                                        </a>
                                        <small>{{ $question->created_date }}</small>
                                    </p>
                                    <p>{{ str_limit($question->body, 200) }}</p>
                                </div>
                            </div>
                            <hr color="#dcdcdc"/>
                        @endforeach
                        {!! $questions->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection