@extends('web.layouts.master')

@section('content')

<div class="signUpMain mainDiv text-center">
    <div class="col-lg-12 text-center mt5">
        <h1>Let’s Get You Sign Up</h1>
        <p class="mb3 vNone">Sign into Your Account</p>
    </div>
    <div class="pDiv">
        <form method="POST" action="{{ route('user-register') }}">
            @csrf
            <div class="col-lg-4 offset-lg-4 mt1">
                <select name="type" id="kchbhe">
                    <option value="college coach" @if ($role==='College Coach' ) selected @endif>College Caoch</option>
                    <option value="high school coach" @if ($role==='School Coach' ) selected @endif>High School Coach
                    </option>
                    <option value="Player" @if ($role==='Player' ) selected @endif>Player</option>
                </select>
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="text" placeholder="Full Name" name="name" required>
            </div>

            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="email" placeholder="Email" name="email" required>
                @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
                @endif
            </div>
            {{--  --}}
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input list="class-off" name="class_off" placeholder="CLASS OFF" value="">
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
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="text" placeholder="Home Address" name="homeAddress" class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="text" placeholder="City" name="city" class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="text" placeholder="State" name="state" class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="text" placeholder="Zip Code" name="zip_code" class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input name="player_country" list="priv-county-drop"
                    placeholder="County">
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

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="number" placeholder='Cell Phone Number "best number to text"' name="number" class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="text" placeholder="Home Phone or secondary Number" name="testt"  class="forRequired">

            </div>
            <div class="col-lg-4 offset-lg-4 mt1 textFeildHide">
                <input type="date" placeholder="Date of Birth" name="DOB" class="forRequired">

            </div>



            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="password" placeholder="Passsword" name="password" class="forRequired">
                @if ($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="password" placeholder="Password Confirmation" name="password_confirmation" class="forRequired">
                @if ($errors->has('password_confirmation'))
                <div class="error">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>


            <div class="col-lg-4 offset-lg-4 mt2">
                <div class="remember">
                    <label class="container2">
                        <span>Create an account means you’re okay with our <br />
                            <a href="">Terms & Services, Privacy Policy.</a></span>
                        <input checked type="checkbox" name="testt">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 mt3">
                <button type="submit">Sign Up</button>
            </div>
        </form>

        <div class="col-lg-4 offset-lg-4 mt2 ">
            <div class="newHere text-center">
                Already have a account? <a href="login.php">Sign in</a>
            </div>
        </div>
    </div>
</div>
<script>
    var sites = {!!json_encode($role) !!};

    $(document).ready(function () {
        if (sites != 'Player') {
            console.log('true')
            $('.textFeildHide').hide()
        } else {
            console.log('false')
            $('.textFeildHide').show()

        }
    });

    // $('.textFeildHide').hide()
    $('#kchbhe').change((e) => {
        console.log('test run', e.target.value)
        if (e.target.value == 'Player') {
            $('.textFeildHide').show()
            // $('.forRequired').attr('required','true')
        } else {
            $('.textFeildHide').hide()
            // $('.forRequired').removeAttr('required');​​​​​
        }
    })

</script>
@endsection
