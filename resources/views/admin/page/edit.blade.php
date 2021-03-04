@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">
            Редактировать страницу id:{{ $page->id }},
            <a target="_blank" href="{{ route('pages.show', $page) }}">открыть ↗️</a>
        </div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pages.update', $page ) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="_old_slug" id="" value="{{ $page->slug }}" required>
                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ $page->title }}"
                           required
                           minlength="3"
                           aria-describedby="helpId">
                </div>
                @error('title')
                <div class="alert alert-danger">
                    {{ old('title') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="slug" class="required">Slug</label>
                    <input type="text"
                           name="slug"
                           id="slug"
                           class="form-control"
                           placeholder="slug"
                           value="{{ $page->slug }}"
                           required
                           minlength="3"
                           aria-describedby="helpId">
                </div>
                @error('slug')
                <div class="alert alert-danger">
                    {{ old('slug') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-description">Meta description</label>
                    <input type="text"
                           name="meta_description"
                           id="meta-description"
                           class="form-control"
                           placeholder="meta description"
                           value="{{ $page->meta_description }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_description')
                <div class="alert alert-danger">
                    {{ old('meta_description') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="meta-keywords">Meta keywords</label>
                    <input type="text"
                           name="meta_keywords"
                           id="meta-keywords"
                           class="form-control"
                           placeholder="meta keywords"
                           value="{{ $page->meta_keywords }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ old('meta_keywords') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              required
                              id="description"
                              rows="4">{{ $page->description }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ old('description') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="article">Статья</label>
                    <textarea class="form-control tinymce"
                              name="article"
                              id="article"
                              rows="10">{{ $page->article }}</textarea>
                </div>
                @error('article')
                <div class="alert alert-danger">
                    {{ old('article') }}, {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Обновить</button>


            </form>
        </div>
    </div>
@endsection


@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
