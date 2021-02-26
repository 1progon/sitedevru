@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать портфолио id:{{ $portfolio->id }},
            <a target="_blank" href="{{ route('portfolio.show', $portfolio) }}">открыть</a>
        </div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('portfolio.update', $portfolio ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="_old_slug" id="" value="{{ $portfolio->slug }}">

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ $portfolio->title }}"
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
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           value="{{ $portfolio->slug }}"
                           required
                           aria-describedby="helpId">
                </div>
                @error('slug')
                <div class="alert alert-danger">
                    {{ old('slug') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group list-group-item rounded">
                    <label for="on-homepage" class="required">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage1"
                               name="on_homepage"
                               value="1"
                               @if( $portfolio->on_homepage === 1) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage2"
                               name="on_homepage"
                               value="0"
                               @if( $portfolio->on_homepage === 0) checked @endif
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
                    <label for="meta-description">Meta description</label>
                    <input type="text" name="meta_description" id="meta-description" class="form-control"
                           placeholder="meta description"
                           value="{{ $portfolio->meta_description }}"
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
                           value="{{ $portfolio->meta_keywords }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ old('meta_keywords') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    @if( $portfolio->img )
                        <a data-fancybox="gallery" href="{{ asset('storage/' . $portfolio->img) }}">
                            <img src="{{ asset('storage/' . $portfolio->img) }}" alt="image" width="100"
                                 height="100">
                        </a>
                        <label for="img">Удалить</label>
                        <input type="checkbox" name="img" id="img" value="1">
                    @else
                        <input type="file" class="form-control-file" name="image1" id="" placeholder=""
                               aria-describedby="fileHelpId">
                    @endif
                </div>
                @error('img')
                <div class="alert alert-danger">
                    {{ old('img') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    @if( $portfolio->img2 )
                        <a href="#">
                            <img src="{{ asset('storage/' . $portfolio->img2) }}" alt="image" width="100"
                                 height="100">
                        </a>
                        <label for="img2">Удалить</label>
                        <input type="checkbox" name="img2" id="img2" value="1">
                    @else
                        <input type="file" class="form-control-file" name="image2" placeholder=""
                               aria-describedby="fileHelpId">
                    @endif
                </div>
                @error('img2')
                <div class="alert alert-danger">
                    {{ old('img2') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    @if( $portfolio->img3 )
                        <a href="#">
                            <img src="{{ asset('storage/' . $portfolio->img3) }}" alt="image" width="100"
                                 height="100">
                        </a>
                        <label for="img3">Удалить</label>
                        <input type="checkbox" name="img3" id="img3" value="1">
                    @else
                        <input type="file" class="form-control-file" name="image3" placeholder=""
                               aria-describedby="fileHelpId">
                    @endif
                </div>
                @error('img3')
                <div class="alert alert-danger">
                    {{ old('img3') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              required
                              minlength="3"
                              id="description" rows="4">{{ $portfolio->description }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ old('description') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="article">Описание</label>
                    <textarea class="form-control tinymce"
                              name="article"
                              minlength="3"
                              id="article" rows="10">{{ $portfolio->article }}</textarea>
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
