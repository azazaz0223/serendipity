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
    </style>
@endsection
