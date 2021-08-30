<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AcademicInfo;
use App\Models\AddtionalCoach;
use App\Models\ChangeField;
use App\Models\CoachPlayer;
use App\Models\HonorAward;
use App\Models\MyLinks;
use App\Models\PlayerArticle;
use App\Models\PlayerBasicInfo;
use App\Models\PlayerCombineResult;
use App\Models\PlayerEvaluation;
use App\Models\PlayerPersonalInfo;
use App\Models\PlayerVideo;
use App\Models\ScholarshipOffer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class PlayerController extends Controller
{
    public function basicInfo(Request $request)
    {
        // dd();
        $basicInfo = PlayerBasicInfo::where('user_id', Auth::id())->first();
        if ($basicInfo) {
            // return $request->all();
            $basicInfo->fullname = $request->full_name;
            $basicInfo->best_college_poition = $request->best_college_poition;
            $basicInfo->high_school = $request->high_school;
            $basicInfo->offensive = $request->offensive;
            $basicInfo->class_off = $request->class_off;
            $basicInfo->secondry_offensive = $request->secondry_offensive;
            $basicInfo->jersey_number = $request->jersey_number;
            $basicInfo->defensive = $request->defensive;
            $basicInfo->height = $request->height;
            $basicInfo->secondry_defensive = $request->secondry_defensive;
            $basicInfo->weight = $request->weight;
            $basicInfo->special_team_position = $request->special_team_position;
            $basicInfo->user_id = Auth::id();
            $basicInfo->offer = $request->offer;
            $basicInfo->save();
            $user = User::find(Auth::id());
            $user->name = $request->full_name;
            $user->save();
            $items = $basicInfo->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            $request->session()->put('basic_info_updating', $items);
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $basicInfo = new PlayerBasicInfo();
            $basicInfo->fullname = $request->full_name;
            $basicInfo->best_college_poition = $request->best_college_poition;
            $basicInfo->high_school = $request->high_school;
            $basicInfo->high_school_defensive = $request->high_school_defensive;
            $basicInfo->class_off = $request->class_off;
            $basicInfo->secondry_offensive = $request->secondry_offensive;
            $basicInfo->jersey_number = $request->jersey_number;
            $basicInfo->jersey_defensive = $request->jersey_defensive;
            $basicInfo->height = $request->height;
            $basicInfo->secondry_defensive = $request->secondry_defensive;
            $basicInfo->weight = $request->weight;
            $basicInfo->special_team_position = $request->special_team_position;
            $basicInfo->user_id = Auth::id();
            $basicInfo->offer = $request->offer;
            $basicInfo->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } // Store/update player Basic Info
    public function combineResult(Request $request)
    {
        $combineResult = PlayerCombineResult::where('user_id', Auth::id())->first();
        if ($combineResult) {
            $combineResult->User_id = Auth::id();
            $combineResult->ft_40_yard_dash = $request->ft_40_yard_dash;
            $combineResult->timed_by = $request->timed_by;
            $combineResult->ft_20_yd_shuttle = $request->ft_20_yd_shuttle;
            $combineResult->ft_100_meter_dash = $request->ft_100_meter_dash;
            $combineResult->bench_max_1_rep = $request->bench_max_1_rep;
            $combineResult->bench_reps_at_185 = $request->bench_reps_at_185;
            $combineResult->vertical_jump = $request->vertical_jump;
            $combineResult->broad_jump = $request->broad_jump;
            $combineResult->bench_reps_at_225 = $request->bench_reps_at_225;
            $combineResult->squat = $request->squat;
            $combineResult->power_clean = $request->power_clean;
            $combineResult->dead_lift = $request->dead_lift;
            $combineResult->football_post_season_honors = $request->football_post_season_honors;
            $combineResult->football_statics = $request->football_statics;
            $combineResult->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $combineResult->Hobbies_extracurricular_activities = $request->Hobbies_extracurricular_activities;
            $combineResult->Camp_combines = $request->Camp_combines;
            $combineResult->list_college_recruiting_you = $request->list_college_recruiting_you;
            $combineResult->list_official_college_visits_you_will_tak_have_taken = $request->list_official_college_visits_you_will_tak_have_taken;
            $combineResult->save();
            $items = $combineResult->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            $request->session()->put('combine_result_updating', $items);

            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $combineResult = new PlayerCombineResult();
            $combineResult->User_id = Auth::id();
            $combineResult->ft_40_yard_dash = $request->ft_40_yard_dash;
            $combineResult->timed_by = $request->timed_by;
            $combineResult->ft_20_yd_shuttle = $request->ft_20_yd_shuttle;
            $combineResult->ft_100_meter_dash = $request->ft_100_meter_dash;
            $combineResult->bench_max_1_rep = $request->bench_max_1_rep;
            $combineResult->bench_reps_at_185 = $request->bench_reps_at_185;
            $combineResult->vertical_jump = $request->vertical_jump;
            $combineResult->broad_jump = $request->broad_jump;
            $combineResult->bench_reps_at_225 = $request->bench_reps_at_225;
            $combineResult->squat = $request->squat;
            $combineResult->power_clean = $request->power_clean;
            $combineResult->dead_lift = $request->dead_lift;
            $combineResult->football_post_season_honors = $request->football_post_season_honors;
            $combineResult->football_statics = $request->football_statics;
            $combineResult->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $combineResult->Hobbies_extracurricular_activities = $request->Hobbies_extracurricular_activities;
            $combineResult->Camp_combines = $request->Camp_combines;
            $combineResult->list_college_recruiting_you = $request->list_college_recruiting_you;
            $combineResult->list_official_college_visits_you_will_tak_have_taken = $request->list_official_college_visits_you_will_tak_have_taken;
            $combineResult->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } // store update player combine result
    public function honorAward(Request $request)
    {
        $honorAward = HonorAward::where('user_id', Auth::id())->first();
        if ($honorAward) {
            $honorAward->User_id = Auth::id();
            $honorAward->football_post_season_honors = $request->football_post_season_honors;
            $honorAward->football_statics = $request->football_statics;
            $honorAward->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $honorAward->hobbies_extracurricular_activities = $request->hobbies_extracurricular_activities;
            $honorAward->save();
            $items = $honorAward->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            $request->session()->put('honor_award_updating', $items);
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $honorAward = new HonorAward();
            $honorAward->User_id = Auth::id();
            $honorAward->football_post_season_honors = $request->football_post_season_honors;
            $honorAward->football_statics = $request->football_statics;
            $honorAward->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $honorAward->hobbies_extracurricular_activities = $request->hobbies_extracurricular_activities;
            $honorAward->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } // store update honor award
    public function academicInfo(Request $request)
    {
        // dd($request->file('transcript'));
        // return $request->file('transcript')->getClientOriginalName();
        $academicInfo = AcademicInfo::where('user_id', Auth::id())->first();
        if ($academicInfo) {
            $academicInfo->gpa = $request->gpa;
            $academicInfo->act = $request->act;
            $academicInfo->class_rank = $request->class_rank;
            if ($request->file('transcript')) {
                Storage::disk('public_academic_info')->delete($academicInfo->transcript);
                $transcript = $request->transcript;
                $transcriptName = Str::random(10) . '.' . $transcript->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($transcriptName, \File::get($transcript));
                $academicInfo->transcript = $transcriptName;
            }
            if ($request->file('attach_act_sat_result')) {
                Storage::disk('public_academic_info')->delete($academicInfo->attach_act_sat_result);
                $attach_act_sat_result = $request->attach_act_sat_result;
                $attachActSatResultName = Str::random(10) . '.' . $attach_act_sat_result->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($attachActSatResultName, \File::get($attach_act_sat_result));
                $academicInfo->attach_act_sat_result = $attachActSatResultName;
            }

            if ($request->file('football_bio')) {
                Storage::disk('public_academic_info')->delete($academicInfo->football_bio);
                $football_bio = $request->football_bio;
                $footballBioName = Str::random(10) . '.' . $football_bio->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($footballBioName, \File::get($football_bio));
                $academicInfo->football_bio = $footballBioName;
            }
            $academicInfo->desire_majro_in_college = $request->desire_majro_in_college;
            $academicInfo->sat = $request->sat;
            $academicInfo->clearing_house_id = $request->clearing_house_id;
            $academicInfo->hobbies_extracurricular_activities = $request->hobbies_extracurricular_activities;
            $academicInfo->save();
            $items = $academicInfo->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            $request->session()->put('academic_info_updating', $items);
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $academicInfo = new AcademicInfo();
            $academicInfo->User_id = Auth::id();
            $academicInfo->gpa = $request->gpa;
            $academicInfo->act = $request->act;
            $academicInfo->football_bio = $request->footballBioName;
            $academicInfo->class_rank = $request->class_rank;
            $academicInfo->desire_majro_in_college = $request->desire_majro_in_college;
            $academicInfo->sat = $request->sat;
            $academicInfo->clearing_house_id = $request->clearing_house_id;
            $academicInfo->hobbies_extracurricular_activities = $request->hobbies_extracurricular_activities;
            if ($request->file('transcript')) {
                $transcript = $request->transcript;
                $transcriptName = Str::random(10) . '.' . $transcript->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($transcriptName, \File::get($transcript));
                $academicInfo->transcript = $transcriptName;
            }
            if ($request->file('attach_act_sat_result')) {
                $attach_act_sat_result = $request->attach_act_sat_result;
                $attachActSatResulttName = Str::random(10) . '.' . $attach_act_sat_result->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($attachActSatResulttName, \File::get($attach_act_sat_result));
                $academicInfo->attach_act_sat_result = $attachActSatResulttName;
            }
            if ($request->file('football_bio')) {
                $football_bio = $request->football_bio;
                $footballBioName = Str::random(10) . '.' . $football_bio->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($footballBioName, \File::get($football_bio));
                $academicInfo->football_bio = $footballBioName;
            }
            $academicInfo->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } //store upate academicInfo
    public function myLinks(Request $request)
    {
        // return $request->all();
        $myLinks = MyLinks::where('user_id', Auth::id())->first();
        if ($myLinks) {
            $myLinks->User_id = Auth::id();
            $myLinks->hudle = $request->hudle;
            $myLinks->youtube = $request->youtube;
            $myLinks->facebook = $request->facebook;
            $myLinks->twitter = $request->twitter;
            $myLinks->instagram = $request->instagram;
            $myLinks->snapchat = $request->snapchat;
            $myLinks->database_24_7 = $request->database_24_7;
            $myLinks->database_rivals = $request->database_rivals;
            $myLinks->save();
            $user = User::find(Auth::id());
            $user->twitter_link = $request->twitter;
            $user->save();
            $items = $myLinks->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            $request->session()->put('my_link_updating', $items);
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $myLinks = new MyLinks();
            $myLinks->User_id = Auth::id();
            $myLinks->hudle = $request->hudle;
            $myLinks->youtube = $request->youtube;
            $myLinks->facebook = $request->facebook;
            $myLinks->twitter = $request->twitter;
            $myLinks->instagram = $request->instagram;
            $myLinks->snapchat = $request->snapchat;
            $myLinks->database_24_7 = $request->database_24_7;
            $myLinks->database_rivals = $request->database_rivals;
            $myLinks->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } // store and update links of players
    public function userVideo(Request $request)
    {
        // dd($request->all());
        if (Session::get('type') === "update") {
            $playerVideo = PlayerVideo::find($request->hidden_id);
            $playerVideo->hudl_link = $request->hudl_link;
            if ($request->file('hudl_thumbnail')) {
                Storage::disk('public_videos')->delete($playerVideo->hudl_thumbnail);
                $hudlThumbnail = $request->hudl_thumbnail;
                $hudlThumbnailName = Str::random(10) . '.' . $hudlThumbnail->getClientOriginalExtension();
                Storage::disk('public_videos')->put($hudlThumbnailName, \File::get($hudlThumbnail));
                $playerVideo->hudl_thumbnail = $hudlThumbnailName;
            }
            $playerVideo->save();
            $request->session()->forget('type');
            $items = $playerVideo->getChanges();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $playerVideo = new PlayerVideo();
            if ($request->file('hudl_thumbnail')) {
                // Storage::disk('public_videos')->delete($playerVideo->hudl_thumbnail);
                $hudlThumbnail = $request->hudl_thumbnail;
                $hudlThumbnailName = Str::random(10) . '.' . $hudlThumbnail->getClientOriginalExtension();
                Storage::disk('public_videos')->put($hudlThumbnailName, \File::get($hudlThumbnail));
                $playerVideo->hudl_thumbnail = $hudlThumbnailName;
            }
            $playerVideo->hudl_link = $request->hudl_link;
            $playerVideo->User_id = Auth::id();
            $playerVideo->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } //store and update user video
    public function playerArticle(Request $request)
    {
        // Update Player Article
        if (Session::get('type') === "update") {
            $playerArticle = PlayerArticle::find($request->hidden_id);
            //  dd($playerArticle);
            $playerArticle->title = $request->title;
            $playerArticle->article_link = $request->aticle_link;
            if ($request->file('article_img')) {
                Storage::disk('public_academic_info')->delete($playerArticle->upload_image);
                $article_img = $request->article_img;
                $articleImageName = Str::random(15) . '.' . $article_img->getClientOriginalExtension();
                // dd($articleImageName);
                Storage::disk('public_academic_info')->put($articleImageName, \File::get($article_img));
                $playerArticle->upload_image = $articleImageName;
                $playerArticle->save();
                $request->session()->forget('type');
                Session::flash('message', 'This is a message!');
                return redirect()->back();
            }
            $playerArticle->upload_image = $request->img_name;
            $playerArticle->save();
            $items = $playerArticle->getChanges();
            $request->session()->put('player_article_updating', $items);
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            // Store new Player Articles
            $playerArticle = new PlayerArticle();
            $playerArticle->title = $request->title;
            $playerArticle->article_link = $request->aticle_link;
            $playerArticle->User_id = Auth::id();
            if ($request->file('article_img')) {
                $article_img = $request->article_img;
                $articleImageName = Str::random(10) . '.' . $article_img->getClientOriginalExtension();
                Storage::disk('public_academic_info')->put($articleImageName, \File::get($article_img));
                $playerArticle->upload_image = $articleImageName;
            }
            $playerArticle->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    } // store and update player article
    public function changePassword(Request $request)
    {
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        Session::flash('message', 'This is a message!');
        return redirect()->back();
    } // change user password
    public function personalInfo(Request $request)
    {
        $personalInfo = PlayerPersonalInfo::where('User_id', Auth::id())->first();
        if ($personalInfo) {
            $personalInfo->User_id = Auth::id();
            $personalInfo->player_home_address = $request->player_home_address;
            $personalInfo->player_city = $request->player_city;
            $personalInfo->player_state = $request->player_state;
            $personalInfo->player_zipcode = $request->player_zipcode;
            $personalInfo->player_country = $request->player_country;
            $personalInfo->player_phone_number = $request->player_phone_number;
            $personalInfo->player_secondry_number = $request->player_secondry_number;
            $personalInfo->player_dob = $request->player_dob;
            $personalInfo->male_parent_name = $request->male_parent_name;
            $personalInfo->male_parent_phone = $request->male_parent_phone;
            $personalInfo->male_parent_email = $request->male_parent_email;
            $personalInfo->male_parent_occupation = $request->male_parent_occupation;
            $personalInfo->male_parent_alma_mater = $request->male_parent_alma_mater;
            $personalInfo->female_parent_name = $request->female_parent_name;
            $personalInfo->female_parent_phone = $request->female_parent_phone;
            $personalInfo->female_parent_email = $request->female_parent_email;
            $personalInfo->female_parent_occupation = $request->female_parent_occupation;
            $personalInfo->list_official_college_visits_you_will_tak = $request->list_official_college_visits_you_will_tak;
            $personalInfo->save();
            $items = $personalInfo->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $personalInfo = new PlayerPersonalInfo();
            $personalInfo->User_id = Auth::id();
            $personalInfo->player_home_address = $request->player_home_address;
            $personalInfo->player_city = $request->player_city;
            $personalInfo->player_state = $request->player_state;
            $personalInfo->player_zipcode = $request->player_zipcode;
            $personalInfo->player_country = $request->player_country;
            $personalInfo->player_phone_number = $request->player_phone_number;
            $personalInfo->player_secondry_number = $request->player_secondry_number;
            $personalInfo->player_dob = $request->player_dob;
            $personalInfo->male_parent_name = $request->male_parent_name;
            $personalInfo->male_parent_phone = $request->male_parent_phone;
            $personalInfo->male_parent_email = $request->male_parent_email;
            $personalInfo->male_parent_occupation = $request->male_parent_occupation;
            $personalInfo->male_parent_alma_mater = $request->male_parent_alma_mater;
            $personalInfo->female_parent_name = $request->female_parent_name;
            $personalInfo->female_parent_phone = $request->female_parent_phone;
            $personalInfo->female_parent_email = $request->female_parent_email;
            $personalInfo->female_parent_occupation = $request->female_parent_occupation;
            $personalInfo->list_official_college_visits_you_will_tak = $request->list_official_college_visits_you_will_tak;
            $personalInfo->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    }
    public function scholarShipOffer(Request $request)
    {
        $scholarshipOffer = ScholarshipOffer::where('user_id', Auth::id())->get();
        if ($scholarshipOffer) {
            foreach ($scholarshipOffer as $item) {
                # code...   
                $item = ScholarshipOffer::where('user_id', Auth::id())->delete();
            }
        }
        // dd($request->all());
        if ($request->fbs) {
            foreach ($request->fbs as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = Auth::id();
                $scholarshipOffer->FBS_division_1_colleges = $item;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges =null;
                $scholarshipOffer->FBS_division_1_college =$request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college =$request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = null;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->save();
            }
        }
        if ($request->fcs) {
            foreach ($request->fcs as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = Auth::id();
                $scholarshipOffer->FBS_division_1_colleges = null;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges =$item;
                $scholarshipOffer->FBS_division_1_college =$request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college =$request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = null;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->save();
            }
        }
        if ($request->walkOnOffers) {
            foreach ($request->walkOnOffers as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = Auth::id();
                $scholarshipOffer->FBS_division_1_colleges = null;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges =null;
                $scholarshipOffer->FBS_division_1_college =$request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college =$request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = $item;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->save();
                return redirect()->back();
            }
        }

    }
    public function showArticleById(Request $request)
    {

        $type = $request->type;
        if ($type === "update") {
            Session::put('type', 'update');
            return PlayerArticle::find($request->id);
        }
    }
    public function showVideoById(Request $request)
    {
        $type = $request->type;
        if ($type === "update") {
            Session::put('type', 'update');
            return PlayerVideo::find($request->id);
        }
    }
    public function deleteVideoById(Request $request)
    {
        $deleteData = PlayerVideo::find($request->id);
        $deleteData->delete();
        return redirect()->back();
    }
    public function deleteArticleById(Request $request)
    {
        $deleteData = PlayerArticle::find($request->id);
        $deleteData->delete();
        return redirect()->back();
    }
    public function userProfileUpload(Request $request)
    {
        $user = User::find(Auth::id());
        // dd($request->all());
        if ($request->file('profileImage')) {
            $user_img = $request->profileImage;
            $userImgName = Str::random(20) . '.' . $user_img->getClientOriginalExtension();
            Storage::disk('public_user_img')->put($userImgName, \File::get($user_img));
            $user->user_profile = $userImgName;
            $user->save();
            return redirect()->back();
        } else {
            if ($request->file('covetImage')) {
                $user_img = $request->covetImage;
                $userImgName = Str::random(20) . '.' . $user_img->getClientOriginalExtension();
                Storage::disk('public_user_img')->put($userImgName, \File::get($user_img));
                $user->user_cover = $userImgName;
                $user->save();
                return redirect()->back();
            }
        }
    }
    public function coachBasicIinfo(Request $request)
    {
        // dd($request->all());
        $coachBasicInfo = User::find(Auth::id());
        // dd($coachBasicInfo);
        $coachBasicInfo->name = $request->full_name;
        $coachBasicInfo->college_university = $request->college_university;
        $coachBasicInfo->phone = $request->phone;
        $coachBasicInfo->summer_football_camps = $request->summer_football_camps;
        $coachBasicInfo->twitter_link = $request->twitter_link;
        $coachBasicInfo->fb_link = $request->fb_link;
        $coachBasicInfo->instagram_link = $request->instagram_link;
        $coachBasicInfo->snap_chat_link = $request->snap_chat_link;
        $coachBasicInfo->save();
        return redirect()->back();
    }
    public function addtionalCoach(Request $request)
    {
        // return $request->all();
        $addtionalCoach = new AddtionalCoach();
        $addtionalCoach->name = $request->name;
        $addtionalCoach->user_id = Auth::id();
        $addtionalCoach->email = $request->email;
        $addtionalCoach->save();
        return redirect()->back();
    }
    public function deleteAddtionalCoachById(Request $request)
    {
        // return $request->all();
        $deleteData = AddtionalCoach::find($request->id);
        return $deleteData->delete();
    }
    public function showAddtionalCoachById(Request $request)
    {
        return AddtionalCoach::find($request->id);
    }
    public function addtionalCoachUpdate(Request $request)
    {
        // dd($request->all());
        $addtionalCoach = AddtionalCoach::find($request->id);
        $addtionalCoach->name = $request->name;
        $addtionalCoach->email = $request->email;
        $addtionalCoach->save();
        return redirect()->back();
    }
    public function playerEvaluation(Request $request)
    {
        // return $request->all();
        $playerEvaluation = PlayerEvaluation::where('user_id', Auth::id())->first();
        if ($playerEvaluation) {
            $playerEvaluation->player_grade_evaluation = $request->player_grade_evaluation;
            $playerEvaluation->head_coach_name = $request->head_coach_name;
            $playerEvaluation->head_coach_phone_landline = $request->head_coach_phone_landline;
            $playerEvaluation->head_coach_phone_cell = $request->head_coach_phone_cell;
            $playerEvaluation->head_coach_email = $request->head_coach_email;
            $playerEvaluation->head_coach_or_team_twitter_link = $request->head_coach_or_team_twitter_link;
            $playerEvaluation->name = $request->recruiting_cordinator_name;
            $playerEvaluation->phone_mumber = $request->recruiting_cordinator_phone_number;
            $playerEvaluation->email = $request->recruiting_cordinator_email;
            $playerEvaluation->premium_top_position = $request->premium_top_position;
            $playerEvaluation->premium_rank = $request->premium_rank;
            $playerEvaluation->evaluation = $request->evaluation;
            $playerEvaluation->best_game_film_from_past_season_and_why = $request->best_game_film_from_past_season_and_why;
            $playerEvaluation->best_players_on_your_team = $request->best_players_on_your_team;
            $playerEvaluation->best_player_you_faced_last_season = $request->best_player_you_faced_last_season;
            $playerEvaluation->why_do_you_want_to_play_college_football = $request->why_do_you_want_to_play_college_football;
            $playerEvaluation->save();
            $items = $playerEvaluation->getChanges();
            $jsonData = json_encode($items);
            $changes = new ChangeField();
            $changes->user_id = Auth::id();
            $changes->change_value = $jsonData;
            $changes->save();

            Session::flash('message', 'This is a message!');
            return redirect()->back();
        } else {
            $playerEvaluation = new PlayerEvaluation();
            $playerEvaluation->user_id = Auth::id();
            $playerEvaluation->player_grade_evaluation = $request->player_grade_evaluation;
            $playerEvaluation->head_coach_name = $request->head_coach_name;
            $playerEvaluation->head_coach_phone_landline = $request->head_coach_phone_landline;
            $playerEvaluation->head_coach_phone_cell = $request->head_coach_phone_cell;
            $playerEvaluation->head_coach_email = $request->head_coach_email;
            $playerEvaluation->head_coach_or_team_twitter_link = $request->head_coach_or_team_twitter_link;
            $playerEvaluation->name = $request->recruiting_cordinator_name;
            $playerEvaluation->phone_mumber = $request->recruiting_cordinator_phone_number;
            $playerEvaluation->email = $request->recruiting_cordinator_email;
            $playerEvaluation->premium_top_position = $request->premium_top_position;
            $playerEvaluation->premium_rank = $request->premium_rank;
            $playerEvaluation->evaluation = $request->evaluation;
            $playerEvaluation->best_game_film_from_past_season_and_why = $request->best_game_film_from_past_season_and_why;
            $playerEvaluation->best_players_on_your_team = $request->best_players_on_your_team;
            $playerEvaluation->best_player_you_faced_last_season = $request->best_player_you_faced_last_season;
            $playerEvaluation->why_do_you_want_to_play_college_football = $request->why_do_you_want_to_play_college_football;
            $playerEvaluation->save();
            Session::flash('message', 'This is a message!');
            return redirect()->back();
        }
    }
    public function addFriend(Request $request)
    {
        // return $request->player_id;

        $coachPlayer = new CoachPlayer();
        $coachPlayer->player_id = $request->player_id;
        $coachPlayer->coach_id = Auth::id();
        $coachPlayer->status = CoachPlayer::PENDDING;
        $coachPlayer->save();
        Session::flash('friend_request_send', 'This is a message!');
        return redirect()->back();
    }
    public function removeFriend(Request $request)
    {
        $coachPlayer = CoachPlayer::where('coach_id', Auth::id())
            ->where('player_id', $request->player_id)
            ->first();
        // dd($coachPlayer);
        if ($coachPlayer) {
            $coachPlayer->delete();
        }
        return redirect()->back();
    }
    public function premiumPayment()
    {
        return view('payment.index');
    }
}
