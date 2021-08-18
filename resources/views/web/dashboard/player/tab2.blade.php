<div class="tab-pane fade " id="pills-CombineResult" role="tabpanel" aria-labelledby="pills-CombineResult-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">Combine result</h1>
        <div class="row">
            <form method="POST" action="{{route('combine-result')}}">
                @csrf
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>40 yard dash:</label>
                <input type="text" value="{{@$combibeReslut->ft_40_yard_dash}}" name="ft_40_yard_dash" >
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Timed by:</label>
                <input type="text" value="{{@$combibeReslut->timed_by}}" name="timed_by">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>20 yd Shuttle:</label>
                <input type="text" value="{{@$combibeReslut->ft_20_yd_shuttle}}" name="ft_20_yd_shuttle">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>100 Meter Dash:</label>
                <input type="text" value="{{@$combibeReslut->ft_100_meter_dash}}" name="ft_100_meter_dash">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Bench Max 1 rep:</label>
                <input type="text" value="{{@$combibeReslut->bench_max_1_rep}}" name="bench_max_1_rep">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Bench Reps at 185:</label>
                <input type="text" value="{{@$combibeReslut->bench_reps_at_185}}" name="bench_reps_at_185">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Vertical Jump:</label>
                <input type="text" value="{{@$combibeReslut->vertical_jump}}" name="vertical_jump">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Broad Jump:</label>
                <input type="text" value="{{@$combibeReslut->broad_jump}}" name="broad_jump">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Bench Reps at 225:</label>
                <input type="text" value="{{@$combibeReslut->bench_reps_at_225}}" name="bench_reps_at_225">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Squat:</label>
                <input type="text" value="{{@$combibeReslut->squat}}" name="squat">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Powerclean:</label>
                <input type="text" value="{{@$combibeReslut->power_clean}}" name="power_clean">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Deadlift:</label>
                <input type="text" value="{{@$combibeReslut->dead_lift}}" name="dead_lift">
            </div>

            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Football post season honors:</label>?
                <textarea name="football_post_season_honors" value="" id="" cols="30" rows="10">{{@$combibeReslut->football_post_season_honors}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Football Statics:</label>
                <textarea name="football_statics" value="" id="" cols="30" rows="10">{{@$combibeReslut->football_statics}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Other Sports and Athletic Honors:</label>
                <textarea name="other_sports_and_athletic_honors" value="" id="" cols="30" rows="10">{{@$combibeReslut->other_sports_and_athletic_honors}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Hobbies, Extracurricular activities:</label>
                <textarea name="Hobbies_extracurricular_activities" value="" id="" cols="30" rows="10">{{@$combibeReslut->Hobbies_extracurricular_activities}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Camp & combines:</label>
                <textarea name="Camp_combines" value="" id="" cols="30" rows="10">{{@$combibeReslut->Camp_combines}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>List College recruiting you:</label>
                <textarea name="list_college_recruiting_you" value="" id="" cols="30" rows="10">{{@$combibeReslut->list_college_recruiting_you}}</textarea>
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>List official college visits you will tak,/ have taken?:</label>
                <textarea name="list_official_college_visits_you_will_tak_have_taken" value="" id="" cols="30" rows="10">{{@$combibeReslut->list_official_college_visits_you_will_tak_have_taken}}</textarea>
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
