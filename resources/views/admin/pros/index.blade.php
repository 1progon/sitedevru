@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header d-flex flex-wrap">
            <span class="mr-2">Все плюсы</span>
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
                <th scope="col">Img</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse( $proses as $pros )


                <tr>
                    <th scope="row">{{ $pros->id }}</th>
                    <td>{{ $pros->title }}</td>
                    <td>{{ Str::limit($pros->description, 50) }}</td>

                    <td>
                        @if( $pros->img )
                            <img src="{{ asset('storage/' . $pros->img) }}" width="80" height="80"
                                 alt="">
                        @endif
                    </td>


                    <td><a class="btn btn-warning btn-sm" href="{{ route('our-pros.edit', $pros) }}">Edit</a>
                    </td>
                    <td>
                        <form id="delete-page"
                              action="{{ route('our-pros.destroy', $pros) }}"
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
            {{ $proses->links() }}
        </div>
    </div>
@endsection
