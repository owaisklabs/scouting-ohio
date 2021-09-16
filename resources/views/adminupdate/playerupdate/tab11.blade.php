<div class="tab-pane fade" id="pills-ChangePassword" role="tabpanel" aria-labelledby="pills-ChangePassword-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb1">
        Change Password
        </h1>
        <div class="row">
            <form action="{{route('adminupdatesplayer_password',$user->id)}}" method="POST">
                @csrf
            <div class="col-lg-6 d-flex flex-column mt1 ">
                <input required type="password" name="new_password" placeholder="New Password">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 d-flex flex-column mt1 ">
                <input required type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 saveADmin d-flex justify-content-end mt2">
                <button>Save</button>
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
