<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;  
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validation for customer or employee registration
        $rules = $this->getRegistrationRules($request->role);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create the user based on the selected role
        if ($request->role == 'customer') {
            $user = User::create([
                'name' => $request->Cus_Name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'customer',
                'cus_nic' => $request->Cus_NIC,
                'cus_tp' => $request->Cus_TP,
            ]);
        } else {
            $user = User::create([
                'name' => $request->Em_Name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'employee',
                'em_id' => $request->Em_ID,
                'em_nic' => $request->Em_NIC,
                'em_tp' => $request->Em_TP,
                'position' => $request->Position,
                'station_name' => $request->Station_Name,
                'dob' => $request->DOB,
                'age' => $request->age,
            ]);
        }

        // Redirect the user after successful registration
        return redirect()->route('login')->with('status', 'Registration successful!');
    }

    private function getRegistrationRules($role)
    {
        if ($role == 'customer') {
            return [
                'Cus_NIC' => 'required|unique:users,Cus_NIC',
                'Cus_Name' => 'required',
                'Cus_TP' => 'required|numeric',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
                'role' => 'required|in:customer',
            ];
        } else {
            return [
                'Em_ID' => 'required|unique:users,Em_ID',
                'Em_NIC' => 'required|unique:users,Em_NIC',
                'Em_Name' => 'required',
                'Em_TP' => 'required|numeric',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
                'position' => 'required',
                'station_name' => 'required',
                'dob' => 'required|date',
                'age' => 'required|numeric',
                'role' => 'required|in:employee',
            ];
        }
    }
}
