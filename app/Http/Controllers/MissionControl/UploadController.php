<?php 
namespace SpaceXStats\Http\Controllers\MissionControl;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use SpaceXStats\Facades\Upload;
use SpaceXStats\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
use LukeNZ\Reddit\Reddit;
use SpaceXStats\Models\Mission;
use SpaceXStats\Models\Publisher;
use SpaceXStats\Models\Tag;

class UploadController extends Controller {

	public function show() {

        JavaScript::put([
            'tags' => Tag::all(),
            'missions' => Mission::with('featuredImage')->get(),
            'publishers' => Publisher::all()
        ]);

		return view('missionControl.create');
	}	

	// AJAX POST
	public function upload()
    {
        if (!empty(Input::all())) {

            $files = Input::file('file');
            $upload = Upload::check($files);

            if ($upload->hasErrors()) {
                return response()->json(['errors' => $upload->getErrors()], 400);
            }

            $objects = $upload->create();
            return response()->json(['objects' => $objects]);
        }
        return response()->json(false, 400);
    }

	// AJAX POST
	public function submit(Request $request) {
    	// File Submissions
		if ($request->header('Submission-Type') == 'files') {
            $files = Input::get('data');
            $objectValidities = [];
            $doesNotContainErrors = true;

            // Find each object from file
            for ($i = 0; $i < count($files); $i++) {

                $objectManagers[$i] = App::make('SpaceXStats\Managers\Objects\ObjectFromFile');
                $objectValidities[$i] = $objectManagers[$i]->isValid($files[$i]) ? true : $objectManagers[$i]->getErrors();

                if ($objectValidities[$i] !== true) {
                    $doesNotContainErrors = false;
                }
            }

            // Check if there are errors, if no, add all to db, if yes, return with errors.
            if ($doesNotContainErrors) {
                // add all objects to db
                for ($i = 0; $i < count($files); $i++) {
                    $objectManagers[$i]->create();
                }
            } else {
                return response()->json($objectValidities, 400);
            }
        } else {
            switch ($request->header('Submission-Type')) {

                case 'article':
                    $objectCreator = App::make('SpaceXStats\Managers\Objects\ObjectFromArticle');
                    break;

                case 'pressrelease':
                    $objectCreator = App::make('SpaceXStats\Managers\Objects\ObjectFromPressRelease');
                    break;

                case 'redditcomment':
                    $objectCreator = App::make('SpaceXStats\Managers\Objects\ObjectFromRedditComment');
                    break;

                case 'NSFcomment':
                    $objectCreator = App::make('SpaceXStats\Managers\Objects\ObjectFromNSFComment');
                    break;

                case 'text':
                    $objectCreator = App::make('SpaceXStats\Managers\Objects\ObjectFromText');
                    break;
            }

            if ($objectCreator->isValid(Input::get('data'))) {
                // Add to db
                $objectCreator->create();

            } else {
                return response()->json($objectCreator->getErrors(), 400);
            }
        }

        // redirect to mission control
        Session::flash('flashMessage', array(
            'contents' => 'Done!',
            'type' => 'success'
        ));
        return response()->json(true);
	}

    // AJAX GET
    public function retrieveTweet() {
        $twitter = new TwitterOAuth(Config::get('services.twitter.consumerKey'), Config::get('services.twitter.consumerSecret'), Config::get('services.twitter.accessToken'), Config::get('services.twitter.accessSecret'));
        $tweet = $twitter->get('statuses/show', array('id' => Input::get('id')));

        return response()->json($tweet);
    }

    // AJAX GET
    public function retrieveRedditComment() {
        $reddit = new Reddit(Config::get('services.reddit.username'), Config::get('services.reddit.password'), Config::get('services.reddit.key'),Config::get('services.reddit.secret'));

        $comment = $reddit->getComment(Input::get('url'));
        return response()->json($comment);
    }

}
 