<div class="tab-pane fade " id="pills-MyLinks" role="tabpanel" aria-labelledby="pills-MyLinks-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb2">
            My Links
        </h1>

        <div class="row">
            <!-- <h2 class="mt4 mb1">Videos</h2> -->
            <form action="{{route('my-links')}}" method="POST">
                @csrf
                <h2 class="mt4 mb1 text-center">Help Coaches find and learn about you</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <img src="{{asset('img/SVG/hudl.svg')}}" height="100%" width="100%" alt="">
                </div>
                <input type="text" required value="{{@$playerLink->hudle}}" name="hudle">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img you">
                    <img src="{{asset('img/SVG/youtube.svg')}}" height="100%" width="100%" alt="">
                </div>
                <input type="text" value="{{@$playerLink->youtube}}" name="youtube">
            </div>


            <h2 class="mt4 mb1">Social Media</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <i class="fa fa-facebook-f"></i>
                </div>
                <input type="text" value="{{@$playerLink->facebook}}" name="facebook">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img you">
                <i class="fa fa-twitter"></i>
                </div>
                <input type="text" required value="{{@$playerLink->twitter}}" name="twitter">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <i class="fa fa-instagram"></i>
                </div>
                <input type="text" value="{{@$playerLink->instagram}}" name="instagram">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img you">
                <i class="fa fa-snapchat-ghost"></i>
                </div>
                <input type="text" value="{{@$playerLink->snapchat}}" name="snapchat">
            </div>


            <h2 class="mt4 mb1">Database</h2>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <img src="{{asset('img/SVG/247.svg')}}" height="100%" width="100%" alt="">
                </div>
                <input type="text" value="{{@$playerLink->database_24_7}}" name="database_24_7">
            </div>
            <div class="col-lg-6 d-flex flex-column mt2 ">
                <div class="img">
                    <img src="{{asset('img/SVG/rivals.svg')}}" height="100%" width="100%" alt="">
                </div>
                <input type="text" value="{{@$playerLink->database_rivals}}" name="database_rivals">
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
