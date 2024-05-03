@extends("layouts.signlayout")

@section("content")
<div class="form-login">

    <form method="post">
        <div class="inputs">
            <div class="input1">
                <span>Username:</span><input type="text"></input>
            </div>
            <div class="input2">
                <span>Password:</span><input type="password"></input>
            </div>

            <input type="submit" value="Login" id="login">

        </div>
    </form>


</div>
@endsection