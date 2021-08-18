@csrf

<div class="modal-body row cghkl">
    {{-- <div class="form-group col-md-12">
        <div class="selecType wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" name="type">
            <label class="typeLabel">Select Type</label>
            <div class="chkboxes" style="display: flex;">
                <div style="margin-right: 20px; display: flex; align-items: center;">
                    <label for="isKicker" style="margin: 0px 5px 4px 0;">Kicker</label>
                    <input type="checkbox" name="isKicker" id="isKicker" class="isKicker mm" value="0">
                </div>

                <div style="margin-right: 20px; display: flex; align-items: center;">
                    <label for="isPunter" style="margin: 0px 5px 4px 0;">Punter</label>
                    <input type="checkbox" name="isPunter" id="isPunter" class="isPunter" value="0">
                </div>
                <div style="display: flex; align-items: center;">
                    <label for="isLongSnapper" style="margin: 0px 5px 4px 0;">Long Snapper</label>
                    <input type="checkbox" name="isLongSnapper" id="isLongSnapper" class="isLongSnapper" value="0">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- name -->
    <div class="form-group col-md-6">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter name" class="form-control name" required max="50">
    </div>

    <!-- email -->
    <div class="form-group col-md-6">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Enter email" class="form-control email" max="50">
    </div>
    <!-- password -->
    <div class="form-group col-md-6">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter password" class="form-control password" min=4>
    </div>


    <!-- type -->
    <div class="form-group col-md-6">
        <label for="">Type</label>
        <select name="type" class="form-control type type" required>
            <option value="Admin">Admin</option>
            <option value="Player">Player</option>
            <option value="high school coach">high school coach</option>
            <option value="college coach">College Coach</option>
        </select>
    </div>


    <div class="form-group col-md-6">
        <label for="">Status</label>
        <select name="user_status" class="form-control type user_status" required>
            <option value="1">Active</option>
            <option value="0">InActive</option>
        </select>
    </div>

</div>


