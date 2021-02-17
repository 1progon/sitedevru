@extends('layouts.account-layout')

@section('main')
    <div class="card">
        <div class="card-header">Изменить пароль</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{ route('account.update.password') }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="required"> - Поле обязательно для заполнения!</label>
                </div>

                <div class="form-group">
                    <label for="password" class="required">Старый пароль</label>
                    <input type="password"
                           name="old_password"
                           id="password"
                           class="form-control"
                           required
                           minlength="5">
                </div>
                @error('old_password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="password" class="required">Новый пароль</label>
                    <input type="password"
                           name="password"
                           id="password"
                           class="form-control"
                           required
                           minlength="5">
                </div>
                @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="password-confirmation" class="required">Повторить новый пароль</label>
                    <input type="password"
                           name="password_confirmation"
                           id="password-confirmation"
                           class="form-control"
                           required
                           minlength="5">
                </div>
                @error('password_confirmation')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
@endsection
