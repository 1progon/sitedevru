@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Аккаунт администратора</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            Вы вошли в систему!
        </div>
    </div>
@endsection
