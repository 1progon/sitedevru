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
                    <label for="meta-description">Meta description</label>
                    <input type="text" name="meta_description" id="meta-description" class="form-control"
                           placeholder="meta description"
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
                           placeholder="meta keywords"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
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
                    <div class="custom-file">
                        <input type="file"
                               name="img"
                               class="custom-file-input"
                               id="img"
                               value="Выбрать">
                        <label class="custom-file-label" for="img">Выбрать файл</label>
                    </div>

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
                    <div class="custom-file">
                        <input type="file"
                               name="img2"
                               class="custom-file-input"
                               id="img2"
                               value="Выбрать">
                        <label class="custom-file-label" for="img2">Выбрать файл2</label>
                    </div>

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


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              id="description"
                              required
                              rows="4"></textarea>
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
                              rows="10"></textarea>
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
