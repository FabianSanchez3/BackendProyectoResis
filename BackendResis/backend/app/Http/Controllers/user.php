<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecoverPassword;
use App\Models\ACTIVIDAD;
use Illuminate\Support\Facades\DB;



class user extends Controller
{
    public function allusers(){
        return ACTIVIDAD::all();
    }



/*    public function users($id){
        $user = DB::table('Usuarios')
            ->where('id', $id)
            ->get();
        return response()->json($user, 201);
    }

    public function login(Request $request){
        $data = $request->json()->all();
        $email= $data['email'];
        $password = $data['password'];
        $login=DB::table('users')
        ->select('email','password')
        ->where('email', $email)
        ->where('password', $password)
        ->get();
        if ($login->isEmpty()) {
            return response()->json(["message" => "El correo o la contraseña son incorrectos."],204);
        } else {
            return response()->json($login,200);
        }
    }*/
}



