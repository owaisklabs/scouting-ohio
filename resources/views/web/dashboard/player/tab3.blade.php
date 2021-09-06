<div class="tab-pane fade " id="pills-Scholarship" role="tabpanel" aria-labelledby="pills-Scholarship-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">Awards</h1>
        <div class="row">
            <form method="POST" action="{{route('honor-award')}}">
                @csrf
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>Football post season honors:</label>
                    <textarea name="football_post_season_honors" value="" id="" cols="30" rows="10">{{@$honorAward->football_post_season_honors}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>Football Statistics:</label>
                    <textarea name="football_statics" value="" id="" cols="30" rows="10">{{@$honorAward->football_statics}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>Other Sports and Athletic Honors:</label>
                    <textarea name="other_sports_and_athletic_honors" value="" id="" cols="30" rows="10">{{@$honorAward->other_sports_and_athletic_honors}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>Hobbies, Extracurricular activities:</label>
                    <textarea name="Hobbies_extracurricular_activities" value="" id="" cols="30" rows="10">{{@$honorAward->hobbies_extracurricular_activities}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>Camp & combines:</label>
                    <textarea name="Camp_combines" value="" id="" cols="30" rows="10">{{@$honorAward->camp_combines}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>List College recruiting you:</label>
                    <textarea name="list_college_recruiting_you" value="" id="" cols="30" rows="10">{{@$honorAward->list_college_recruiting_you}}</textarea>
                </div>
                <div class="col-lg-12 d-flex flex-column mt2">
                    <label>List official college visits you will tak,/ have taken?</label>
                    <textarea name="list_official_college_visits_you_will_tak_have_taken" value="" id="" cols="30" rows="10">{{@$honorAward->list_official_college_visits_you_will_tak_have_taken}}</textarea>
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
