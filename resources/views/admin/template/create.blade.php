@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Добавить шаблон</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('templates.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Заголовок</label>
                    <input type="text" name="name" id="name" class="form-control"
                           placeholder="Заголовок"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           aria-describedby="helpId">
                </div>


                {{--                TODO Add to DB migrate fields for meta titles--}}
                {{--                <div class="form-group">--}}
                {{--                    <label for="meta_description">meta_description</label>--}}
                {{--                    <input type="text" name="meta_description" id="meta_description" class="form-control"--}}
                {{--                           placeholder="meta_description"--}}
                {{--                           aria-describedby="helpId">--}}
                {{--                </div>--}}
                {{--                <div class="form-group">--}}
                {{--                    <label for="meta_keywords">meta_keywords</label>--}}
                {{--                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"--}}
                {{--                           placeholder="meta_keywords"--}}
                {{--                           aria-describedby="helpId">--}}
                {{--                </div>--}}

                <div class="form-group">
                    <label for="ewfefe">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage1" name="on_homepage"
                               value="1"
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage2" name="on_homepage"
                               value="0"
                               checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>


                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="article">Статья</label>
                    <textarea class="form-control" name="article" id="article" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection