<div class="tab-pane fade show active" id="pills-BasicInfo" role="tabpanel" aria-labelledby="pills-BasicInfo-tab">
    <div class="userTableCustom mt4">
        <h1 class="mb1">Basic Info</h1>
         <form action="{{route('coach-basic-info')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Full Name:</label>
                <input type="text" name="full_name" value="{{$user->name}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>College or University:</label>
                <input type="text" name="college_university" value="{{$user->college_university}}">
            </div>

            <div class="col-lg-6 d-flex flex-column mt2">
                <label>EMAIL:</label>
                <input type="email" readonly value="{{$user->email}}">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2">
                <label>Phone:</label>
                <input type="text" name="phone" value="{{$user->phone}}">
            </div>
            <div class="col-lg-12 d-flex flex-column mt2">
                <label>Summer Football Camps:</label>
                <textarea name="summer_football_camps" id="" cols="30" rows="10" placeholder="Camps dates, Times and Location">{{$user->summer_football_camps}}</textarea>
            </div>

        </div>

        <h1 class="mb1 mt3">Social Links</h1>
        <div class="row">
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <i class="fa fa-twitter"></i>
                </div>
                <input type="text" value="{{$user->twitter_link}}" name="twitter_link">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <i class="fa fa-facebook-f"></i>
                </div>
                <input type="text" value="{{$user->fb_link}}" name="fb_link">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img you">
                <i class="fa fa-instagram"></i>
                </div>
                <input type="text" value="{{$user->instagram_link}}" name="instagram_link">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <i class="fa fa-snapchat-ghost"></i>
                </div>
                <input type="text" value="{{$user->snap_chat_link}}" name="snap_chat_link">
            </div>
        </div>

        <div class="userTableCustom mt3 saveBtnMain">
            <div class="col-lg-12 saveADmin d-flex justify-content-end">
                <button type="submit">Save</button>
            </div>
        </div>
    </form>
    </div>
</div>
