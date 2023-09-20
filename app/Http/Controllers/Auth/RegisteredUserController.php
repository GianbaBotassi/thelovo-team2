<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        $request->validate(
            $this->getValidations(),
            $this->getValidationMessages()
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function getValidations()
    {
        // Definizione delle regole di validazione per i dati del piatto
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    private function getValidationMessages()
    {
        // Definizione dei messaggi di errore personalizzati per le regole di validazione
        return [
            'name.string' => 'Inserire il nome nel giusto formato',
            'name.max' => 'Il nome inserito è troppo lungo',
            'email.required' => 'Email è richiesta',
            'email.unique' => 'Questa email risulta già registrata',
            'email.email' => 'Inserisci una email valida',
            'password.required' => 'La password è richiesta',
            'password.confirmed' => 'La conferma della password non è corretta',
        ];
    }


}
