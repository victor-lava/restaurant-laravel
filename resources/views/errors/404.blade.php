@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <h1>Sorry, you are doomed (404)</h1>
        </div>
        <div class="col-md-12">
            <a href="{{ route('home') }}" class="btn btn-danger btn-lg">Return back</a>
        </div>
    </div>
</div>
@endsection
