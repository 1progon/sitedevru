@extends('layouts.main-layout')

@section('main')
    <div class="container my-5">

        @if ( session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        Извините, у Вас Нет доступа в этот раздел!
    </div>
@endsection
