<div class="">

    <div class="card">
        <div class="card-header">
            Меню пользователя
        </div>
        <div class="list-group">

            @php
                $route = Route::currentRouteName();
            @endphp

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Пользователь</div>

                <a href="{{ route('account.edit.data') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.data') active @endif"
                   aria-current="true">Изменить данные</a>

                <a href="{{ route('account.edit.password') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.password') active @endif"
                   aria-current="true">Изменить пароль</a>

                <a href="{{ route('account.edit.email') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.email') active @endif"
                   aria-current="true">Изменить почту</a>


            </div>


        </div>
    </div>
</div>
