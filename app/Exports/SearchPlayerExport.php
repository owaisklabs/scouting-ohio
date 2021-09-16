<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SearchPlayerExport implements  FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  Session::get('exportPlayer');
    }
    public function map($registration) : array {
        // dd($registration->personalInfo->player_state);
        return [
            $registration->id,
            $registration->name,
            $registration->email,
            $registration->type,
            $registration->user_status,
            $registration->created_at,
            $registration->is_premium,
            //  basic Info
            $registration->basicInfo->fullname ?? "-",
            $registration->basicInfo->best_college_poition ?? "-",
            $registration->basicInfo->high_school ?? "-",
            $registration->basicInfo->offensive ?? "-",
            $registration->basicInfo->class_off ?? "-",
            $registration->basicInfo->secondry_offensive ?? "-",
            $registration->basicInfo->jersey_number ?? "-",
            $registration->basicInfo->defensive ?? "-",
            $registration->basicInfo->height ?? "-",
            $registration->basicInfo->weight ?? "-",
            $registration->basicInfo->special_team_position ?? "-",
            //  Combine reslut
            $registration->combineResult->ft_40_yard_dash ?? "-",
            $registration->combineResult->timed_by ?? "-",
            $registration->combineResult->ft_20_yd_shuttle ?? "-",
            $registration->combineResult->ft_100_meter_dash ?? "-",
            $registration->combineResult->bench_max_1_rep ?? "-",
            $registration->combineResult->bench_reps_at_185 ?? "-",
            $registration->combineResult->vertical_jump ?? "-",
            $registration->combineResult->broad_jump ?? "-",
            $registration->combineResult->bench_reps_at_225 ?? "-",
            $registration->combineResult->squat ?? "-",
            $registration->combineResult->power_clean ?? "-",
            $registration->combineResult->dead_lift ?? "-",
            // $registration->combineResult->football_post_season_honors ?? "-",
            // $registration->combineResult->football_statics ?? "-",
            // $registration->combineResult->other_sports_and_athletic_honors ?? "-",
            // $registration->combineResult->Hobbies_extracurricular_activities ?? "-",
            // $registration->combineResult->Camp_combines ?? "-",
            // $registration->combineResult->list_college_recruiting_you ?? "-",
            // $registration->combineResult->list_official_college_visits_you_will_tak_have_taken ?? "-",

            // Honor Award
            $registration->honorAward->football_post_season_honors ?? "-",
            $registration->honorAward->football_statics ?? "-",
            $registration->honorAward->other_sports_and_athletic_honors ?? "-",
            $registration->honorAward->Hobbies_extracurricular_activities ?? "-",
            $registration->honorAward->Camp_combines ?? "-",
            $registration->honorAward->list_college_recruiting_you ?? "-",
            $registration->honorAward->list_official_college_visits_you_will_tak_have_taken ?? "-",
            //academic Info
            $registration->academicInfo->gpa ?? "-",
            $registration->academicInfo->act ?? "-",
            $registration->academicInfo->class_rank ?? "-",
            $registration->academicInfo->desire_majro_in_college ?? "-",
            $registration->academicInfo->sat ?? "-",
            $registration->academicInfo->clearing_house_id ?? "-",
            $registration->academicInfo->hobbies_extracurricular_activities ?? "-",
            // personal info
            $registration->personalInfo->player_home_address ?? "-",
            $registration->personalInfo->player_city ?? "-",
            $registration->personalInfo->player_state ?? "-",
            $registration->personalInfo->player_zipcode ?? "-",
            $registration->personalInfo->player_country ?? "-",
            $registration->personalInfo->player_phone_number ?? "-",
            $registration->personalInfo->player_secondry_number ?? "-",
            $registration->personalInfo->player_dob ?? "-",
            $registration->personalInfo->male_parent_name ?? "-",
            $registration->personalInfo->male_parent_phone ?? "-",
            $registration->personalInfo->male_parent_email ?? "-",
            $registration->personalInfo->male_parent_occupation ?? "-",
            $registration->personalInfo->male_parent_alma_mater ?? "-",
            $registration->personalInfo->female_parent_name ?? "-",
            $registration->personalInfo->female_parent_phone ?? "-",
            $registration->personalInfo->female_parent_email ?? "-",
            $registration->personalInfo->female_parent_occupation ?? "-",
            $registration->personalInfo->female_parent_alma_mater ?? "-",
            $registration->personalInfo->list_official_college_visits_you_will_tak ?? "-",
            // Player Evaluation
            $registration->playerEvaluation->player_grade_evaluation ?? "-",
            $registration->playerEvaluation->head_coach_name ?? "-",
            $registration->playerEvaluation->head_coach_phone_landline ?? "-",
            $registration->playerEvaluation->head_coach_phone_cell ?? "-",
            $registration->playerEvaluation->head_coach_email ?? "-",
            $registration->playerEvaluation->head_coach_or_team_twitter_link ?? "-",
            $registration->playerEvaluation->name ?? "-",
            $registration->playerEvaluation->phone_mumber ?? "-",
            $registration->playerEvaluation->email ?? "-",
            $registration->playerEvaluation->premium_top_position ?? "-",
            $registration->playerEvaluation->premium_rank ?? "-",
            $registration->playerEvaluation->evaluation ?? "-",
            $registration->playerEvaluation->best_game_film_from_past_season_and_why ?? "-",
            $registration->playerEvaluation->best_players_on_your_team ?? "-",
            $registration->playerEvaluation->best_player_you_faced_last_season ?? "-",
            $registration->playerEvaluation->why_do_you_want_to_play_college_football ?? "-",
            // user links
            $registration->userLink->hudle ?? "-",
            $registration->userLink->youtube ?? "-",
            $registration->userLink->facebook ?? "-",
            $registration->userLink->twitter ?? "-",
            $registration->userLink->instagram ?? "-",
            $registration->userLink->snapchat ?? "-",
            $registration->userLink->database_24_7 ?? "-",
            $registration->userLink->database_rivals ?? "-",
            // scholoar ship offer

            $registration->scholarshipOffer[0]->fbs_offers_json?? "-",
            $registration->scholarshipOffer[0]->FBS_division_1_college?? "-",
            $registration->scholarshipOffer[0]->fcs_offer_json?? "-",
            $registration->scholarshipOffer[0]->division_FCS_division_1aa_2_and_3_college?? "-",
            $registration->scholarshipOffer[0]->walkin_offer_json?? "-",
            $registration->scholarshipOffer[0]->walk_on_committment?? "-",
        ] ;


    }

    public function headings() : array {
        return [
           'Id',
           'Name',
           'Email',
           'Type',
           'user status',
           'created at',
           'is premium',
        //    basic info
           'fullname',
           'best college poition',
           'high school',
           'offensive',
           'class off',
           'secondry offensive',
           'jersey number',
           'defensive',
           'height',
           'weight',
           'special team position',
        //    combine result
           'ft 40 yard dash',
           'timed by',
           'ft 20 yd shuttle',
           'ft 100 meter dash',
           'bench max 1 rep',
           'bench reps at 185',
           'vertical jump',
           'broad jump',
           'bench reps at 225',
           'squat',
           'power clean',
           'dead lift',
        //    'football post season honors',
        //    'football statics',
        //    'other sports and athletic honors',
        //    'Hobbies extracurricular activities',
        //    'Camp combines',
        //    'list college recruiting you',
        //    'list official college visits you will tak have taken',
        // Honor Award
           'football post season honors',
           'football statics',
           'other sports and athletic honors',
           'Hobbies extracurricular activities',
           'Camp combines',
           'list college recruiting you',
           'list official college visits you will tak have taken',
        //academic Info
           'gpa',
           'act',
           'class rank',
           'desire majro in college',
           'sat',
           'clearing house id',
           'hobbies extracurricular activities',
        //    personal Info
            'player home address',
            'player city',
            'player state',
            'player zipcode',
            'player county',
            'player phone number',
            'player secondry number',
            'player dob',
            'male parent name',
            'male parent phone',
            'male parent email',
            'male parent occupation',
            'male parent alma mater',
            'female parent name',
            'female parent phone',
            'female parent email',
            'female parent occupation',
            'female parent alma mater',
            'list official college visits you will tak',
            // player evaluation
            'player grade evaluation',
            'head coach name',
            'head coach phone landline',
            'head coach phone cell',
            'head coach email',
            'head coach or team twitter link',
            'Recruiting name',
            'Recruiting phone mumber',
            'Recruiting email',
            'premium top position',
            'premium rank',
            'evaluation',
            'best game film from past season and why',
            'best players on your team',
            'best player you faced last season',
            'why do you want to play college football',
            // user links
            'hudle link',
            'youtube link',
            'facebook link',
            'twitter handle',
            'instagram link',
            'snapchat link',
            'database 24 7 link',
            'database rivals link',
            // player evalution
            'D1 FBS Offers',
            'D1 FBS Commitments',
            'FCS D2 D3 Offers	',
            'FCS D2 Commitments',
            'Walk On Offers',
            'Walk On Commitments
            ',

        ] ;
    }
}
