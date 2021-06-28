<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="{{asset('css/foundation-icons/foundation-icons.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/vendor/modernizr.js')}}"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/flat-icon/flaticon.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/todos.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="row full-width wrapper">
    <div class="large-12 columns content-bg">
        <style type="text/css">
            .logo-bg {

                background: #2d2f3b;
            }
        </style>


        <div id="top-menu">
            <div class="row">
                <div class="large-2 medium-4 small-12 columns top-part-no-padding">
                    <div class="logo-bg">

                        <span style="color:white;font-size:25px;font-weight:bold">Online News Portal</span> <i
                            class="fi-list toggles"
                            data-toggle="hide"></i>
                    </div>
                </div>
                <div class="large-10 medium-8 small-12 columns top-menu">
                    <div class="row">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">&nbsp;</div>
                        </div>
                        <div class="large-4 medium-6 small-12 columns text-center">
                            <div class="row">

                                <div class="medium-12 small-12 columns">
{{--                                    <a href="{{route('logout')}}" style="color:white" title="Click here to logout"><i--}}
{{--                                            class="fi-power power-off"></i></a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
