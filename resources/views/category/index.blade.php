@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('categories.create') }}" class="btn btn-success btn-block">Create</a>
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col"># ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Created</th>
                  <th scope="col">Updated</th>
                  <th scope="col">Products</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($categories as $category)

                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>
                      <a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a>
                  </td>
                  <td>{{ $category->created_at }}</td>
                  <td>{{ $category->updated_at }}</td>
                  <td>{{ $category->products() }}</td>
                  <td>
                      <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-sm">Edit</a>
                      <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type='submit' class="btn btn-danger btn-sm mt-1">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
