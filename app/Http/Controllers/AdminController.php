<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;


class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('login'); // Vue pour l'interface d'administration
    }


    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('login');
    }

    // Gère la tentative de connexion
    public function login(Request $request)
    {
        // Valider les champs saisis
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Vérifier les informations d'identification
        if (Auth::attempt($credentials)) {
            // Auth::attempt va vérifier automatiquement que le mot de passe haché est correct
            $request->session()->regenerate();

            return redirect()->intended('/'); // Redirige vers la page souhaitée
        }

        // Si les informations ne sont pas correctes
        return back()->withErrors([
            'email' => 'Les informations fournies ne sont pas correctes.',
        ])->onlyInput('email');
    }

    // Gère la déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
