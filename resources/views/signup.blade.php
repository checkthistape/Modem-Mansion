@extends("layouts.signlayout")

@section("content")
<div class="form-login">

    <form action="{{ route('user.registrate') }}" method="post">
        @csrf
        <div class="inputs">
            <div class="input1">
                <span>Username:</span><input type="text" name="username"></input>
            </div>
            @error('username')
                <span style="color: red"> {{ $message }} </span>
            @enderror
            <div class="input2">
                <span>Password:</span><input type="password" name="pswd1"></input>
            </div>
            @error('pswd1')
                <span style="color: red"> {{ $message }} </span>
            @enderror
            <div class="input3">
                <span>Verify password:</span><input type="password" name="pswd2"></input>
            </div>
            @error('pswd2')
                <span style="color: red"> {{ $message }} </span>
            @enderror
            captcha

            <input type="submit" value="Registrate" id="login">

        </div>
    </form>


</div>
@endsection