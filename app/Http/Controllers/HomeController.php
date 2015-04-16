<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use Twitter;
use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$twitter = $this->getTweets();
		return view('home',compact('twitter'));
	}

	public function goats()
	{
		return view('goat');
	}

	public function contact()
	{
		return view('contact');
	}

	public function getTweets()
	{
		$twitter = json_decode(Twitter::getUserTimeline(['screen_name' => 'ChristChurchCE', 'count' => 4, 'format' => 'json']));
		foreach($twitter as $tweet) {
			$tweet->ago = new Carbon($tweet->created_at);
		}
		return $twitter;
	}

}
