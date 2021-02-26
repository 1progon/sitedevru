@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Все пользователи</div>


        @if( session('status'))
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        @if( session('error'))
            <div class="card-body">
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
        @endif


        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Login</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Patronymic Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Active</th>

            </tr>
            </thead>
            <tbody>
            @forelse( $users as $user )


                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->patronymic_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ array_search($user->role, \App\Model\User\User::ROLE) }}</td>
                    <td>{{ $user->active ? '🟢' : '🔴' }}</td>

                </tr>


            @empty
            @endforelse
            </tbody>
        </table>

        <div class="m-3">
            {{ $users->links() }}
        </div>

    </div>
@endsection
