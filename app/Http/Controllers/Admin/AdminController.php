<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
    
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        
        if (!Auth::user()->is_admin) {
            abort(403, 'Bu alana erişim izniniz yok.');
        }

        return view('admin.dashboard');
    }

    public function getUsers(Request $request)
    {
        // Giriş kontrolü
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // Yetki kontrolü
        if (!Auth::user()->is_admin) {
            abort(403, 'Bu alana erişim izniniz yok.');
        }
        
        $query = User::query();

        // Örnek filtreler: isim ve email
        if ($request->filled('name')) {
            $query->where('name', 'like', '%'.$request->name.'%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%'.$request->email.'%');
        }

       
        $users = User::with('rank')->paginate(15)->withQueryString();
      dd    ($users);
        return view('admin.users', compact('users'));
    }
}
