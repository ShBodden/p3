<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class WelcomeController extends Controller {

//Returns welcome page
	public function getwelcome() {
		 		return view('welcome');
	}

}
?>
