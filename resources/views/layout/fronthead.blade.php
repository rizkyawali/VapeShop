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

        <ul class="right hide-on-med-and-down">
            <li><a class="cyan-text">Already have account ? </a></li>
            <li>
            <li><a class="modal-trigger cyan grey-text text-darken-4" href="#modal1"><i class="material-icons grey-text text-darken-4 left">account_circle</i>Signin Here</a></li>
            </li>
        </ul>


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

{{--Modal Signin--}}
<div id="modal1" class="modal col l5 s5  modal-fixed-footer">
    <div class="modal-content col l5 s5 ">

        <a href="#" class="modal-action modal-close material-icons right black-text">close</a>
        <h4 class="black-text">Signin</h4>

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
                        <a class="waves-effect waves-light grey darken-4 cyan-text btn"><i class="material-icons cyan-text left">check</i>button</a>
                    </div>
                </div>

            </form>
        </div>

    </div>

    <div class="modal-footer black-text">
        {{--<span  class="left-align">Don't Have Account ? </span> <span class="black-text">{!! link_to(route('signup'), 'Sign Up') !!}</span>--}}
    </div>

</div>
{{--End Modal Signin--}}