@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <div class="d-flex align-items-center">
                        <h2>Ask Question</h2>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.index') }} " class="btn btn-outline-secondary">Back to questions</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h1>Create Form</h1>
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Ask"> 
                    </div>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
