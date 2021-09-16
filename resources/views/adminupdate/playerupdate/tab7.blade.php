<div class="tab-pane fade " id="pills-PEvaluation" role="tabpanel" aria-labelledby="pills-PEvaluation-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">Player Evaluation</h1>
        <div class="row">
            <form action="{{route('adminupdatesplayer_player_evaluation',$user->id)}}" method="POST">
                @csrf
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Player Grade Evaluation:</label>
                <input type="text" name="player_grade_evaluation" value="{{$playerEvaluation->player_grade_evaluation?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Head Coach Name:</label>
                <input type="text" name="head_coach_name" value="{{$playerEvaluation->head_coach_name?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Head Coach Phone (SC or Co) Landline:</label>
                <input type="number" name="head_coach_phone_landline" value="{{$playerEvaluation->head_coach_phone_landline?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Head Coach Phone Cell:</label>
                <input type="number" name="head_coach_phone_cell" value="{{$playerEvaluation->head_coach_phone_cell?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Head COach Email:</label>
                <input type="email" name="head_coach_email" value="{{$playerEvaluation->head_coach_email?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Head coach or team Twitter Link:</label>
                <input type="text" name="head_coach_or_team_twitter_link" value="{{$playerEvaluation->head_coach_or_team_twitter_link?? " "}}">
            </div>

            <!-- Recruiting Cordinator -->
            <h2 class="mt4 mb1">Recruiting Cordinator or assistant coach</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Name:</label>
                <input type="text" name="recruiting_cordinator_name" value="{{$playerEvaluation->name?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Phone Number:</label>
                <input type="number" name="recruiting_cordinator_phone_number" value="{{$playerEvaluation->phone_mumber?? " "}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Email:</label>
                <input type="email" name="recruiting_cordinator_email" value="{{$playerEvaluation->email?? " "}}">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Premium Top Position:</label>
                {{-- <input type="text" value="{{$playerEvaluation->premium_top_position?? " "}}" name="premium_top_position"> --}}
                <div class="selectOp">
                    <input name="premium_top_position" value="{{$playerEvaluation->premium_top_position?? " "}}" list="priv-position-drop" placeholder="Premium Top Position">
                    <datalist id="priv-position-drop">
                        <option value="TOP QB-Quarterback">TOP QB-Quarterback</option>
                        <option value="TOP RB-Running Back">TOP RB-Running Back</option>
                        <option value="TOP OL - Offensive Line">TOP OL - Offensive Line</option>
                        <option value="TOP TE-Tight End">TOP TE-Tight End</option>
                        <option value="TOP WR-Wide Receiver">TOP WR-Wide Receiver</option>
                        <option value="TOP DE-Defensive End">TOP DE-Defensive End</option>
                        <option value="TOP DT- Defensive Tackle/Nose Man">TOP DT- Defensive Tackle/Nose Man
                        </option>
                        <option value="TOP LB - Linebacker">TOP LB - Linebacker</option>
                        <option value="TOP FS/SS - Safety">TOP FS/SS - Safety</option>
                        <option value="TOP DB-Cornerback">TOP DB-Cornerback</option>
                        <option value="TOP ATH-Athlete">TOP ATH-Athlete</option>
                        <option value="TOP P/K-Kicker/Punter">TOP P/K-Kicker/Punter</option>
                        <option value="TOP H-Back">TOP H-Back</option>
                        <option value="TOP Long Snapper">TOP Long Snapper</option>
                        <option value="TOP Fullback">TOP Fullback</option>

                    </datalist>
                    {{-- <i class="fa fa-angle-down"></i> --}}
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Premium Rank:</label>
                <input type="text" value="{{$playerEvaluation->premium_rank?? " "}}" name="premium_rank">
            </div>
            <div class="col-lg-12 d-flex flex-column mt2 ">
                <label>Evaluation:</label>
                <input type="text" value="{{$playerEvaluation->evaluation?? " "}}" name="evaluation">
            </div>
            <div class="col-lg-12 d-flex flex-column mt2 ">
                <label>Best Game film from past season and why?</label>
                <textarea name="best_game_film_from_past_season_and_why" id="" cols="30" rows="10">{{$playerEvaluation->best_game_film_from_past_season_and_why?? " "}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2 ">
                <label>Best Players on your Team? ( name & Class of):</label>
                <textarea name="best_players_on_your_team" id="" cols="30" rows="10">{{$playerEvaluation->best_players_on_your_team?? " "}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2 ">
                <label>Best Player You Faced last season?(name & class Of):</label>
                <textarea name="best_player_you_faced_last_season" id="" cols="30" rows="10">{{$playerEvaluation->best_player_you_faced_last_season?? " "}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2 ">
                <label>Why do you want to play college football? what should college coaches know?</label>
                <textarea name="why_do_you_want_to_play_college_football" id="" cols="30" rows="10">{{$playerEvaluation->why_do_you_want_to_play_college_football?? " "}}</textarea>
            </div>
        </div>
    </div>
    <div class="userTableCustom mt3 saveBtnMain">
        <div class="col-lg-12 saveADmin d-flex justify-content-end">
            <button type="submit">Save</button>
        </div>
    </form>
    </div>
</div>
