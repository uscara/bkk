<?php 
namespace App\Http\Controllers;

use Request;
use Validator;
use Auth;
use Redirect;

use App\Models\User;
use App\Models\Attractions;

class AdminAttractionsController extends Controller {
	
	// ----------------------------------------Image Posts----------------------------------------
	public function attractions(){
		$attractions = Attractions::orderBy('created_at', 'DESC')->paginate(20);

		return view("admin.attractions", array(
				"attractions" => $attractions
			));
	}

	public function newAttraction(){
		return view("admin.attractions-new");
	}

	public function createAttraction(){
		$validator = Validator::make(Request::all(), Attractions::save_rules(), Attractions::$custom_messages);
		
		if ($validator->passes()) {
			$attraction = new Attractions;
			$attraction->author()->associate(Auth::user());
			$attraction->title_thai = trim(Request::input("title_thai"));
			$attraction->title_english = trim(Request::input("title_english"));
			$attraction->title_japan = trim(Request::input("title_japan"));
			$attraction->title_china = trim(Request::input("title_china"));
			$attraction->description_thai = trim(Request::input("description_thai"));
			$attraction->description_english = trim(Request::input("description_english"));
			$attraction->description_japan = trim(Request::input("description_japan"));
			$attraction->description_china = trim(Request::input("description_china"));
			$attraction->image_url_1 = trim(Request::input("screenshots_URL1"));
			$attraction->image_url_2 = trim(Request::input("screenshots_URL2"));
			$attraction->image_url_3 = trim(Request::input("screenshots_URL3"));
			$attraction->image_url_4 = trim(Request::input("screenshots_URL4"));
			$attraction->image_url_5 = trim(Request::input("screenshots_URL5"));
			$attraction->opening_hours = trim(Request::input("opening_hours"));
            $attraction->admission_free = trim(Request::input("admission_free"));
            $attraction->map_url = trim(Request::input("map_url"));
            $attraction->remark = trim(Request::input("remark"));

			if(trim(Request::input("attraction")) == 'true')
				$attraction->is_attraction = 1;
			else
				$attraction->is_attraction = 0;

			if(trim(Request::input("accommodation")) == 'true')
				$attraction->is_accommodation = 1;
			else
				$attraction->is_accommodation = 0;

			if(trim(Request::input("ampaign")) == 'true')
				$attraction->is_campaign = 1;
			else
				$attraction->is_campaign = 0;


			if ($attraction->save()) {
				return Redirect::route("admin-attractions")->with("success", "New post was created");
			} else {
				return Redirect::back()->with('error', 'Cannot save data')->withInput();
			}
		}
		else {
			return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput();
		}
	}

	public function editAttraction($id)
	{
		// Check is exist
		$attraction = Attractions::find($id);
		if (!$attraction) return Redirect::route("admin-attractions");
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $attraction->author->id) {
			return Redirect::route("admin-attractions");
		}
		
		return view("admin.attractions-edit", 
		    array(
                "attraction" => $attraction
            )
        );
	}

	public function updateAttraction($id)
	{
		// Check is exist
		$attraction = Attractions::find($id);
		if (!$attraction) return Redirect::route("admin-attractions")->with('error', 'Cannot save data');
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $attraction->author->id) {
			return Redirect::route("admin-attractions")->with('error', 'Cannot save data');
		}
		
		$validator = Validator::make(Request::all(), Attractions::save_rules($id), Attractions::$custom_messages);
		
		if ($validator->passes()) {
	        $attraction->author()->associate(Auth::user());
			$attraction->title_thai = trim(Request::input("title_thai"));
			$attraction->title_english = trim(Request::input("title_english"));
			$attraction->title_japan = trim(Request::input("title_japan"));
			$attraction->title_china = trim(Request::input("title_china"));
			$attraction->description_thai = trim(Request::input("description_thai"));
			$attraction->description_english = trim(Request::input("description_english"));
			$attraction->description_japan = trim(Request::input("description_japan"));
			$attraction->description_china = trim(Request::input("description_china"));
			$attraction->image_url_1 = trim(Request::input("screenshots_URL1"));
			$attraction->image_url_2 = trim(Request::input("screenshots_URL2"));
			$attraction->image_url_3 = trim(Request::input("screenshots_URL3"));
			$attraction->image_url_4 = trim(Request::input("screenshots_URL4"));
			$attraction->image_url_5 = trim(Request::input("screenshots_URL5"));
			$attraction->opening_hours = trim(Request::input("opening_hours"));
            $attraction->admission_free = trim(Request::input("admission_free"));
            $attraction->map_url = trim(Request::input("map_url"));
            $attraction->remark = trim(Request::input("remark"));

			if(trim(Request::input("attraction")) == 'true')
				$attraction->is_attraction = 1;
			else
				$attraction->is_attraction = 0;

			if(trim(Request::input("accommodation")) == 'true')
				$attraction->is_accommodation = 1;
			else
				$attraction->is_accommodation = 0;

			if(trim(Request::input("ampaign")) == 'true')
				$attraction->is_campaign = 1;
			else
				$attraction->is_campaign = 0;
			
			
	        if ($attraction->save()) {
	            return Redirect::route("admin-attractions")->with("success", "Updated attraction was saved");
	        } else {
	            return Redirect::back()->with('error', 'Cannot save data')->withInput();
	        }
		}
		else {
            return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput();
        }
	}


}
