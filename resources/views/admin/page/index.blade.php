@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Все страницы</div>


        @if( session('status'))
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        @if( session('error'))
            <div class="card-body">
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
        @endif


        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Desc</th>
                <th scope="col">Article</th>
                <th scope="col">Link</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $pages as $page )


                <tr>
                    <th scope="row">{{ $page->id }}</th>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->description }}</td>
                    <td>{{ Str::limit($page->article, 50) }}</td>
                    <td>
                        <a target="_blank" href="{{ route('pages.show', $page) }}">🔗</a>
                    </td>
                    <td><a class="btn btn-warning btn-sm" href="{{ route('pages.edit', $page) }}">Edit</a></td>
                    <td>
                        <form id="delete-page"
                              action="{{ route('pages.destroy', $page) }}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>


            @empty
            @endforelse
            </tbody>
        </table>

        <div class="m-3">
            {{ $pages->links() }}
        </div>

    </div>
@endsection
