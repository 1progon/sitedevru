@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header d-flex flex-wrap align-items-baseline">
            <span class="mr-2">Все цены</span>
            <form name="search_form" method="get">
                <label>
                    <input class="form-control"
                           type="text"
                           name="s_by_title"
                           id="s-by-title"
                           placeholder="id, заголовок, slug"
                           value="{{ $search }}">
                </label>
                <input type="submit" class="btn btn-success" value="Найти">
            </form>

            <script>
                let {search_form: form} = document.forms;
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    if (form.elements.s_by_title.value === '') {
                        form.elements.s_by_title.disabled = 'disabled';
                        return location.href = location.href.split('?')[0];
                    }
                    form.submit();

                })
            </script>

            <span class="ml-2">
                <a class="btn header-btn" href="{{ route('prices.create') }}">Добавить цену</a>
            </span>

        </div>


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
                <th scope="col">Slug</th>
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
                    <td>{{ $price->slug }}</td>
                    <td>{{ $price->on_homepage === 1 ? '✅' : '' }}</td>
                    <td>{{ Str::limit($price->description, 50) }}</td>
                    <td>{{ $price->price }}</td>


                    <td>
                        @if( $price->img)
                            <a data-fancybox="gallery" href="{{ asset('storage/' . $price->img) }}">
                                <img src="{{ asset('storage/' . $price->img) }}" width="80" height="80"
                                     alt="">
                            </a>

                        @endif
                    </td>

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
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
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
