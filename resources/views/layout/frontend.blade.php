<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vape Shop</title>

        {{--CSS--}}
        @yield('styles')
        <link rel="stylesheet" href="/css/material/materialize.css">
        <link rel="stylesheet" href="/css/material/custom.css">
        <link rel="stylesheet" href="/css/material/fonts.css">
        {{--End CSS--}}
    </head>

    <body>

        @include('layout.fronthead')

        <div class="container">
            @yield('content')
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img src="/images/banner/banner2.jpg" alt="Unsplashed background img 2"></div>
        </div>

        <div class="container">
            <div class="section">

                <div class="row">
                    <div class="col s12 center">
                        <h3><i class="mdi-content-send brown-text"></i></h3>
                        <h4>Contact Us</h4>
                        <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 black-text">Smoking With Your Style</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="/images/banner/smoke.jpg" alt="Unsplashed background img 3"></div>
        </div>

        <footer class="page-footer grey darken-4">
            <div class="container">
                <div class="row">

                    <div class="col l6 s12">
                        <h5 class="white-text">Shops Address</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                    </div>

                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>

                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="footer-copyright black lighten-4">
                <div class="container">
                    Made by <a class="white-text text-darken-3" href="http://github.com/rizkyawali">Materialize | <span class="cyan-text">Designing By Rizky Awali</span> </a>
                </div>
            </div>

        </footer>

        {{--Javascript--}}
        <script src="/js/javascript2.1.js"></script>
        <script src="/js/material/materialize.min.js"></script>
        <script src="/js/custom.js"></script>
        @yield('scripts')
        {{--End Javascript--}}
    </body>

</html>