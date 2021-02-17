<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardAccountController extends Controller
{
    public function index(): View
    {
        return view('account.dashboard');
    }

    public function editData(): View
    {
        $user = Auth::user();
        return view('account.edit-data', compact('user'));
    }

    public function updateData(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'login' => 'required|alpha',
                'first_name' => 'sometimes|nullable|alpha',
                'last_name' => 'sometimes|nullable|alpha',
                'patronymic_name' => 'sometimes|nullable|alpha',
            ]
        );


        $user = Auth::user();
        $user->fill($validated);
        $user->save();

        return redirect()->route('dashboard.user')->with('status', 'Данные изменёны');
    }

    public function editPassword(): View
    {
        return view('account.edit-password');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'old_password' => 'required|password|min:5',
                'password' => 'required|min:5|confirmed',
                'password_confirmation' => 'required|min:5',
            ]
        );

        $user = Auth::user();
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->route('dashboard.user')->with('status', 'Пароль изменён');
    }

    public function editEmail(): View
    {
        return view('account.edit-email');
    }

    public function updateEmail(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'old_email' => 'required|email|exists:users,email',
                'email' => 'required|email|confirmed',
                'email_confirmation' => 'required|email',
            ]
        );


        $user = Auth::user();

        if ($user->email !== $validated['old_email']) {
            return redirect()
                ->route('dashboard.user')
                ->with(
                    'error',
                    'Ошибка, старый адрес возможно не совпадает с Вашим'
                );
        }


        $user->email = $validated['email'];
        $user->save();

        return redirect()->route('dashboard.user')->with('status', 'Почта изменёна');
    }
}
