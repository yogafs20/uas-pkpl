<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
	public function role(Request $data){
		$role = $data->role_akun;
		$nama = $data->nama;

		switch ($role) {
			case 'admin':
			echo "Selamat datang " . $nama;
			break;
			case 'karyawan' :
			echo "Selamat datang " . $nama;
			break;
			default:
			echo "Akun tidak ditemukan";
			break;
		}

	}
}

