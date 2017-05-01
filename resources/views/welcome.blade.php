<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Glitter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Martel+Sans:700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: "Source Sans Pro",sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-family: 'Martel Sans', sans-serif;
                font-size: 84px;
            }

            .subtitle {
                font-size: 18px;
            }

            .laravel {
                color: #f4645f;
                font-family: "Miriam Libre","Source Sans Pro",sans-serif;
                text-decoration: none;
            }
            .laravel:hover {
                text-decoration: underline;
            }

            .buttons {
                margin-bottom: 30px;
            }

            .admin {
                display: inline-block;
                padding: 15px 30px;
                border-radius: 10px;
                background-color: #333;
                color: #ccc;
            }

            .admin-name {
                margin-bottom: 10px;
            }

            .admin-name > a {
                color: #eee;
                font-family: 'Martel Sans', sans-serif;
                font-size: 24px;
                line-height: 2rem;
                letter-spacing: .1rem;
                text-decoration: none;
            }
            .admin-name > a:hover {
                color: #fff;
            }

            .admin-note {
                margin: 0;
                font-size: 12px;
                text-align: left;
            }
            .admin-note dt {
                float: left;
                width: 50px;
                color: #999;
                text-align: right;
                line-height: 1.5;
            }
            .admin-note dd {
                margin-left: 60px;
                line-height: 1.5;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-sm {
                margin-bottom: 10px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-sm">
                    Glitter
                </div>

                <div class="subtitle m-b-md">
                    Commerce management system for <a class="laravel" href="https://laravel.com/" target="_blank">Laravel</a>.
                </div>

                <div class="buttons">
                    <iframe src="https://ghbtns.com/github-btn.html?user=highday&repo=glitter&type=star" frameborder="0" scrolling="0" width="50px" height="20px"></iframe>
                </div>

                <div class="admin m-b-md">
                    <div class="admin-name"><a href="{{ url('/office') }}">BackOffice</a></div>
                    <dl class="admin-note">
                        <dt>E-Mail:</dt>
                        <dd>member@example.com</dd>
                        <dt>Password:</dt>
                        <dd>password</dd>
                    </dl>
                </div>

                <p>✨</p>

            </div>
        </div>
    </body>
</html>
