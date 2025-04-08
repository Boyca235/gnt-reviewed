<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, GNT, Login">
    <title>GNT-connexion page</title>

    <!-- Favicons -->
    <link href="src={{asset('admin/img/favicon.png')}}" rel="icon">
    <link href="src={{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            <form class="form-login" method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="form-login-heading">Connectez-vous maintenant</h2>
                <div class="login-wrap">
                    <input type="email" class="form-control" placeholder="Adresse mail" autofocus autocomplete="username" name="email">
                    <br>
                    <input type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Mot de passe">
                    <br>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Mot de passe oublié?</a>
                    </span>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i>
                        Se connecter</button>
                    <hr>
                    <div class="login-social-link centered">
                        <p>or vous pouvez vous connecter via vos reseaux sociaux</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div>
                    <div class="registration">
                        Pas de compte?<br />
                        <a class="" href="#">
                            Créer un compte
                        </a>
                    </div>
                </div>
                <!-- Modal -->
{{--                 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"--}}
{{--                    class="modal fade">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <button type="button" class="close" data-dismiss="modal"--}}
{{--                                    aria-hidden="true">&times;</button>--}}
{{--                                <h4 class="modal-title">Forgot Password ?</h4>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <p>Enter your e-mail address below to reset your password.</p>--}}
{{--                                <input type="text" name="email" placeholder="Email" autofocus autocomplete="username"--}}
{{--                                    class="form-control placeholder-no-fix">--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>--}}
{{--                                <button class="btn btn-theme" type="submit">Submit</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- modal -->
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('admin/lib/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{asset('admin/img/login-bg.jpg')}}", {
      speed: 500
    });
    </script>
</body>

</html>
