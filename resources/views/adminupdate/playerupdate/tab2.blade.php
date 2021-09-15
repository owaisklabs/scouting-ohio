<div class="tab-pane fade " id="pills-CombineResult" role="tabpanel" aria-labelledby="pills-CombineResult-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">Combine result</h1>
        <div class="row">
            <form method="POST" action="{{route('adminupdatesplayer_combine_result',$user->id)}}">
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
        </div>
    </div>
    <div class="userTableCustom mt3 saveBtnMain">
    <div class="col-lg-12 saveADmin d-flex justify-content-end">
        <button type="submit">Save</button>
    </div>
</form>
</div>
</div>
