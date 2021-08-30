<div class="tab-pane fade " id="pills-PersonalInfo" role="tabpanel" aria-labelledby="pills-PersonalInfo-tab">
    <div class="userTableCustom mt6">
        <!-- <h1 class="mb1">Official Transcripts</h1> -->
        <div class="row">
            <form action="{{route('personal-info')}}" method="POST">
                @csrf
            <!-- Personal Info -->
            <h2 class="mt4 mb1">Personal Info</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Email Address:</label>
                <input type="text" value="{{$user->email}}" name="email" readonly>
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Home Adress:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_home_address}}" name="player_home_address">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>City:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_city}}" name="player_city">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>State:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_state}}" name="player_state">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>ZIP cODE:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_zipcode}}" name="player_zipcode">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>cOUNTRY:</label>
                <div class="selectOp">
                    <input name="player_country" list="priv-county-drop" value="{{@$playerPersonalInfo->player_country}}" placeholder="County">
                    <datalist id="priv-county-drop">
                        <option value="Adams">Adams</option>
                        <option value="Allen">Allen</option>
                        <option value="Ashland">Ashland</option>
                        <option value="Ashtabula">Ashtabula</option>
                        <option value="Athens">Athens</option>
                        <option value="Auglaize">Auglaize</option>
                        <option value="Belmont">Belmont</option>
                        <option value="Brown">Brown</option>
                        <option value="Butler">Butler</option>
                        <option value="Carroll">Carroll</option>
                        <option value="Champaign">Champaign</option>
                        <option value="Clark">Clark</option>
                        <option value="Clermont">Clermont</option>
                        <option value="Clinton">Clinton</option>
                        <option value="Columbiana">Columbiana</option>
                        <option value="Coshocton">Coshocton</option>
                        <option value="Crawford">Crawford</option>
                        <option value="Cuyahoga">Cuyahoga</option>
                        <option value="Darke">Darke</option>
                        <option value="Defiance">Defiance</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Erie">Erie</option>
                        <option value="Fairfield">Fairfield</option>
                        <option value="Fayette">Fayette</option>
                        <option value="Franklin">Franklin</option>
                        <option value="Fulton">Fulton</option>
                        <option value="Gallia">Gallia</option>
                        <option value="Geauga">Geauga</option>
                        <option value="Greene">Greene</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Hamilton">Hamilton</option>
                        <option value="Hancock">Hancock</option>
                        <option value="Hardin">Hardin</option>
                        <option value="Harrison">Harrison</option>
                        <option value="Henry">Henry</option>
                        <option value="Highland">Highland</option>
                        <option value="Hocking">Hocking</option>
                        <option value="Holmes">Holmes</option>
                        <option value="Huron">Huron</option>
                        <option value="Jackson">Jackson</option>
                        <option value="Jefferson">Jefferson</option>
                        <option value="Knox">Knox</option>
                        <option value="Lake">Lake</option>
                        <option value="Lawrence">Lawrence</option>
                        <option value="Licking">Licking</option>
                        <option value="Logan">Logan</option>
                        <option value="Lorain">Lorain</option>
                        <option value="Lucas">Lucas</option>
                        <option value="Madison">Madison</option>
                        <option value="Mahoning">Mahoning</option>
                        <option value="Marion">Marion</option>
                        <option value="Medina">Medina</option>
                        <option value="Meigs">Meigs</option>
                        <option value="Mercer">Mercer</option>
                        <option value="Miami">Miami</option>
                        <option value="Monroe">Monroe</option>
                        <option value="Montgomery">Montgomery</option>
                        <option value="Morgan">Morgan</option>
                        <option value="Morrow">Morrow</option>
                        <option value="Muskingum">Muskingum</option>
                        <option value="Noble">Noble</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Paulding">Paulding</option>
                        <option value="Perry">Perry</option>
                        <option value="Pickaway">Pickaway</option>
                        <option value="Pike">Pike</option>
                        <option value="Portage">Portage</option>
                        <option value="Preble">Preble</option>
                        <option value="Putnam">Putnam</option>
                        <option value="Richland">Richland</option>
                        <option value="Ross">Ross</option>
                        <option value="Sandusky">Sandusky</option>
                        <option value="Scioto">Scioto</option>
                        <option value="Seneca">Seneca</option>
                        <option value="Shelby">Shelby</option>
                        <option value="Stark">Stark</option>
                        <option value="Summit">Summit</option>
                        <option value="Trumbull">Trumbull</option>
                        <option value="Tuscarawas">Tuscarawas</option>
                        <option value="Union">Union</option>
                        <option value="Van Wert">Van Wert</option>
                        <option value="Vinton">Vinton</option>
                        <option value="Warren">Warren</option>
                        <option value="Washington">Washington</option>
                        <option value="Wayne">Wayne</option>
                        <option value="Williams">Williams</option>
                        <option value="Wood">Wood</option>
                        <option value="Wyandot">Wyandot</option>
                    </datalist>
                    {{-- <i class="fa fa-angle-down"></i> --}}
                </div>
                {{-- <input type="text" value="{{@$playerPersonalInfo->player_country}}" name="player_country"> --}}
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>cELL pHONE nuMBER:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_phone_number}}" name="player_phone_number">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>sECONDARY nUMBER:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_secondry_number}}" name="player_secondry_number">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>dATE oF bIRTH:</label>
                <input type="text" value="{{@$playerPersonalInfo->player_dob}}" name="player_dob">
            </div>

            <!-- mALE pARENTS -->
            <h2 class="mt4 mb1">mALE pARENTS OR gUARDIANS</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>nAME:</label>
                <input type="text" value="{{@$playerPersonalInfo->male_parent_name}}" name="male_parent_name">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>pHONE:</label>
                <input type="text" value="{{@$playerPersonalInfo->male_parent_phone}}" name="male_parent_phone">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Email:</label>
                <input type="text" value="{{@$playerPersonalInfo->male_parent_email}}" name="male_parent_email">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Occupation:</label>
                <input type="text" value="{{@$playerPersonalInfo->male_parent_occupation}}" name="male_parent_occupation">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>ALMA Mater:</label>
                <input type="text" value="{{@$playerPersonalInfo->male_parent_alma_mater}}" name="male_parent_alma_mater">
            </div>
            <h2 class="mt4 mb1">FemALE  pARENTS OR gUARDIANS</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>nAME:</label>
                <input type="text" value="{{@$playerPersonalInfo->female_parent_name}}" name="female_parent_name">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>pHONE:</label>
                <input type="text" value="{{@$playerPersonalInfo->female_parent_phone}}" name="female_parent_phone">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Email:</label>
                <input type="text" value="{{@$playerPersonalInfo->female_parent_email}}" name="female_parent_email">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Occupation:</label>
                <input type="text" value="{{@$playerPersonalInfo->female_parent_occupation}}" name="female_parent_occupation">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>ALMA Mater:</label>
                <input type="text" value="{{@$playerPersonalInfo->list_official_college_visits_you_will_tak}}" name="list_official_college_visits_you_will_tak">
            </div>

            <div class="col-lg-12 d-flex flex-column mt4 ">
                <label>List official college visits you will tak,/ have taken:</label>
                <textarea name="list_official_college_visits_you_will_tak" id="" cols="30" rows="10">{{@$playerPersonalInfo->list_official_college_visits_you_will_tak}}</textarea>
            </div>
        </div>
    </div>
    <div class="userTableCustom mt3 saveBtnMain">
        <div class="col-lg-12 saveADmin d-flex justify-content-end">
            <button>Save</button>
        </div>
    </div>
</form>
</div>
