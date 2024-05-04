@extends("layouts.signlayout")

@section("content")
<div class="form-content">
    <div class="heading">
        <span>Login page</span>
    </div>
    <div class="form-login">
        <img src="assets/icons/leafs.png" id="green1" width="146.3px" height="219.5px">
        <img src="assets/icons/leafs2.png" id="green2" width="154px" height="297px">


        <form action="{{ route('user.login') }}" method="post">
            @csrf
            <div class="inputs">
                <div class="input1">
                    <span>Username:</span><input type="text" name="username"></input>
                </div>
                @error('username')
                <span style="color: red"> {{ $message }} </span>
                @enderror
                <div class="input2">
                    <span>Password:</span><input type="password" name="pswd"></input>
                </div>
                @error('pswd')
                <span style="color: red"> {{ $message }} </span>
                @enderror
                captcha

                <input type="submit" class="windows98button" value="Login" id="login">



            </div>
        </form>


    </div>

</div>
@endsection