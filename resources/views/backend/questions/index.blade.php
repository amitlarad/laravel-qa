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
                                <div class="media-body">
                                    <h3 class="mt-0">{{ $question->title }}</h3>
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