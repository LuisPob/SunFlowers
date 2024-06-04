<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Notifications\DeleteAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Notifications\Notifiable;



class UserProfileController extends Controller
{
    use Notifiable;
    public function show()
    {
        $company = Company::findOrFail(1);
        return view('pages.user-profile', compact('company'));
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }

    public function delete(Request $request)
    {
        $user = Auth::user();
        $user->notify(new DeleteAccount());

        
        if ($user) {
            
            $user->forceDelete();
            
            Auth::logout();

            return redirect()->route('login')->with('success', '¡Tu cuenta sera eliminada en 60 minutos!');
        } else {
            return redirect()->route('login')->with('error', 'No se pudo eliminar la cuenta. Por favor, inténtalo de nuevo.');
        }
    }
}
