@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="d-flex align-items-center">
                        <h2>Edit Question</h2>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.index') }} " class="btn btn-outline-secondary">Back to questions</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h1>Create Form</h1>
                <form action="{{ route('questions.update', $question->id) }}" method="post">
                  <input type="hidden" name="_method" value="put">
                   @csrf
                    <div class="form-group">
                        <label for="">Question title</label>
                        <input type="text" name="title" id="" class="form-control" value="{{ $question->title }}">
                        @if( $errors->has('title') )
                            <div class="alert alert-danger">
                                <p>{{ $errors->first('title') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Question body</label>
                        <textarea name="body" id="" cols="30" rows="5" class="form-control"> {{ $question->body }}</textarea>
                        @if( $errors->has('body') )
                        <p>
                            <div class="alert alert-danger">
                                <p>{{ $errors->first('body') }}</p>
                            </div>
                        </p>
                        @endif 
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-info btn-lg" value="Update this question"> 
                    </div>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
