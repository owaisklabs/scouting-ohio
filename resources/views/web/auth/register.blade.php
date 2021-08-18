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
                    <option value="college coach"  @if ($role === 'College Coach') selected @endif>College Caoch</option>
                    <option value="high school coach" @if ($role === 'School Coach'  ) selected @endif>High School Coach</option>
                    <option value="player"  @if ($role === 'Player') selected @endif>Player</option>
                </select>
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="text" placeholder="Full Name" name="name" required>
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="password" placeholder="Passsword" name="password" required>
            </div>
            <div class="col-lg-4 offset-lg-4 mt1">
                <input type="password" placeholder="Password Confirmation" name="password_confirmation" required>
            </div>
            {{-- <div class="col-lg-4 offset-lg-4 mt1">
                <input type="text" placeholder="Username" name="password_confirmation" required>
            </div> --}}
            <div class="col-lg-8 showPackages offset-lg-2 mt2">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="pack1" class="packageCard" >
                            <input type="radio" id="pack1"  name="pkgInp" hidden value="monthly">
                            <div class="packji">
                                <div>Monthly</div>
                                <div>$500</div>
                                <div>Per Month</div>
                            </div>
                        </label>
                    </div>
                    <div class="col-lg-4">
                        <label for="pack2" class="packageCard">
                            <input type="radio" id="pack2"  name="pkgInp" hidden value="annual">
                            <div class="packji">
                                <div>Annual</div>
                                <div>$500</div>
                                <div>Per Month</div>
                            </div>
                        </label>
                    </div>
                    <div class="col-lg-4">
                        <label for="pack3" class="packageCard" >
                            <input type="radio" id="pack3"  name="pkgInp" hidden value="lifetime">
                            <div class="packji">
                                <div>Lifetime</div>
                                <div>$500</div>
                                <div>Per Month</div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 mt2">
                <div class="remember">
                    <label class="container2">
                        <span>Create an account means you’re okay with our <br/>
                        <a href="">Terms & Services, Privacy Policy.</a></span>
                        <input checked type="checkbox" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 mt3">
                <button type="submit" >Sign Up</button>
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
    var aplha ='player'
    $('.showPackages').css('display','none')
    $('#kchbhe').change((e)=>{

        aplha=e.target.value
        console.log(aplha)
        aplha !== 'player' ?
        $('.showPackages').css('display','none') :
        $('.showPackages').css('display','block')
    })
</script>
@endsection
