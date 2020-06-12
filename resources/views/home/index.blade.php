<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Tesing Project</title>
    {{--<base href="{{URL::asset('/')}}" target="_blank">--}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    {{--{!! Html :: style('css/style.css')!!}--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
    <script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>

    {{--<style type="text/css">--}}
        {{--.login-form {--}}
            {{--width: 340px;--}}
            {{--margin: 50px auto;--}}
        {{--}--}}
        {{--.login-form form {--}}
            {{--margin-bottom: 15px;--}}
            {{--background: #f7f7f7;--}}
            {{--box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);--}}
            {{--padding: 30px;--}}
        {{--}--}}
        {{--.login-form h2 {--}}
            {{--margin: 0 0 15px;--}}
        {{--}--}}
        {{--.form-control, .btn {--}}
            {{--min-height: 38px;--}}
            {{--border-radius: 2px;--}}
        {{--}--}}
        {{--.btn {--}}
            {{--font-size: 15px;--}}
            {{--font-weight: bold;--}}
        {{--}--}}
    {{--</style>--}}
</head>
<body>

    <div style="text-align: center">
        <h3 style="color: goldenrod"><b>Laravel Testing Project</b></h3>
    </div>
    {{--<br>--}}
    {{--<a href="#" class="btn btn-primary">This is my button</a>--}}
    {{--<br>--}}

    <div class="login-form" >
        <form method="post" action="{{route('user-log-in')}}">
            {!! csrf_field() !!}
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input id="email" type="text" class="form-control" placeholder="Email" name="email" required="required">
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>

            </div>
            <div>
                @if(Session::has('loginFail'))
                    <p class="warning" style="color: red; font-size: 12px"><b>{{ Session::get('loginFail') }}</b></p>
                @endif
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
    </div>


</body>
</html>