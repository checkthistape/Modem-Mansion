@extends("layouts.signlayout")

@section("content")
<div class="profile">
    <div class="firstPart">
        <div class="info-part">

            <div class="headline">
                <div class="displayedname">
                    <span id="nickname">checkthistape</span>
                </div>
                <div class="status">
                    <img src="assets/icons/status.png" id="statusimg">
                    <span id="status">Offline</span>
                </div>
            </div>

            <div class="live-part">
                <div class="profileimage">
                    <img src="assets/icons/profileimage.jpeg" style="object-fit: contain; width: 100%; height: 100%;">
                </div>
                <div class="bio">bio</div>
            </div>
        </div>
    </div>
    <div class="secondPart">
        <div class="addinfo">
            <div class="ab-mecontent">
                <div class="headbar">About me</div>
            </div>

            <div class="content">
                <div class="headbar">Some another shit</div>
            </div>



        </div>
        <div class="friends">friends</div>
    </div>
</div>
@endsection