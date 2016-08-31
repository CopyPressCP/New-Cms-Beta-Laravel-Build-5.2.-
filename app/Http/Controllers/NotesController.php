<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use App\Card;

class NotesController extends Controller
{
	public function store(Request $request, Card $card)
	{
		//return $request->all();
		//return $card;


		/*
		There are three ways to make this happen. The first way is to create a new note object, then set the 
		*/

		/*
		The first way is to create a new note object, then set the note->body to the request object's note body that was
		passed in ($request->body). Then, you call the notes function on the card object 
		(passed into this store function as a parameter), and Eloquently saving the $note object's body as a 
		note of the card object.
		*/
		// $note = new Note;
		// $note->body = $request->body;
		// $card->notes()->save($note);


		/*
		The next way is to make a new note object, but then pass in the array's key ('body') and set the value of this key
		to the body of the request variable ($request->body). Then do the same as above: Eloquently saving the $note 
		object's body as a note of the card object.
		*/
		// $note = new Note(['body' => $request->body]);
		// $card->notes()->save($note);

		$card->notes()->create([
			'body' => $request->body
		]);



		return back();
	}
}
