@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Добавить страницу</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pages.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ old('title') }}"
                           minlength="3"
                           required
                           aria-describedby="helpId">
                </div>

                @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-description">Meta Description</label>
                    <input type="text" name="meta_description" id="meta-description" class="form-control"
                           value="{{ old('meta_description') }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-keywords">Meta Keywords</label>
                    <input type="text" name="meta_keywords" id="meta-keywords" class="form-control"
                           value="{{ old('meta_keywords') }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              id="description"
                              required
                              rows="4">{{ old('description') }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="article">Статья</label>
                    <textarea class="form-control tinymce"
                              name="article"
                              id="article"
                              rows="10">{{ old('article') }}</textarea>
                </div>
                @error('article')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
