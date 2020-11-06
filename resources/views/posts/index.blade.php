@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-success" href="{{ route('posts.create') }}">Add Post</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
{{--                @foreach($categories as $category)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $category->name }}</td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>--}}
{{--                            <button class="btn btn-danger btn-sm" onclick="handleCategoryDelete({{ $category->id }})">Delete</button>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
