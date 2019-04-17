@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="d-flex align-items-center">
                        <h2>All Question</h2>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.create') }} " class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('layouts._messages')
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
                    <div class="d-flex align-items-center">
                        <div class="ml-auto">
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-outline-info">Edit</a>
                        </div>
                    </div>
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
        {{ $questions->links() }}
    </div>
</div>
@endsection
