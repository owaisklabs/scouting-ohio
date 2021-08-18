<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicInfo;
use App\Models\AddtionalCoach;
use App\Models\CoachPlayer;
use App\Models\HonorAward;
use App\Models\PlayerArticle;
use App\Models\PlayerBasicInfo;
use App\Models\PlayerCombineResult;
use App\Models\PlayerEvaluation;
use App\Models\PlayerLink;
use App\Models\PlayerPersonalInfo;
use App\Models\PlayerVideo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('user.index');
    }
    public function playerDashboard()
    {
        $basicInfo = PlayerBasicInfo::where('user_id',Auth::id())->first();
        $combibeReslut = PlayerCombineResult::where('user_id',Auth::id())->first();
        $honorAward = HonorAward::where('user_id',Auth::id())->first();
        $academicInfo = AcademicInfo::where('user_id',Auth::id())->first();
        // dd($academicInfo);
        $playerPersonalInfo = PlayerPersonalInfo::where('user_id',Auth::id())->first();
        $playerEvaluation = PlayerEvaluation::where('user_id',Auth::id())->first();

        $friends = CoachPlayer::where('player_id',Auth::id())->get();
        $playerLink = PlayerLink::where('user_id',Auth::id())->first();
        $playerVideos = PlayerVideo::where('user_id',Auth::id())->get();
        $playerArticles = PlayerArticle::where('user_id',Auth::id())->get();
        $data = Session::get('basic_info_updating');

        $user = User::find(Auth::id());
        // return $user->friends;
        // return User::with('friends')->get();
        // return($user->friends);
        // dd($basicInfo);
        return view('web.dashboard.player.index',compact('basicInfo','user','combibeReslut',
        'honorAward','academicInfo','playerPersonalInfo','playerEvaluation','playerLink','playerVideos',
        'playerArticles','data','friends'));
    }

    public function coachDashboard()
    {
        $user = User::where('id',Auth::id())->first();
        // dd($user->coachFriend);
        $addtionalCoachs = AddtionalCoach::where('user_id',Auth::id())->get();
        return view('web.dashboard.coach.index',compact('user','addtionalCoachs'));
    }
}
