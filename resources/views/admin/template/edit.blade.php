@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать шаблон</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pages.update', $page ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ $page->title }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           value="{{ $page->slug }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="meta_description">meta_description</label>
                    <input type="text" name="meta_description" id="meta_description" class="form-control"
                           placeholder="meta_description"
                           value="{{ $page->meta_description }}"
                           aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">meta_keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                           placeholder="meta_keywords"
                           value="{{ $page->meta_keywords }}"
                           aria-describedby="helpId">
                </div>


                <div class="form-group">
                    <label for="">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              id="description" rows="4">{{ $page->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="article">Статья</label>
                    <textarea class="form-control"
                              name="article"
                              id="article"
                              rows="10">{{ $page->article }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection
