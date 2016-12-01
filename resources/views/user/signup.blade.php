<html>

<head>
    <title>Signup | Vape Shop</title>

    <link href="/css/material/fonts.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/material/materialize.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            align-content: center;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #e5e5e5;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #48c5db;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #48c5db;
            box-shadow: none;
        }
    </style>
</head>

<body>
<div class="section"></div>
<main>
    <div class="container center">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <h4><i class="material-icons">people</i> Create Account</h4>

                {!! Form::open(['route' => 'signup.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s6'>
                            <i class="material-icons prefix">account_circle</i>
                            {!! Form::text('first_name', null, ['class' => 'validate']) !!}
                            <label for="icon_prefix1" class="left-align">First Name</label>
                            <div class="text-danger">{!! $errors->first('first_name') !!}</div>
                        </div>

                        <div class='input-field col s6'>
                            {!! Form::text('last_name', null, ['class' => 'validate']) !!}
                            <label class="left-align">Last Name</label>
                            <div class="text-danger">{!! $errors->first('last_name') !!}</div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">mail</i>
                            {!! Form::email('email', null, ['class' => 'validate']) !!}
                            <label for="icon_prefi2" class="left-align">Email</label>
                            <div class="text-danger">{!! $errors->first('email') !!}</div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">lock</i>
                            {!! Form::password('password', null, ['class' => 'validate']) !!}
                            <label for="icon_prefix3" class="left-align">Password</label>
                            <div class="text-danger">{!! $errors->first('password') !!}</div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">lock</i>
                            {!! Form::password('password_confirmation', null, ['class' => 'validate']) !!}
                            <label for="icon_prefix2" class="left-align">Password Confirmation</label>
                        </div>
                    </div>

                    <div class="row">
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                        </label>
                    </div>


                    <br />

                        <div class='row'>
                            <button type='submit' name='submit' class='col s4 btn btn-large waves-effect cyan darken-2 left'><i class="material-icons left">done</i>Signup</button>

                            <a class="col s4 btn btn-large waves-effect cyan darken-2 right" href="{{ route('shopIndex') }}"><i class="material-icons left">home</i>button</a>
                        </div>

                {{ Form::close() }}

            </div>
        </div>

    <div class="section"></div>
    <div class="section"></div>
</main>

<script type="text/javascript" src="/js/javascript2.1.js"></script>
<script type="text/javascript" src="/js/material/materialize.js"></script>
</body>

</html>