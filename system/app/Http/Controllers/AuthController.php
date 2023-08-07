<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Str;
use Auth;
use App\Models\User;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;

class AuthController extends Controller
{
	public function Login()
	{

		return view('login');
	}

	public function LoginProses()
	{
		if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {

			return redirect('super-admin');
		}

		if (auth()->guard('pegawai')->attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('admin-pegawai');
		}
		return redirect('login');
	}

	public function Logout()
	{
		auth()->logout();
		auth()->guard('pegawai')->logout();
		return redirect('/');
	}

	function test()
	{
		$user = new user;
		$user->nama = 'Super Admin';
		$user->username = 'admin';
		$user->password = bcrypt('admin');
		$user->save();

		return "Berhasil";
	}
}
