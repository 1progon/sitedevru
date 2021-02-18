@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header d-flex flex-wrap">
            <span class="mr-2">Все услуги</span>
            <form name="search_form" method="get">
                <label>
                    <input type="text"
                           name="s_by_title"
                           id="s-by-title"
                           placeholder="id, заголовок, slug"
                           value="{{ $search }}">
                </label>
                <input type="submit" class="btn-success" value="Найти">
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
                <th scope="col">Desc</th>
                <th scope="col">Img</th>
                <th scope="col">Img2</th>
                <th scope="col">Homepage</th>
                <th scope="col">Link</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $services as $service )


                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->slug }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td>
                    <td><img src="{{ $service->img }}" alt="" width="80" height="80"></td>
                    <td><img src="{{ $service->img2 }}" alt="" width="80" height="80"></td>
                    <td>{{ $service->on_homepage === 1 ? '✅' : '' }}</td>
                    <td>
                        <a target="_blank" href="{{ route('services.show', $service) }}">🔗</a>
                    </td>
                    <td><a class="btn btn-warning btn-sm" href="{{ route('services.edit', $service) }}">Edit</a>
                    </td>
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

        <div class="m-3">
            {{ $services->links() }}
        </div>
    </div>
@endsection
