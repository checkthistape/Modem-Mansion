@extends("layouts.signlayout")

@section("content")
<div class="form-login">

    <form method="post">
        <div class="inputs">
            <div class="input1">
                <span>Username:</span><input type="text" name="username"></input>
            </div>
            <div class="input2">
                <span>Password:</span><input type="password" name="pswd"></input>
            </div>

            <input type="submit" value="Login" id="login">

        </div>
    </form>


</div>
@endsection