@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">
                    {{ $category->title }}
                </h2>

                <a href="{{ route('categories.edit', $category->id) }}"
                    class="btn btn-success">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="btn btn-danger">Delete</button>
                </form>
              </div>
            </div>
        </div>

    </div>
</div>
@endsection
