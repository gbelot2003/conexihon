<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="page-brand">
<header class="header header-transparent header-waterfall ui-header">
    @include('partials.main.header')
</header>
<nav aria-hidden="true" class="menu" id="ui_menu" tabindex="-1">
    @include('partials.main.nav')
</nav>
<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="content-heading">&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <a href="/"> <img src="{{ asset('images/conexihon_logo_nuevo_web_0.png') }}" alt=""></a>
                <hr/>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="content-sub-heading">Components</h2>
                        <p>Below are components that have been defined by Material Design Guidelines. For more information, please visit <a href="https://www.google.com/design/spec/components/buttons.html" target="_blank">Material Design Guidelines<sup class="margin-left-xs"><span class="icon">open_in_new</span></sup></a>.</p>
                        <div class="tile-wrap">
                            <a class="tile waves-attach" href="ui-button.html">
                                <div class="tile-inner">
                                    <span class="text-black">Buttons</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-button-fab.html">
                                <div class="tile-inner">
                                    <span class="text-black">Buttons <small>(Floating Action Button)</small></span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-card.html">
                                <div class="tile-inner">
                                    <span class="text-black">Cards</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-data-table.html">
                                <div class="tile-inner">
                                    <span class="text-black">Data Tables</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-dialog.html">
                                <div class="tile-inner">
                                    <span class="text-black">Dialogs</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-dropdown-menu.html">
                                <div class="tile-inner">
                                    <span class="text-black">Menus</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-nav-drawer.html">
                                <div class="tile-inner">
                                    <span class="text-black">Navigation Drawers</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-picker.html">
                                <div class="tile-inner">
                                    <span class="text-black">Pickers</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-progress.html">
                                <div class="tile-inner">
                                    <span class="text-black">Progress</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-selection-control.html">
                                <div class="tile-inner">
                                    <span class="text-black">Selection Controls</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-snackbar.html">
                                <div class="tile-inner">
                                    <span class="text-black">Snackbars</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-stepper.html">
                                <div class="tile-inner">
                                    <span class="text-black">Steppers</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-tab.html">
                                <div class="tile-inner">
                                    <span class="text-black">Tabs</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-text-field.html">
                                <div class="tile-inner">
                                    <span class="text-black">Text Fields</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-toolbar.html">
                                <div class="tile-inner">
                                    <span class="text-black">Toolbars</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="content-sub-heading">Extras</h2>
                        <p>These components have not been specifically defined by Material Design Guidelines, but are used in some Google apps and/or sites.</p>
                        <div class="tile-wrap">
                            <a class="tile waves-attach" href="ui-avatar.html">
                                <div class="tile-inner">
                                    <span class="text-black">Avatars</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-icon.html">
                                <div class="tile-inner">
                                    <span class="text-black">Icons</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-label.html">
                                <div class="tile-inner">
                                    <span class="text-black">Labels</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-nav.html">
                                <div class="tile-inner">
                                    <span class="text-black">Navs</span>
                                </div>
                            </a>
                            <a class="tile waves-attach" href="ui-tile.html">
                                <div class="tile-inner">
                                    <span class="text-black">Tiles</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="ui-footer">
    @include('partials.main.footer')
</footer>
@include('partials.widgets.fbtn')

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="{{ asset('js/_.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
