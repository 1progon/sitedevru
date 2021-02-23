@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать шаблон id:{{ $template->id }},
            <a target="_blank" href="{{ route('templates.show', $template) }}">открыть</a>
        </div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('templates.update', $template ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           required
                           minlength="3"
                           value="{{ $template->title }}"
                           aria-describedby="helpId">
                </div>
                @error('title')
                <div class="alert alert-danger">
                    {{ old('title') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="slug" class="required">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           required
                           minlength="3"
                           value="{{ $template->slug }}"
                           aria-describedby="helpId">
                </div>
                @error('slug')
                <div class="alert alert-danger">
                    {{ old('slug') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="img">Img</label>
                    <input type="text" name="img" id="img" class="form-control"
                           placeholder="img"
                           value="{{ $template->img }}"
                           aria-describedby="helpId">
                </div>
                @error('img')
                <div class="alert alert-danger">
                    {{ old('img') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="img2">Img2</label>
                    <input type="text" name="img2" id="img2" class="form-control"
                           placeholder="img2"
                           value="{{ $template->img2 }}"
                           aria-describedby="helpId">
                </div>
                @error('img2')
                <div class="alert alert-danger">
                    {{ old('img2') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="meta-description">Meta description</label>
                    <input type="text" name="meta_description" id="meta-description" class="form-control"
                           placeholder="meta description"
                           value="{{ $template->meta_description }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_description')
                <div class="alert alert-danger">
                    {{ old('meta_description') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-keywords">Meta keywords</label>
                    <input type="text" name="meta_keywords" id="meta-keywords" class="form-control"
                           placeholder="meta keywords"
                           value="{{ $template->meta_keywords }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ old('meta_keywords') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="on-homepage" class="required">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage1" name="on_homepage"
                               value="1"
                               required
                               @if( $template->on_homepage == 1) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage2" name="on_homepage"
                               value="0"
                               required
                               @if( $template->on_homepage == 0) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>
                @error('on_homepage')
                <div class="alert alert-danger">
                    {{ old('on_homepage') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              required
                              minlength="3"
                              id="description" rows="4">{{ $template->description }}</textarea>
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
                              rows="10">{{ $template->article }}</textarea>
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
