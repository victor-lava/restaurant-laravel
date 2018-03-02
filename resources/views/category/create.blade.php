@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('categories.index') }}" class="btn btn-danger btn-lg">Back</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('categories.store') }}" method="POST" class="needs-validation">
                @csrf

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" name="title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
            </form>
        </div>

    </div>
</div>
@endsection
