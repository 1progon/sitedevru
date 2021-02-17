@extends('layouts.account-layout')

@section('main')
    <div class="card">
        <div class="card-header">Аккаунт пользователя</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ( session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            Вы в системе!
        </div>
    </div>
@endsection
