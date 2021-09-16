<div class="tab-pane fade show active" id="pills-BasicInfo" role="tabpanel" aria-labelledby="pills-BasicInfo-tab">
    <div class="userTableCustom mt6">
        <form method="POST" action="{{route('basic-info')}}">
            @csrf
            <h1 class="mb1">Basic Info</h1>
            <div class="row">
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Full Name:</label>
                    <input type="text" value="{{@$user->name}}" name="full_name">
                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Best College Poition:</label>
                    <input type="text" value="{{@$basicInfo->best_college_poition}}" name="best_college_poition">
                </div>

                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>High School:</label>
                    {{-- <input type="text" value="{{@$basicInfo->high_school}}" name="high_school"> --}}
                    <select name="high_school" id="">
                        @foreach ($highSchhol as $item)
                        <option value="{{$item->id}}">{{$item->high_school}}</option>
                        @endforeach

                    </select>

                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Offensive:</label>
                    {{-- <input type="text" value="{{@$basicInfo->high_school_defensive}}" name="high_school_defensive">
                    --}}
                    <input list="offens-drop" name="offensive" value="{{@$basicInfo->offensive}}"
                        placeholder="OFFENSIVE">
                    <datalist id="offens-drop">
                        <option value="Quarterback">Quarterback</option>
                        <option value="Running back">Running back</option>
                        <option value="Wide Receiver">Wide Receiver</option>
                        <option value="Tight End">Tight End</option>
                        <option value="Fullback">Fullback</option>
                        <option value="H-back">H-back</option>
                        <option value="Tackle">Tackle</option>
                        <option value="Guard">Guard</option>
                        <option value="Center">Center</option>
                        <option value="Athlete">Athlete</option>
                    </datalist>
                </div>

                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Class Of:</label>
                    {{-- <input type="text" value="{{@$basicInfo->class_off}}" name="class_off"> --}}
                    <input list="class-off" name="class_off" placeholder="CLASS OFF" value="{{@$basicInfo->class_off}}">
                    <datalist id="class-off">
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </datalist>
                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Secondary Offensive:</label>
                    {{-- <input type="text" value="{{@$basicInfo->secondry_offensive}}" name="secondry_offensive"> --}}
                    <input list="sec-offensive-drop" name="secondry_offensive"
                        value="{{@$basicInfo->secondry_offensive}}" placeholder="SECONDARY OFFENSIVE">
                    <datalist id="sec-offensive-drop">
                        <option value="Quarterback">Quarterback</option>
                        <option value="Running back">Running back</option>
                        <option value="Wide Receiver">Wide Receiver</option>
                        <option value="Tight End">Tight End</option>
                        <option value="Fullback">Fullback</option>
                        <option value="H-back">H-back</option>
                        <option value="Tackle">Tackle</option>
                        <option value="Guard">Guard</option>
                        <option value="Center">Center</option>
                        <option value="Athlete">Athlete</option>
                    </datalist>
                </div>

                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Jersey Number:</label>
                    <input type="number" value="{{@$basicInfo->jersey_number}}" name="jersey_number">
                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>DEFENSIVE:</label>
                    {{-- <input type="text" value="{{@$basicInfo->jersey_defensive}}" name="jersey_defensive"> --}}
                    <input list="defence-drop" name="defensive" placeholder="DEFENSIVE"
                        value="{{@$basicInfo->defensive}}">
                    <datalist id="defence-drop">
                        <option value="Defensive End">Defensive End</option>
                        <option value="Defensive Tackle">Defensive Tackle</option>
                        <option value="Outside Linebacker">Outside Linebacker</option>
                        <option value="Inside Linebacker">Inside Linebacker</option>
                        <option value="Cornerback">Cornerback</option>
                        <option value="Cornerback">Cornerback</option>
                        <option value="Strong Safety">Strong Safety</option>
                        <option value="Free Safety">Free Safety</option>
                        <option value="Athlete">Athlete</option>
                    </datalist>
                </div>

                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Height:</label>
                    <input list="height-drop" name="height" placeholder="Height"
                        value="{{@$basicInfo->height}}">
                    <datalist id="height-drop">
                        <option value="4′ 1″"></option>
                        <option value="4′ 2″"></option>
                        <option value="4′ 3″"></option>
                        <option value="4′ 4″"></option>
                        <option value="4′ 5″"></option>
                        <option value="4′ 6″"></option>
                        <option value="4′ 7″"></option>
                        <option value="4′ 8″"></option>
                        <option value="4′ 9″"></option>
                        <option value="4′ 10″"></option>
                        <option value="4′ 11″"></option>
                        <option value="5′ 0″"></option>
                        <option value="5′ 1″"></option>
                        <option value="5′ 2″"></option>
                        <option value="5′ 3″"></option>
                        <option value="5′ 4″"></option>
                        <option value="5′ 5″"></option>
                        <option value="5′ 6″"></option>
                        <option value="5′ 7″"></option>
                        <option value="5′ 8″"></option>
                        <option value="5′ 10″"></option>
                        <option value="5′ 11″"></option>
                        <option value="6′ 0″"></option>
                        <option value="6′ 1″"></option>
                        <option value="6′ 2″"></option>
                        <option value="6′ 3″"></option>
                        <option value="6′ 4″"></option>
                        <option value="6′ 5″"></option>
                        <option value="6′ 6″"></option>
                        <option value="6′ 7″"></option>
                        <option value="6′ 9″"></option>
                        <option value="6′ 10″"></option>
                        <option value="6′ 11″"></option>
                        <option value="7′ 0″"></option>
                    </datalist>
                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Secondary DEFENSIVE:</label>
                    {{-- <input type="text" value="{{@$basicInfo->secondry_defensive}}" name="secondry_defensive"> --}}
                    <input list="sec-defence-drop" name="secondry_defensive" value="{{@$basicInfo->secondry_defensive}}"
                        placeholder="SECONDARY DEFENSIVE">
                    <datalist id="sec-defence-drop">
                        <option value="Defensive End">Defensive End</option>
                        <option value="Defensive Tackle">Defensive Tackle</option>
                        <option value="Outside Linebacker">Outside Linebacker</option>
                        <option value="Inside Linebacker">Inside Linebacker</option>
                        <option value="Cornerback">Cornerback</option>
                        <option value="Cornerback">Cornerback</option>
                        <option value="Strong Safety">Strong Safety</option>
                        <option value="Free Safety">Free Safety</option>
                        <option value="Athlete">Athlete</option>
                    </datalist>
                </div>

                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Weight (lbs):</label>
                    <input type="text" value="{{@$basicInfo->weight}}" name="weight">
                </div>
                <div class="col-lg-6 d-flex flex-column mt2">
                    <label>Special Team Position:</label>
                    {{-- <input type="text" value="{{@$basicInfo->special_team_position}}" name="special_team_position">
                    --}}
                    <input list="team-pos" name="special_team_position" value="{{@$basicInfo->special_team_position}}"
                        placeholder="Special Team Position">
                    <datalist id="team-pos">
                        <option value="Kicker">Kicker</option>
                        <option value="Punter">Punter</option>
                        <option value="Long Snapper">Long Snapper</option>
                        <option value="Kick Returner">Kick Returner</option>
                    </datalist>
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
<script>
    @if(Session::has('message'))
    // console.log('kdkdkdk')
    swal({
        icon: "success",
        text: "Information Saved"
    });
    @endif

</script>
