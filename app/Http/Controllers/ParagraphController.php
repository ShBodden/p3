<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ParagraphController extends Controller {

	public function getParagraphs(Request $request) {

		$numParagraphs = $request->input('paragraphs');
		
		$generator = new \Badcow\LoremIpsum\Generator();

		$paragraphs = $generator->getParagraphs($numParagraphs);

 		return view('generator')->with('paragraphs', $paragraphs);

	}

	public function postParagraphs(Request $request){

		//validate input
		$this->validate($request, [
			"paragraphs" => "required|numeric|min:1",
		]);

		$numParagraphs = $request->input('paragraphs');

		$generator = new \Badcow\LoremIpsum\Generator();

		$paragraphs = $generator->getParagraphs($numParagraphs);
	//echo implode('<p>', $paragraphs);
		return view('generator')->with('paragraphs', $paragraphs);
	}
}
?>
