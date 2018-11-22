@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
        .login-block{
            background: #87e0f5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #e2f5fa , #87e0f5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            padding : 50px 0;
        }
        .banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
        .container{background:#fff; width: 90%; height: 90%; margin: auto; }
        .carousel-inner{border-radius:0 10px 10px 0;}
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{padding: 50px 30px; width:80%; margin:auto; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: #DE6262; color:#fff; font-weight:600;}
        .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{color:#fff; font-weight:600;}
        .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
    </style>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Register Now</h2>
                    <form class="login-form" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Email</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="text-uppercase">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                        </div>

                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Nombre</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Apellido Paterno</label>
                            <input id="apaterno" type="text" class="form-control{{ $errors->has('apaterno') ? ' is-invalid' : '' }}" name="apaterno" value="{{ old('apaterno') }}" required autofocus>

                            @if ($errors->has('apaterno'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apaterno') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Apellido Materno</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('amaterno') ? ' is-invalid' : '' }}" name="amaterno" value="{{ old('amaterno') }}" required autofocus>

                            @if ($errors->has('amaterno'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amaterno') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Direccion</label>
                            <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>

                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Fecha Nacimiento</label>
                            <input id="name" type="date" class="form-control{{ $errors->has('nacimiento') ? ' is-invalid' : '' }}" name="nacimiento" value="{{ old('nacimiento') }}" required autofocus>

                            @if ($errors->has('nacimiento'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nacimiento') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Pais</label>
                            <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="{{ old('pais') }}" required autofocus>

                            @if ($errors->has('pais'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Ciudad</label>
                            <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" value="{{ old('ciudad') }}" required autofocus>

                            @if ($errors->has('ciudad'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="text-uppercase">Codigo Postal</label>
                            <input id="codigo_postal" type="text" class="form-control{{ $errors->has('codigo_postal') ? ' is-invalid' : '' }}" name="codigo_postal" value="{{ old('codigo_postal') }}" required autofocus>

                            @if ($errors->has('codigo_postal'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigo_postal') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn btn-login float-right">Registro</button>
                        </div>

                    </form>
                    <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>
                </div>

            </div>
        </div>
    </section>

@endsection
