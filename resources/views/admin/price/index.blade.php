@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Все цены</div>


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
                <th scope="col">Homepage</th>
                <th scope="col">Desc</th>
                <th scope="col">Price</th>
                <th scope="col">Img</th>
                <th scope="col">Link</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $prices as $price )

                <tr>
                    <th scope="row">{{ $price->id }}</th>
                    <td>{{ $price->title }}</td>
                    <td>{{ $price->on_homepage === 1 ? '✅' : '' }}</td>
                    <td>{{ $price->description }}</td>
                    <td>{{ $price->price }}</td>
                    <td>{{ $price->img }}</td>
                    <td>
                        <a target="_blank" href="{{ route('prices.show', $price) }}">🔗</a>
                    </td>
                    <td><a class="btn btn-warning btn-sm" href="{{ route('prices.edit', $price) }}">Edit</a></td>
                    <td>
                        <form id="delete-page"
                              action="{{ route('prices.destroy', $price) }}"
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
            {{ $prices->links() }}
        </div>
    </div>
@endsection
