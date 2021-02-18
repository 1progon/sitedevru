@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header d-flex flex-wrap">
            <span class="mr-2">Все шаблоны</span>
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
                <th scope="col">Desc</th>
                <th scope="col">Article</th>
                <th scope="col">Homepage</th>
                <th scope="col">Img 1</th>
                <th scope="col">Img 2</th>
                <th scope="col">Link</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $templates as $template )
                <tr>
                    <th scope="row">{{ $template->id }}</th>
                    <td>{{ $template->title }}</td>
                    <td>{{ $template->description }}</td>
                    <td>{{ Str::limit($template->article, 50) }}</td>
                    <td>{{ $template->on_homepage === 1 ? '✅' : '' }}</td>

                    <td><img src="{{ asset($template->img) }}" width="80" height="80"
                             alt=""></td>

                    <td><img src="{{ asset($template->img2) }}" width="80" height="80"
                             alt=""></td>


                    <td><a target="_blank" href="{{ route('templates.show', $template) }}">🔗</a></td>
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
