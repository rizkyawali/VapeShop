<nav class="navbar-default grey darken-4">
    <a href="#" class="brand-logo center">Logo</a>
    {{--Web Device--}}
    <ul id="slide-out" class="side-nav">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li class="divider"></li>

    </ul>



    <ul class="left hide-on-med-and-down">
        <li>
            <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
                <i class="material-icons left-align">account_circle</i>
            </a>
        </li>

        <li><a class="dropdown-button cyan-text" href="#!" data-activates="dropdown1">Product Management<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

    <ul id="dropdown1" class="dropdown-content">
        <i><a class="grey darken-3 cyan-text" href="{{ route('productList') }}">List Products</a></i>
        <i><a class="grey darken-3 cyan-text" href="{{ route('productCreate') }}">Add Product</a></i>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    {{--End Web Device--}}

    {{--Mobile Device Menu--}}
    <ul id="nav-mobile" class="side-nav">

        <li><a class="grey darken-4 cyan-text">User<i class="material-icons right cyan-text">account_circle</i></a></li>
        <li class="divider"></li>

        <li><a class="grey darken-4 cyan-text">Product Management<i class="material-icons right cyan-text">arrow_drop_down</i></a></li>
        <i><a href="{{ route('productList') }}">List Products</a></i>
        <i><a href="{{ route('productCreate') }}">Add Product</a></i>
        <li class="divider"></li>


    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    {{--end mobile device menu--}}
</nav>