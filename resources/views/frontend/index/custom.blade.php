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


        .pricing-box .plan-inside ul li:first-child {
            border-top: 1px solid;
        }

        .mfn-icon-box .desc {
            border-color: #000000 !important;
        }

        html {
            background: white;
        }

        #Top_bar #logo .logo-main {
            filter: brightness(1000%);
        }

        #Top_bar .menu>li>a {
            color: white;
        }

        #Top_bar .menu>li>a:hover {
            color: #FFE0E0;
        }

        #Top_bar.is-sticky .menu>li>a {
            color: initial;
        }

        #Top_bar.is-sticky .menu>li>a:hover {
            color: #CB1A1D;
        }

        #Top_bar .top_bar_right .action_button {
            background: white;
            color: #CB1A1D;
        }

        #Top_bar .top_bar_right .action_button:hover {
            background: #FFE0E0;
        }

        #Top_bar.is-sticky .top_bar_right .action_button {
            background: #cb1a1d;
            color: white;
        }

        #Top_bar.is-sticky .top_bar_right .action_button:hover {
            background: #b50609;
        }

        .section-decoration {
            background-size: auto;
            height: 100% !important;
            margin-bottom: -1px;
        }

        .section-decoration.bottom {
            bottom: -1px;
            z-index: 0;
        }

        @media only screen and (min-width: 767px) {
            #Top_bar a.responsive-menu-toggle {
                color: white;
            }
        }

        @media only screen and (max-width: 767px) {
            .section.has-video .section_video video {
                left: 0%;
                height: 100%;
            }
        }

        .iconbox {
            padding: 10px;

        }

        .iconbox .mfn-icon-box {
            aspect-ratio: 1;
            display: grid;
            align-content: center;
        }

        /*.iconbox .mcb-item-icon_box_2-inner{
                align-content:center!important;
                display:flex;
                align-items:center;
            }*/

        @media only screen and (max-width: 767px) {
            .track img {
                height: 20px;
                filter: brightness(0) saturate(100%) invert(12%) sepia(55%) saturate(5120%) hue-rotate(347deg) brightness(127%) contrast(98%);
            }

            .course {
                font-size: 1.5em;
            }

            .column_pricing_item {
                margin-bottom: 20px !important;
            }
        }

        .section-decoration {
            background-size: aut;
            height: 100% !important;
            margin-bottom: -1px;
        }

        .section-decoration.bottom {
            bottom: -1px;
        }

        .mfn-icon-box .desc {
            border-top: 2px solid white;
            padding-top: 20px;
        }

        .marquee {
            position: relative;
            width: 100vw;
            height: 60px;
            max-width: 100%;
            overflow-x: hidden;
        }

        .track {
            position: absolute;
            white-space: nowrap;
            will-change: transform;
            animation: marquee 20s linear infinite;
            display: flex;
            gap: 3vw;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-100% - 3vw));
            }
        }

        .quoteitem {
            width: auto;
        }

        .quoteitem img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .quoteitem p:last-child {
            position: relative;
            margin-top: 1.8em;
        }

        .quoteitem p:last-child::before {
            content: "";
            background: url({{ asset('images/frontend/icon/icon-quote.svg') }}) no-repeat;
            position: absolute;
            left: -1em;
            top: -1em;
            display: block;
            width: 1.5em;
            height: 1.5em;
        }

        .number {
            width: 3.5em;
            height: 3.5em;
            background: white;
            display: inline-block;
            line-height: 3.5em;
            border-radius: 50%;
        }
    </style>
@endsection
