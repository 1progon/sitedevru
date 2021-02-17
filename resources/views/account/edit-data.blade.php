@extends('layouts.account-layout')

@section('main')
    <div class="card">
        <div class="card-header">Изменить данные пользователя</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{ route('account.update.data') }}" method="post">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label class="required"> - Поле обязательно для заполнения!</label>
                </div>

                <div class="form-group">
                    <label for="login" class="required">Логин</label>
                    <input type="text"
                           name="login"
                           id="login"
                           class="form-control"
                           value="{{ $user->login }}"
                           required>
                </div>
                @error('login')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input type="text"
                           name="first_name"
                           id="first_name"
                           class="form-control"
                           value="{{ $user->first_name }}">
                </div>
                @error('first_name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="last-name">Фамилия</label>
                    <input type="text"
                           name="last_name"
                           id="last-name"
                           class="form-control"
                           value="{{ $user->last_name }}">
                </div>
                @error('last_name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="patronymic-name">Отчество</label>
                    <input type="text"
                           name="patronymic_name"
                           id="patronymic-name"
                           class="form-control"
                           value="{{ $user->patronymic_name }}">
                </div>
                @error('patronymic_name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
@endsection
