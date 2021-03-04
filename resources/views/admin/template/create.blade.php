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
            <form action="{{ route('templates.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           required
                           minlength="3"
                           value="{{ old('title') }}"
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
                    <label for="url">URL шаблона</label>
                    <input type="text" name="url"
                           id="url" class="form-control"
                           value="{{ old('url') }}"
                           aria-describedby="helpId">
                </div>
                @error('url')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="url-original-link">URL оригинал сайт где взят шаблон</label>
                    <input type="text"
                           name="url_original_link"
                           id="url-original-link"
                           class="form-control"
                           value="{{ old('url_original_link') }}"
                           aria-describedby="helpId">
                </div>
                @error('url_original_link')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-description">Meta description</label>
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
                    <label for="meta-keywords">Meta keywords</label>
                    <input type="text" name="meta_keywords" id="meta-keywords" class="form-control"
                           value="{{ old('meta_keywords') }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group list-group-item rounded">
                    <label for="on-homepage" class="required">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage1" name="on_homepage"
                               value="1"
                               required
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage2" name="on_homepage"
                               value="0"
                               checked
                               required
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>
                @error('on_homepage')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <input type="file" class="form-control-file" name="img" id="img" placeholder=""
                           aria-describedby="fileHelpId">


                    <div id="image1" class="my-1">
                        <span id="file"></span>
                        <span id="size"></span>
                        <span id="type"></span>
                        <span id="filename"></span>
                    </div>
                    <script>
                        let input = document.getElementById('img');
                        input.addEventListener('change', (e) => {
                            console.log(input.files[0])
                            let file = input.files[0];

                            document.querySelector('#image1 #size')
                                .innerHTML = 'Size: ' + Math.floor(file.size / 1000) + ' kb.';

                            document.querySelector('#image1 #type')
                                .innerHTML = 'Type: ' + file.type;

                            document.querySelector('#image1 #filename')
                                .innerHTML = 'Name: ' + file.name;

                            document.querySelector('#image1 #file')
                                .innerHTML = '<img src="' + window.URL.createObjectURL(file) + '" alt="" width="200"/>';
                        })
                    </script>
                </div>
                @error('img')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <input type="file" class="form-control-file" name="img2" id="img2" placeholder=""
                           aria-describedby="fileHelpId">

                    <div id="image2" class="my-1">
                        <span id="file2"></span>
                        <span id="size2"></span>
                        <span id="type2"></span>
                        <span id="filename2"></span>
                    </div>
                    <script>
                        let input2 = document.getElementById('img2');
                        input2.addEventListener('change', (e) => {
                            console.log(input2.files[0])
                            let file = input2.files[0];

                            document.querySelector('#image2 #size2')
                                .innerHTML = 'Size: ' + Math.floor(file.size / 1000) + ' kb.';

                            document.querySelector('#image2 #type2')
                                .innerHTML = 'Type: ' + file.type;

                            document.querySelector('#image2 #filename2')
                                .innerHTML = 'Name: ' + file.name;

                            document.querySelector('#image2 #file2')
                                .innerHTML = '<img src="' + window.URL.createObjectURL(file) + '" alt="" width="200"/>';
                        })


                    </script>
                </div>
                @error('img2')
                <div class="alert alert-danger">
                    {{ $message }}
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
                        <input type="text"
                               name="cms"
                               id="cms"
                               class="form-control"
                               value="{{ old('cms') }}"
                               required
                               aria-describedby="helpId">
                    </div>
                    @error('cms')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror


                    <div class="form-group">
                        <label for="framework">Framework</label>
                        <input type="text" name="framework" id="framework" class="form-control"
                               value="{{ old('framework') }}"
                               aria-describedby="helpId">
                    </div>
                    @error('framework')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="backend">Backend</label>
                        <input type="text" name="backend" id="backend" class="form-control"
                               value="{{ old('backend') }}"
                               aria-describedby="helpId">
                    </div>
                    @error('backend')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="frontend">Frontend</label>
                        <input type="text" name="frontend" id="frontend" class="form-control"
                               value="{{ old('frontend') }}"
                               aria-describedby="helpId">
                    </div>
                    @error('frontend')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="established">Дата создания</label>
                        <input type="text" name="established" id="established" class="form-control"
                               value="{{ old('established') }}"
                               aria-describedby="helpId">
                    </div>
                    @error('established')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="site-type">Тип сайта</label>
                        <input type="text" name="site_type" id="site-type" class="form-control"
                               value="{{ old('site_type') }}"
                               aria-describedby="helpId">
                    </div>
                    @error('site_type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="additional-info">Доп инфо</label>
                        <textarea class="form-control" name="additional_info" id="additional-info" cols="30"
                                  rows="4"></textarea>
                    </div>
                    @error('additional_info')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror</div>


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
    <script>
        $('#auto-cms').click(function () {
            $('#cms').val('Без CMS');
        });
    </script>
    @include('include.tinymce.tinymce-scripts')
@endsection
