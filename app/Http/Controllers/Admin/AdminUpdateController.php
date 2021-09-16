<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicInfo;
use App\Models\AddtionalCoach;
use App\Models\CoachPlayer;
use App\Models\HonorAward;
use App\Models\MyLinks;
use App\Models\PlayerArticle;
use App\Models\PlayerBasicInfo;
use App\Models\PlayerCombineResult;
use App\Models\PlayerEvaluation;
use App\Models\PlayerLink;
use App\Models\PlayerPersonalInfo;
use App\Models\PlayerVideo;
use App\Models\ScholarshipOffer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AdminUpdateController extends Controller
{
    public function view_dashboard($id)
    {
        $fetchuser = User::findOrFail($id);
        $user = $fetchuser;
        if ($fetchuser->type == "high school coach" || $fetchuser->type == "college coach") {
            $addtionalCoachs = AddtionalCoach::where('user_id', $id)->get();
            return view('adminupdate.coachupdate.index', compact('user', 'addtionalCoachs'));
        } else {
            $basicInfo = PlayerBasicInfo::where('user_id', $id)->first();
            $combibeReslut = PlayerCombineResult::where('user_id', $id)->first();
            $honorAward = HonorAward::where('user_id', $id)->first();
            $academicInfo = AcademicInfo::where('user_id', $id)->first();
            // dd($academicInfo);
            $playerPersonalInfo = PlayerPersonalInfo::where('user_id', $id)->first();
            $playerEvaluation = PlayerEvaluation::where('user_id', $id)->first();

            $friends = CoachPlayer::where('player_id', $id)->get();
            $playerLink = PlayerLink::where('user_id', $id)->first();
            $playerVideos = PlayerVideo::where('user_id', $id)->get();
            $playerArticles = PlayerArticle::where('user_id', $id)->get();
            $Scholarship = ScholarshipOffer::where('user_id', $id)->get();

            return view('adminupdate.playerupdate.index', compact(
                'basicInfo',
                'user',
                'combibeReslut',
                'honorAward',
                'academicInfo',
                'playerPersonalInfo',
                'playerEvaluation',
                'playerLink',
                'playerVideos',
                'playerArticles',
                'Scholarship'
            ));
        }
    }

    public function adminupdates_coach_basicinfo(Request $request, $id)
    {
        $coachBasicInfo = User::find($id);
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

    public function adminupdates_addition_coaches(Request $request)
    {
        $url = request()->headers->get('referer');
        $id = substr($url, strrpos($url, '/') + 1);

        $addtionalCoach = new AddtionalCoach();
        $addtionalCoach->name = $request->name;
        $addtionalCoach->user_id = $id;
        $addtionalCoach->email = $request->email;
        $addtionalCoach->save();
        return redirect()->back();
    }

    public function adminupdates_update_addition_coaches(Request $request)
    {
        $addtionalCoach = AddtionalCoach::find($request->id);
        $addtionalCoach->name = $request->name;
        $addtionalCoach->email = $request->email;
        $addtionalCoach->save();
        return redirect()->back();
    }

    public function delete_aditional_coach(Request $request)
    {
        $deleteData = AddtionalCoach::find($request->id);
        return $deleteData->delete();
    }

    public function adminupdates_change_coach_password(Request $request, $id)
    {
        User::find($id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back();
    }

    public function adminupdates_player_basic_info(Request $request, $id)
    {
        $basicInfo = PlayerBasicInfo::where('user_id', $id)->first();
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
            $basicInfo->user_id = $id;
            $basicInfo->offer = $request->offer;
            $basicInfo->save();
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
            $basicInfo->user_id = $id;
            $basicInfo->offer = $request->offer;
            $basicInfo->save();
            return redirect()->back();
        }
    }

    public function adminupdates_player_combine_result(Request $request, $id)
    {
        $combineResult = PlayerCombineResult::where('user_id', $id)->first();
        if ($combineResult) {
            $combineResult->User_id = $id;
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
            return redirect()->back();
        } else {
            $combineResult = new PlayerCombineResult();
            $combineResult->User_id = $id;
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
            return redirect()->back();
        }
    }
    public function adminupdates_player_honor_awards(Request $request, $id)
    {
        $honorAward = HonorAward::where('user_id', $id)->first();
        if ($honorAward) {
            $honorAward->User_id = $id;
            $honorAward->football_post_season_honors = $request->football_post_season_honors;
            $honorAward->football_statics = $request->football_statics;
            $honorAward->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $honorAward->hobbies_extracurricular_activities = $request->Hobbies_extracurricular_activities;
            $honorAward->camp_combines = $request->Camp_combines;
            $honorAward->list_college_recruiting_you = $request->list_college_recruiting_you;
            $honorAward->list_official_college_visits_you_will_tak_have_taken = $request->list_official_college_visits_you_will_tak_have_taken;
            $honorAward->save();
            return redirect()->back();
        } else {
            $honorAward = new HonorAward();
            $honorAward->User_id = $id;
            $honorAward->football_post_season_honors = $request->football_post_season_honors;
            $honorAward->football_statics = $request->football_statics;
            $honorAward->other_sports_and_athletic_honors = $request->other_sports_and_athletic_honors;
            $honorAward->hobbies_extracurricular_activities = $request->Hobbies_extracurricular_activities;
            $honorAward->camp_combines = $request->Camp_combines;
            $honorAward->list_college_recruiting_you = $request->list_college_recruiting_you;
            $honorAward->list_official_college_visits_you_will_tak_have_taken = $request->list_official_college_visits_you_will_tak_have_taken;
            $honorAward->save();
            return redirect()->back();
        }
    }

    public function adminupdates_player_academic_info(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'transcript' => "sometimes|mimes:pdf,jpg,jpeg|max:10000",
                'attach_act_sat_result' => "sometimes|mimes:pdf,jpg,jpeg|max:10000",
                'football_bio' => "sometimes|mimes:pdf,jpg,jpeg|max:10000"
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $academicInfo = AcademicInfo::where('user_id', $id)->first();
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
            return redirect()->back();
        } else {
            $academicInfo = new AcademicInfo();
            $academicInfo->User_id = $id;
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
            return redirect()->back();
        }
    }

    public function adminupdates_player_personal_info(Request $request, $id)
    {
        $personalInfo = PlayerPersonalInfo::where('User_id', $id)->first();
        if ($personalInfo) {
            $personalInfo->User_id = $id;
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
            return redirect()->back();
        } else {
            $personalInfo = new PlayerPersonalInfo();
            $personalInfo->User_id = $id;
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
            return redirect()->back();
        }
    }

    public function adminupdates_player_scholarship_offer(Request $request, $id)
    {
        $fbs_collection = collect($request->fbs);
        $fcs_collection = collect($request->fcs);
        $walkin_collection = collect($request->walkOnOffers);
        $fbsJson = $fbs_collection->implode(',');
        $fcsJson=$fcs_collection->implode(',');
        $walkinJson=$walkin_collection->implode(',');
        $scholarshipOffer = ScholarshipOffer::where('user_id', $id)->get();
        if ($scholarshipOffer) {
            foreach ($scholarshipOffer as $item) {
                # code...
                $item = ScholarshipOffer::where('user_id', $id)->delete();
            }
        }
        if ($request->fbs) {
            foreach ($request->fbs as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = $id;
                $scholarshipOffer->FBS_division_1_colleges = $item;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges = null;
                $scholarshipOffer->FBS_division_1_college = $request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college = $request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = null;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->fcs_offer_json = $fcsJson;
                $scholarshipOffer->fbs_offers_json = $fbsJson;
                $scholarshipOffer->walkin_offer_json = $walkinJson;
                $scholarshipOffer->save();
            }
        }
        if ($request->fcs) {
            foreach ($request->fcs as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = $id;
                $scholarshipOffer->FBS_division_1_colleges = null;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges = $item;
                $scholarshipOffer->FBS_division_1_college = $request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college = $request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = null;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->fcs_offer_json = $fcsJson;
                $scholarshipOffer->fbs_offers_json = $fbsJson;
                $scholarshipOffer->walkin_offer_json = $walkinJson;
                $scholarshipOffer->save();
            }
        }
        if ($request->walkOnOffers) {
            // dd($request->walkOnOffers);
            foreach ($request->walkOnOffers as $item) {
                $scholarshipOffer = new ScholarshipOffer();
                $scholarshipOffer->user_id = $id;
                $scholarshipOffer->FBS_division_1_colleges = null;
                $scholarshipOffer->FCS_division_1aa_2_and_3_colleges = null;
                $scholarshipOffer->FBS_division_1_college = $request->fbs__division;
                $scholarshipOffer->division_FCS_division_1aa_2_and_3_college = $request->fcs_division;
                $scholarshipOffer->list_walk_wn_offers = $item;
                $scholarshipOffer->walk_on_committment = $request->walk_on_committment;
                $scholarshipOffer->fcs_offer_json = $fcsJson;
                $scholarshipOffer->fbs_offers_json = $fbsJson;
                $scholarshipOffer->walkin_offer_json = $walkinJson;
                $scholarshipOffer->save();
            }
        }
        return redirect()->back();
    }

    public function adminupdates_player_evaluation(Request $request, $id)
    {
        $playerEvaluation = PlayerEvaluation::where('user_id', $id)->first();
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
            return redirect()->back();
        } else {
            $playerEvaluation = new PlayerEvaluation();
            $playerEvaluation->user_id = $id;
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
            return redirect()->back();
        }
    }

    public function adminupdates_player_mylinks(Request $request, $id)
    {
        $myLinks = MyLinks::where('user_id', $id)->first();
        if ($myLinks) {
            $myLinks->User_id = $id;
            $myLinks->hudle = $request->hudle;
            $myLinks->youtube = $request->youtube;
            $myLinks->facebook = $request->facebook;
            $myLinks->twitter = $request->twitter;
            $myLinks->instagram = $request->instagram;
            $myLinks->snapchat = $request->snapchat;
            $myLinks->database_24_7 = $request->database_24_7;
            $myLinks->database_rivals = $request->database_rivals;
            $myLinks->save();
            $user = User::find($id);
            $user->twitter_link = $request->twitter;
            $user->save();
            return redirect()->back();
        } else {
            $myLinks = new MyLinks();
            $myLinks->User_id = $id;
            $myLinks->hudle = $request->hudle;
            $myLinks->youtube = $request->youtube;
            $myLinks->facebook = $request->facebook;
            $myLinks->twitter = $request->twitter;
            $myLinks->instagram = $request->instagram;
            $myLinks->snapchat = $request->snapchat;
            $myLinks->database_24_7 = $request->database_24_7;
            $myLinks->database_rivals = $request->database_rivals;
            $myLinks->save();
            $user = User::find($id);
            $user->twitter_link = $request->twitter;
            $user->save();
            return redirect()->back();
        }
    }

    public function adminupdates_player_password(Request $request, $id)
    {
        User::find($id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back();
    }
}
