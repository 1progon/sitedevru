@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать шаблон id:{{ $template->id }},
            <a target="_blank" href="{{ route('templates.show', $template) }}">открыть ↗️</a>
        </div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('templates.update', $template ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="_old_slug" value="{{ $template->slug }}" required>
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
                    <label for="url">URL шаблона</label>
                    <input type="text" name="url"
                           id="url" class="form-control"
                           value="{{ $template->url ?? old('url') }}"
                           aria-describedby="helpId">
                </div>
                @error('url')
                <div class="alert alert-danger">
                    {{ old('url') }}, {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="url-original-link">URL оригинала где взят шаблон</label>
                    <a target="_blank" rel="nofollow noopener" href="{{ $template->url_original_link
                    }}">↗️ Открыть оригинал ↗️</a>
                    <input type="text"
                           name="url_original_link"
                           id="url-original-link"
                           class="form-control"
                           value="{{ $template->url_original_link ?? old('url_original_link') }}"
                           aria-describedby="helpId">
                </div>
                @error('url_original_link')
                <div class="alert alert-danger">
                    {{ old('url_original_link') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    @if( $template->img )
                        <a href="#">
                            <img src="{{ asset('storage/' . $template->img) }}" alt="image" width="100"
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
                    @if( $template->img2 )
                        <a href="#">
                            <img src="{{ asset('storage/' . $template->img2) }}" alt="image" width="100"
                                 height="100">
                        </a>
                        <label for="img2">Удалить</label>
                        <input type="checkbox" name="img2" id="img2" value="1">
                    @else
                        <input type="file" class="form-control-file" name="image2" id="" placeholder=""
                               aria-describedby="fileHelpId">
                    @endif
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

                <div class="form-group list-group-item rounded">
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


                {{--Site details--}}
                <div class="form-group bg-light p-3">
                    <h3>Детали сайта</h3>
                    <div class="form-group">
                        <label for="cms" class="required">CMS</label>
                        <a href="javascript:void(0)"
                           class="badge badge-info"
                           id="auto-cms">Подставить "Без CMS"</a>
                        <input type="text" name="cms" id="cms" class="form-control"
                               value="{{ $template->cms }}"
                               required
                               aria-describedby="helpId">
                    </div>
                    @error('cms')
                    <div class="alert alert-danger">
                        {{ old('cms') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="framework">Framework</label>
                        <input type="text" name="framework" id="framework" class="form-control"
                               value="{{ $template->framework }}"
                               aria-describedby="helpId">
                    </div>
                    @error('framework')
                    <div class="alert alert-danger">
                        {{ old('framework') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="backend">Backend</label>
                        <input type="text" name="backend" id="backend" class="form-control"
                               value="{{ $template->backend }}"
                               aria-describedby="helpId">
                    </div>
                    @error('backend')
                    <div class="alert alert-danger">
                        {{ old('backend') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="frontend">Frontend</label>
                        <input type="text" name="frontend" id="frontend" class="form-control"
                               value="{{ $template->frontend }}"
                               aria-describedby="helpId">
                    </div>
                    @error('frontend')
                    <div class="alert alert-danger">
                        {{ old('frontend') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="established">Дата создания</label>
                        <input type="text" name="established" id="established" class="form-control"
                               value="{{ $template->established }}"
                               aria-describedby="helpId">
                    </div>
                    @error('established')
                    <div class="alert alert-danger">
                        {{ old('established') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="site-type">Тип сайта</label>
                        <input type="text" name="site_type" id="site-type" class="form-control"
                               value="{{ $template->site_type }}"
                               aria-describedby="helpId">
                    </div>
                    @error('site_type')
                    <div class="alert alert-danger">
                        {{ old('site_type') }}, {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="additional-info">Доп инфо</label>
                        <textarea class="form-control"
                                  name="additional_info"
                                  id="additional-info"
                                  cols="30"
                                  rows="4">{{ $template->additional_info }}</textarea>
                    </div>
                    @error('additional_info')
                    <div class="alert alert-danger">
                        {{ old('additional_info') }}, {{ $message }}
                    </div>
                    @enderror</div>


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              required
                              minlength="3"
                              id="description"
                              rows="4">{{ $template->description }}</textarea>
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
    <script>
        $('#auto-cms').click(function () {
            $('#cms').val('Без CMS');
        });
    </script>
    @include('include.tinymce.tinymce-scripts')
@endsection
