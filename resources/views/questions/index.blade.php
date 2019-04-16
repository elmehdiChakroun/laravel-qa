@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                @foreach( $questions as $question )
                   <div class="media">
                   <div class="d-flex flex-column counters">
                        <div class="vote">
                            <strong>{{ $question->votes }} </strong> {{ str_plural('vote', $question->votes) }}
                        </div>
                        <div class="status answered-accepted">
                            <strong>{{ $question->answers }}</strong> {{ str_plural('answer', $question->answers) }}
                        </div>
                        <div class="view">
                            <strong>{{ $question->views }}</strong> {{ str_plural('view', $question->views) }}
                        </div>
                   </div>
                    <div class="media-body">
                        <h2 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h2>
                        <p class="lead">
                            Asked by 
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                at <small class="text-muted">{{ $question->created_at }}</small>
                        </p>
                        {{ str_limit($question->body, 200) }}
                        
                    </div>
                   </div>
                   <hr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
