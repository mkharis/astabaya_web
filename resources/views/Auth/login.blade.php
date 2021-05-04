<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login | astabaya</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url("/css/materialize.css")}}"  media="screen,projection"/>
    <!-- Import MDI Icon -->
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">

    <style>
        html,body {
            height: 100%;
            font-family: 'Josefin Sans', sans-serif;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
            background: #0f8ed6;
        }
        .login-form {
            padding: 20px;
        }
        #login-page {
            width: 500px;
        }
    </style>

</head>
<body ng-app="mainModule" ng-controller="mainController">
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <form id="form-login" class="login-form">
                <div class="row">
                    <div class="section center-align">
                        <a href="{{ route("kategori") }}">
                            <img src="{{ url('images/astabaya2.png') }}" height="60"/>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" id="email" name="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" name="password" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                {{-- <div class="row">          
                    <div class="input-field col s12 m12 l12  login-text">
                        
                        <label for="remember-me">
                            <input type="checkbox" name="remember" id="remember-me" />
                            <span>Remember me</span>
                        </label>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn  blue waves-effect waves-light col s12" style="font-family: 'Josefin Sans', sans-serif;">Login</button>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="left-align medium-small"><a href="#">Forgot password?</a></p>
                    </div>          
                </div>     --}}
          </form>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ url("/js/materialize.js") }}"></script>

    <script type="text/javascript">
        $("#form-login").submit(function(event){
            event.preventDefault();
            let email = $('#email').val();
            let password = $('#password').val();
            $.post("{{ url('/auth/login/') }}", {
                email: email,
                password: password
            })
            .done(function(data){
                window.location.href = "{{ url('/?token=') }}" + data.access_token;
            })
            .fail(function(error){
                // console.log(error.status);
                if (error.status === 422) {
                    let response = error.responseJSON;
                    if (response.email) {
                        response.email.forEach(err => {
                            M.toast({html: err});
                        });
                    }
                    if (response.password) {
                        response.password.forEach(err => {
                            M.toast({html: err});
                        });
                    }
                }
                if (error.status === 401) {
                    M.toast({html: "Kombinasi email atau password salah"});
                }
            });
        });
    </script>

</body>
</html>