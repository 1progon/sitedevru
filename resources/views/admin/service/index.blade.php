@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Все услуги</div>


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


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $services as $service )


                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->title }}</td>
                    <td><a target="_blank" href="{{ route('services.show', $service) }}">Открыть</a></td>
                    <td><a class="btn btn-warning btn-sm" href="{{ route('services.edit', $service) }}">Edit</a></td>
                    <td>
                        <form id="delete-page"
                              action="{{ route('services.destroy', $service) }}"
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

        {{ $services->links() }}
    </div>
@endsection
