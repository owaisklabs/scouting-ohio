<div class="tab-pane fade " id="pills-Academic" role="tabpanel" aria-labelledby="pills-Academic-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">Academic Info</h1>
        <div class="row">
            <form action="{{route('adminupdatesplayer_academic_info',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>GPA:</label>
                <input type="text" value="{{@$academicInfo->gpa}}" name="gpa" id="">
            </div>`
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>ACT :</label>
                <input type="text" value="{{@$academicInfo->act}}" name="act" id="">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Class Rank:</label>
                <input type="text" value="{{@$academicInfo->class_rank}}" name="class_rank" id="">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>Transcript:</label>
                <div class="d-flex align-items-center">
                    <button type="button" class="uploadBtn uploadAble Transcript">Upload</button> <span class="TranscriptSpan"></span>
                    <input type="file" name="transcript" class="TranscriptInp" value=""  hidden>
                    @if ($errors->has('transcript'))
                        <div class="error">{{ $errors->first('transcript') }}</div>
                    @endif

                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>aTTACH act, sat rESULTS:</label>
                <div class="d-flex align-items-center">
                    <button type="button" class="uploadBtn uploadAble aTTACHact">Upload</button> <span class="aTTACHactSpan"></span>
                    <input type="file" name="attach_act_sat_result" class="aTTACHactInp" hidden>
                    @if ($errors->has('attach_act_sat_result'))
                    <div class="error">{{ $errors->first('attach_act_sat_result') }}</div>
                @endif
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <label>fOOTbALL bIO:</label>
                <div class="d-flex align-items-center">
                    <button type="button" class="uploadBtn uploadAble fOOTbALLbIO">Upload</button> <span class="fOOTbALLbIOSpan"></span>
                    <input type="file" name="football_bio" class="fOOTbALLbIOInp" hidden>
                    @if ($errors->has('football_bio'))
                    <div class="error">{{ $errors->first('football_bio') }}</div>
                @endif
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>DESIRED MAJOR IN COLLEGE:</label>
                <input type="text" value="{{@$academicInfo->desire_majro_in_college}}" name="desire_majro_in_college" id="">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>sat:</label>
                <input type="text" value="{{@$academicInfo->sat}}" name="sat" id="">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Clearing House Id:</label>
                <input type="text" value="{{@$academicInfo->clearing_house_id}}" name="clearing_house_id" id="">
            </div>
        </div>
    </div>
    <div class="userTableCustom mt3 saveBtnMain">
        <div class="col-lg-12 saveADmin d-flex justify-content-end">
            <button>Save</button>
        </div>
    </form>
    </div>
</div>


