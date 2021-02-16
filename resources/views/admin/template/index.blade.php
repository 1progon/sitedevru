@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Все шаблоны</div>


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
                <th scope="col">Name</th>
                <th scope="col">On Homepage</th>
                <th scope="col">Img 1</th>
                <th scope="col">Img 2</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $templates as $template )
                <tr>
                    <th scope="row">{{ $template->id }}</th>
                    <td>{{ $template->title }}</td>
                    <td>{{ $template->on_homepage }}</td>

                    <td><img src="{{ asset($template->img) }}" width="100" height="100"
                             alt=""></td>

                    <td><img src="{{ asset($template->img2) }}" width="100" height="100"
                             alt=""></td>


                    <td><a target="_blank" href="{{ route('templates.show', $template) }}">Открыть</a></td>
                    <td><a class="btn btn-warning btn-sm" href="{{ route('templates.edit', $template) }}">Edit</a></td>
                    <td>
                        <form id="delete-template"
                              action="{{ route('templates.destroy', $template) }}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>


            @empty
                <div class="alert alert-warning m-2">
                    Нет шаблонов
                </div>

            @endforelse
            </tbody>
        </table>

        <div class="m-3">
            {{ $templates->links() }}
        </div>
    </div>
@endsection
