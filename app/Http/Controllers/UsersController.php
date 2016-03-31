<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UsersController extends Controller {



  public function getUsers(Request $request) {
      $data = [];
      return view('users')->with('data', $data);
	}


	public function postUsers(Request $request){

    $this->validate($request, [
        'users' => 'required|numeric|min:1|max:25|',
    ]);

    //Create array to store final data
    $data = [];

    $faker = \Faker\Factory::create();


    //Link the requested amount of users to for loop
    $numberofusers = $request->input('users');


      for ($i=0; $i < $numberofusers; $i++) {

        $eachUser =[];

           $eachUser["name"] = $faker->name;
           $eachUser["phone"] = $faker->phonenumber;
           $eachUser["email"] = $faker->email;
           $eachUser["profile"] = $faker->text;

           //Combine both arrays with final data
           array_push($data, $eachUser);

    }

return view('users')->with('data', $data);

	}

}
?>
