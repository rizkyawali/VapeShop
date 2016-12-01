<nav class="black navbar-fixed" role="navigation">
    <div class="nav-wrapper container-fluid">
        <ul class="left hide-on-med-and-down">
            <li><a class="dropdown-button cyan-text" href="#!" data-activates="dropdown1">Hardware<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button cyan-text" href="#!" data-activates="dropdown2">E-Liquids<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="cyan-text" href="#">Tanks</a></li>
            <li><a class="cyan-text" href="#">Mods</a></li>
            <li><a class="cyan-text" href="#">Atomizer</a></li>
            <li><a class="dropdown-button cyan-text" href="#!" data-activates="dropdown3">Accessories<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        @if(Sentinel::check())
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-button cyan-text" href="#!" data-activates="dropdown4">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}<i class="material-icons right">account_circle</i></a></li>

            </ul>
        @else
            <ul class="right hide-on-med-and-down">
                <li><a class="cyan-text">Already have account ? </a></li>
                <li>
                <li><a class="modal-trigger cyan grey-text text-darken-4" href="#modal1"><i class="material-icons grey-text text-darken-4 left">account_circle</i>Signin Here</a></li>
                </li>
            </ul>
        @endif

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="parallax"><img src="/images/banner/banner.jpg" alt="Unsplashed background img 1" ></div>
</div>


{{--Hardware Dropdown--}}
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Vape</a></li>
    <li><a href="#!">Liquid</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
{{--End Hardware Droprown--}}

{{--Eliquid Dropdown--}}
<ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">Vape</a></li>
    <li><a href="#!">Liquid</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
{{--End Eliquid Droprown--}}

{{--Accessories Dropdown--}}
<ul id="dropdown3" class="dropdown-content">
    <li><a href="#!">Vape</a></li>
    <li><a href="#!">Liquid</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
{{--End Accessories Droprown--}}

{{--User Dropdown--}}
<ul id="dropdown4" class="dropdown-content">
    <li><a href="{{ route('signout') }}">Profile</a></li>
    <li class="divider"></li>
    <li><a href="{{ route('signout') }}">Signout</a></li>
</ul>
{{--End User Droprown--}}




{{--Modal Signin--}}
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content col l5 s5 ">

        <a href="#" class="modal-action modal-close material-icons right black-text">close</a>
        <h4 class="black-text">Signin</h4>

        {!! Form::open(['route' => 'postSignin', 'class' => 'form-horizontal', 'role' => 'form']) !!}

        <div class="row">
            <form class="col s12">

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        {!! Form::email('email', null, ['class' => 'validate']) !!}
                        <label for="icon_prefix1" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix ">lock</i>
                        {!! Form::password('password', null, ['class' => 'validate', 'length' => '16']) !!}
                        <label for="icon_prefix2">Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type='submit' name='submit' class='col s4 btn btn-large waves-effect cyan darken-2 left'><i class="material-icons left">done</i>Signin</button>
                    </div>
                </div>

            </form>
        </div>

        {!! Form::close() !!}

    </div>

    <div class="modal-footer black-text">
        <div class="container">
            <span  class="left-align">Don't Have Account ? </span> <span class="black-text">{!! link_to(route('signup'), 'Create Here') !!}</span>
        </div>
    </div>

</div>
{{--End Modal Signin--}}