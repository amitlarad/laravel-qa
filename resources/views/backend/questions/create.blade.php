@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>{{ !empty($question->id) ? 'Modify Question' : 'Ask Your Question' }}</h2>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to Questions Listing</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ !empty($question->id) ? route('questions.update', $question->id) : route('questions.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ csrf_field() }}
                            @isset($question->id)
                            {{ method_field('PUT') }}
                            @endisset
                            @include("backend.questions.form")
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection