@section('custom_css')
    <style id='custom-inline-css' type='text/css'>
        .button_right.has-icon .button_label {
            margin: 0;
        }

        #Top_bar .top_bar_right .action_button:hover {
            background: #b50609;
        }

        .chaty-svg path {
            fill: #38B900
        }

        *::selection {
            color: black;
        }

        #Top_bar.is-sticky {
            background-color: rgba(255, 255, 255, .8) !important
        }

        footer .section-decoration {
            background-size: auto;
            height: 100% !important;
            margin-bottom: -1px;
        }

        footer .section-decoration.bottom {
            bottom: -1px;
            z-index: 0;
        }

        @media only screen and (max-width: 767px) {
            #Top_bar {
                background-color: rgba(255, 255, 255, .8) !important
            }

            #Subheader {
                padding: 2em 15px;
            }

            .single-post .type-post {
                padding-left: 15px;
                padding-right: 15px;
            }

            .button .button_icon {
                display: none;
            }

            .button_right.has-icon .button_label {
                margin-right: 0;
            }
        }


        @media only screen and (min-width: 768px) {
            .rhttxt {
                margin-left: -15%;
            }
        }


        .style-simple .ui-tabs .ui-tabs-nav {
            display: none;
        }

        .section-decoration {
            background-size: auto;
            height: 100% !important;
            margin-bottom: -1px;
        }

        .section-decoration.bottom {
            bottom: -1px;
        }

        .clinic .dental {
            display: flex;
            padding-bottom: 3em;
            gap: 2em;
        }

        .clinic .dental:not(:last-child) {
            margin-bottom: 3em;
            border-bottom: 1px solid rgba(102, 100, 168, 0.2);
        }

        .clinic .dental h4 {
            margin-bottom: 1em;
            font-size: 1.8em;
            font-weight: bold;
        }

        .clinic .dental a {
            text-decoration: none;
        }

        .clinic .dental a:hover h4 {
            color: #CB1A1D;
        }

        .clinic .dental ul {
            list-style: none;
            margin-bottom: 1em;
            margin-left: 0;
        }

        .clinic .dental li {
            margin-bottom: 0;
        }

        .clinic .dental li a {
            color: #CB1A1D !important;
            background: none !important;
        }


        .clinic .dental li::before {
            width: 1.3em;
            height: 1.3em;
            content: "";
            margin-right: 0.5em;
            margin-top: 0.3em;
            float: left;
        }

        .clinic .dental li::after {
            content: "";
            clear: both;
            display: table;
        }

        .clinic .dental li:first-child::before {
            background: url("{{ asset('images/frontend/icon/clinic-address.svg') }}") no-repeat;
            background-size: contain;
        }

        .clinic .dental li:nth-child(2)::before {
            background: url("{{ asset('images/frontend/icon/clinic-phone.svg') }}") no-repeat;
            background-size: contain;
        }

        .clinic .dental li:last-child::before {
            background: url("{{ asset('images/frontend/icon/clinic-time.svg') }}") no-repeat;
            background-size: contain;
        }

        .clinic .dental img {
            width: 100%;
            aspect-ratio: 3 / 2;
            background: #eee;
            max-width: 360px;
            object-fit: cover;
        }

        .clinic .dental>div {
            width: 100%;
        }

        .clinic .dental dl {
            display: flex;
            flex-wrap: wrap;
            margin: initial;
        }

        .clinic .dental dl dt {
            flex: 0 0 30%;
            border: none;
            font-weight: normal;
            padding: initial;
        }

        .clinic .dental dl dd {
            flex: 0 0 70%;
            margin-left: initial;
            border: none;
            padding: initial;
        }

        .clinic .dental .links {
            display: inline-flex;
        }

        .clinic .dental .links a {
            padding: 0.5em 1.2em;
            background: #cb1a1d;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }

        .clinic .dental .links a:hover {
            background: #b50609;
        }

        .clinic .dental .links a:not(:last-child) {
            margin-right: 10px;
        }

        @media only screen and (max-width: 840px) {}

        @media only screen and (max-width: 767px) {
            .clinic .dental {
                flex-wrap: wrap;
            }
        }
    </style>
@endsection
