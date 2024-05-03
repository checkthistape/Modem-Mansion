@extends("layouts.signlayout")

@section("content")
<div class="form-login">

    <form action="{{ route('user.registrate') }}" method="post">
        @csrf
        <div class="inputs">
            <div class="input1">
                <span>Username:</span><input type="text" name="usrname"></input>
            </div>
            <div class="input2">
                <span>Password:</span><input type="password" name="pswd1"></input>
            </div>
            
            <div class="input3">
                <span>Password again:</span><input type="password" name="pswd2"></input>
            </div>

            captcha

            <input type="submit" value="Registrate" id="login">

        </div>
    </form>


</div>
@endsection