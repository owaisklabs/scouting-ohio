<?php

namespace App\Http\Controllers\Web;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Brand;
use App\Models\ChangeField;
use App\Models\CoachPlayer;
use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
use App\Models\Contact;
use App\Models\PlayerLink;
use App\Models\PlayerVideo;
use App\Models\Region;
use App\Models\ScholarshipOffer;
use App\Models\SeeProfile;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

use function GuzzleHttp\json_decode;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $videos = PlayerVideo::latest()->get();
        $Players = User::where('type', 'Player')
            ->latest()
            ->limit(10)
            ->get();
        $results = [];
        $tweets = "";
        $users = Cache::get('online-users');
        // if(!$users) return null;

        $onlineUsers = collect($users);
        $dbUsers = User::find($onlineUsers->pluck('id')->toArray());
        $displayUsers = [];
        foreach ($dbUsers as $user){
            $onlineUser = $onlineUsers->firstWhere('id', $user['id']) ;
            $displayUsers[] = [
                'id' => $user->id,
                'first_name' => $user->name,
                'img'=> $user->user_profile,
                'type'=> $user->type
            ];
        }
        // return $displayUsers;

        // return User::find(Auth::id())->coachFriend;
        if (Auth::check()) {
            $checkUser = User::find(Auth::id());
            if ($checkUser->type === "college coach") {
                $coachFriend = User::find(Auth::id())->coachFriend;
                foreach ($coachFriend as $user) {
                    if ($user->twitter_link) {
                        $result = curl($user->twitter_link);
                        // dd($result);
                        array_push($results, $result);
                    }
                    continue;
                }
                // return $results;
                $tweets = [];
                foreach ($results as $user) {
                    foreach ($user as $tweet) {
                        // dd($tweet['created_at'],Carbon::parse($tweet['created_at']));
                        $tweet['created_at'] = Carbon::parse($tweet['created_at']);
                        array_push($tweets, $tweet);
                    }
                }
                // sorting tweets
                usort($tweets, function ($a, $b) { //Sort the array using a user defined function
                    return $a['created_at'] > $b['created_at'] ? -1 : 1; //Compare the scores
                });
                $tweets = collect($tweets)->sortByDesc(function ($obj, $key) {
                    return $obj['created_at'];
                });
            }
            if (Auth::user()->type == "Player") {
                $result = curl('Mark__Porter');
                array_push($results, $result);
                // return $results;
                $tweets = [];
                foreach ($results as $user) {
                    foreach ($user as $tweet) {
                        // dd($tweet['created_at'],Carbon::parse($tweet['created_at']));
                        $tweet['created_at'] = Carbon::parse($tweet['created_at']);
                        array_push($tweets, $tweet);
                    }
                }
                // sorting tweets
                usort($tweets, function ($a, $b) { //Sort the array using a user defined function
                    return $a['created_at'] > $b['created_at'] ? -1 : 1; //Compare the scores
                });
                $tweets = collect($tweets)->sortByDesc(function ($obj, $key) {
                    return $obj['created_at'];
                });
            }
        }

        // return $tweets;
        //  return $tweets = collect($tweets);

        // return $tweets->orderBy('created_at');
        // return $user->coachFriend;
        // foreach($users as $user){
        //     $result = curl($user->twitter_username);
        //     array_push($results, $result);
        // }
        return view('web.home.index', compact('articles', 'videos', 'Players', 'tweets','displayUsers'));
    }

    public function players(Request $request)

    {
        $users = User::where('type', 'Player')->get();
        return view('web.player.players', compact('users'));
    }
    public function coaches(Request $request)

    {
        $users = User::where('type','!=' ,'Player')
        ->where('type','!=' ,'Admin')
        ->get();
        return view('web.coach.coahes', compact('users'));
    }

    public function playersProfile($id, Request $request)
    {
        $user = User::find($id);
        $check = CoachPlayer::where('coach_id', Auth::id())
            ->where('player_id', $id)
            ->first();
        // dd($check);
        // return $user->playervideos;
        $data = [];
        $feeds = ChangeField::where('user_id', $id)->get();
        foreach ($feeds as $key => $value) {
            $data_2 = json_decode($value->change_value, true);
            array_push($data, $data_2);
        }
        if (Auth::check()) {
            $profile = SeeProfile::where('player_id', $id)
                ->where('visiter_id', Auth::id())
                ->where('count', '>',0)
                ->first();
            if ($profile) {
                $profile->player_id = $id;
                $profile->visiter_id = Auth::id();
                $profile->increment('count');
                $profile->status = "unseen";
                $profile->save();
                // dd($profile);
            } else {
                $profile = new SeeProfile();
                $profile->player_id = $id;
                $profile->visiter_id = Auth::id();
                $profile->count=1;
                $profile->status = "unseen";
                $profile->save();
            }
        }
        // return $data;

        // return $data;
        return view('web.profile.player_profile', compact('user', 'check', 'data'));
    }
    public function coachProfile($id)
    {
        $user = User::find($id);
        return view('web.profile.coach_profile', compact('user'));
    }

    public function about_us()
    {
        $features = Feature::all();
        return view('web.about.about_us', compact('features'));
    }

    public function articles()
    {
        $articles = Article::all();
        // dd($articles);
        return view('web.article.articles', compact('articles'));
    }
    public function articlesDetail($id)
    {
        $article = Article::where('id', $id)->first();
        return view('web.article.article-view', compact('article'));
    }

    public function kickers()
    {
        $kickers = User::where('isKicker', 1)->orderBy('rating', 'DESC')->get();
        return view('web.kicker.kickers', compact('kickers'));
    }

    public function punters()
    {
        $punters = User::where('isPunter', 1)->orderBy('rating', 'DESC')->get();
        return view('web.punter.punters', compact('punters'));
    }

    public function long_snappers()
    {
        $long_snappers = User::where('isLongSnapper', 1)->orderBy('rating', 'DESC')->get();
        return view('web.long_snapper.long_snappers', compact('long_snappers'));
    }

    public function packages()
    {
        // dd('yes');
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.package.packages', compact('packages'));
    }

    public function contact_us()
    {
        return view('web.contact.contact_us');
    }

    public function web_register(Request $request)
    {
        $role = $request->role;
        if (auth()->user()) {
            if (auth()->user()->type == 'Admin' || auth()->user()->type == 'User') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.auth.register', compact('packages', 'role'));
    }

    public function web_login()
    {
        if (auth()->user()) {
            if (auth()->user()->type == 'Admin' || auth()->user()->type == 'User') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
        return view('web.auth.login');
    }

    public function my_profile()
    {
        // PAYPAL STUFF
        // $result = get_paypal_access_token();
        // create_paypal_billing_plan($result['access_token']);
        // list_paypal_billing_plans($result['access_token']);
        // activate_paypal_billing_plan($result['access_token']);
        // create_paypal_billing_agreement($result['access_token']);
        // show_paypal_agreement_details($result['access_token']);
        // execute_paypal_agreement($result['access_token']);
        if (!(auth()->user())) {
            return redirect()->back();
        }

        $user = User::find(auth()->user()->id);
        // dd($user);
        return view('web.profile.my_profile', compact('user'));
    }

    public function profile(Request $request)
    {
        // dd($request->all());
        if (!($user = User::where('id', $request->id)->where('type', '!=', 'Admin')->where('type', '!=', 'User')->first())) {
            return redirect()->back();
        }
        // dd($user);
        return view('web.profile.profile', compact('user'));
    }

    public function search_players(Request $request)
    {
        // dd($request->all());
        // dd($query->high_school);
        $users = User::where('created_at', '!=', NULL)->where('type', 'Player');
        $result = [];

        if ($request->high_school) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('high_school', $request->high_school);
            })->get();
        }
        if ($request->class_year) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('class_off', $request->class_year);
            })->get();
        }
        if ($request->offered_by) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('offer', $request->offered_by);
            })->get();
        }
        if ($request->search_coach) {
            $result = $users->whereHas('playerEvaluation', function ($q) use ($request) {
                $q->where('head_coach_name', 'like', '%' . $request->search_coach . '%');
            })->get();
        }
        if ($request->search_player) {
            $result = $users->where('name', 'like', '%' . $request->search_player . '%')->get();
        }
        if ($request->division) {
            if ($request->FSB_Division_1_Offers) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FBS_division_1_colleges', $request->division);
                })->get();
            }
            if ($request->FSB_Division_1_Verbals) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FBS_division_1_college', $request->division);
                })->get();
            }
            if ($request->FCS_Division_aa_2_3_Offers) {

                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FCS_division_1aa_2_and_3_colleges', $request->division);
                })->get();
            }
            if ($request->FCS_Division_1aa_2_3_Verbals) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('division_FCS_division_1aa_2_and_3_college', $request->division);
                })->get();
            }
            //     else{
            //     $result = $users->whereHas('scholarshipOffer', function($q)use($request){
            //         $q->where('FBS_division_1_colleges',$request->division)
            //         ->orWhere('FCS_division_1aa_2_and_3_colleges',$request->division);
            //     })->get();
            // }
            // dd($result);
        }

        return view('web.player.search-players', compact('result'));
    }
    public function privateSearch(Request $request)
    {
        // dd( $request->all());
        $users = User::where('created_at', '!=', NULL)->where('type', 'Player');
        $result = [];

        if ($request->private_high_school) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('high_school', $request->private_high_school);
            })->get();
        }
        if ($request->private_class_of) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('class_off', $request->private_class_of);
            })->get();
        }
        if ($request->priv_offered_by) {
            $result = $users->whereHas('basicInfo', function ($q) use ($request) {
                $q->where('offer', $request->priv_offered_by);
            })->get();
        }
        if ($request->search_coach) {
            $result = $users->whereHas('playerEvaluation', function ($q) use ($request) {
                $q->where('head_coach_name', 'like', '%' . $request->search_coach . '%');
            })->get();
        }
        if ($request->private_county) {
            $result = $users->whereHas('personalInfo', function ($q) use ($request) {
                $q->where('player_country',  $request->private_county);
            })->get();
        }
        if ($request->private_top_premium_position) {
            $result = $users->whereHas('playerEvaluation', function ($q) use ($request) {
                $q->where('premium_top_position',  $request->private_top_premium_position);
            })->get();
        }
        if ($request->search_player) {
            $result = $users->where('name', 'like', '%' . $request->search_player . '%')->get();
        }
        if ($request->division) {
            if ($request->FSB_Division_1_Offers) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FBS_division_1_colleges', $request->division);
                })->get();
            }
            if ($request->FSB_Division_1_Verbals) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FBS_division_1_college', $request->division);
                })->get();
            }
            if ($request->FCS_Division_aa_2_3_Offers) {

                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('FCS_division_1aa_2_and_3_colleges', $request->division);
                })->get();
            }
            if ($request->FCS_Division_1aa_2_3_Verbals) {
                $result = $users->whereHas('scholarshipOffer', function ($q) use ($request) {
                    $q->where('division_FCS_division_1aa_2_and_3_college', $request->division);
                })->get();
            }
            //     else{
            //     $result = $users->whereHas('scholarshipOffer', function($q)use($request){
            //         $q->where('FBS_division_1_colleges',$request->division)
            //         ->orWhere('FCS_division_1aa_2_and_3_colleges',$request->division);
            //     })->get();
            // }
            // dd($result);
        }
        if ($request->private_region !== 'null') {
            // dd($request->private_region);
            $finalCounties = [];
            $region = Region::find($request->private_region);
            $counties = $region->counties;
            foreach ($counties as $value) {
                array_push($finalCounties, $value->name);
            }
            $result = User::whereHas('personalInfo', function ($q) use ($finalCounties) {
                $q->whereIn('player_country', $finalCounties);
            })->get();
            // dd($userResult);
        }
        // dd($result);
        return view('web.player.search-players', compact('result'));
    }
    public function paypal_payment(Request $request, $id)
    {

        // $user = ($this->userService->find($id));
        dd($id);
        // 'package_id'=> $request->package_id,
        // $user= User::where()
        // dd($user);
        // dd(Session());
        // return view('web.auth.login');
    }


    public function contact_data(Request $request)
    {
        $user = Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'contact_no' => $request['contact_no'],
            'message' => $request['message'],
        ]);

        return redirect()->back()->with('message', 'Your Enquiry Send Successfully To Admin');

        // return redirect()->route('login')->withm(['email' => ['message' => 'Your account is inactive.']]);
        // return redirect()->back();
        // return redirect()->back()->
        //    'message'=>'success',
        // dd($user);
        // code...
        // return view('web.contact.contact_us');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->type == 'college coach') {
                if ($user->user_status == 1) {
                    if (Auth::attempt($credentials)) {
                        $request->session()->regenerate();
                        return redirect('/');
                    } else {
                        return redirect()->back();
                    }
                } else {

                    Session::flash('notVerified', 'This is a message!');
                    return redirect()->back();
                    // 'email' => 'Your reqiest is not approved please try leter';
                }
            } elseif (Auth::attempt($credentials) && $user->type !== 'college coach') {
                $request->session()->regenerate();
                return redirect('/');
            } else {
                return [

                    'email' => 'Your reqiest is not approved please try leter',
                ];
            }
        } else {
            Session::flash('credentialsnot', 'This is a message!');
            return redirect()->back();
        }
    }
    public function TwitterTweets($handle)
    {
        $curl = curl_init();

        $nonce = mt_rand();
        $timestamp = time();

        $header[] = 'Authorization: OAuth ' .
            'Bearer="AAAAAAAAAAAAAAAAAAAAAAlLPAEAAAAAdQyFQK%2Fc26eiUKdzjKZvI%2F24rgA%3DIEgYW2V3ZkLDwCAAGRWmg8agofyFEDESDPyoqTDk1rwH68cu3d"' .
            ',oauth_consumer_key="IRkKFMhbSCJ4EdyrWBgIT3yur"' .
            ',oauth_consumer_secret="TwZX4f1MN2yl8V7BUr7jEEw883PvOEd8ey8RLNgNl0FrGry9RC"' .
            ',oauth_token_secret="QjdNkgj9wr4hjYdNOZuAS7ulcgOlNCvHdpVXrvSwkDwzH"' .
            ',oauth_signature_method="HMAC-SHA1"' .
            ',oauth_nonce="' . $nonce . '"' .
            ',oauth_timestamp="' . $timestamp . '"' .
            ',oauth_version="1.0"' .
            ',oauth_token="1512823328-VToWBx6qwvXaxiyOiIFq9DvyROxkNtX7zyqAzHH"' .
            ',Content-Type=application/json';

        curl_setopt($curl, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/user_timeline.json?name=' . $handle . '&count=200');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($curl);

        if (!$result) {
            die("Connection Failure");
        }

        curl_close($curl);
        return json_decode($result, true);
    }
    public function test(Request $request)
    {
        // return Excel::download(new UsersExport,'export.xlsx');

        $seenNotification = SeeProfile::where('player_id', $request->id)
            ->where('status', 'unseen')
            ->get();
            // return $seenNotification;
        foreach ($seenNotification as $item) {
            $item->update([
                'status' => 'seen'
            ]);
        }
    }
}
