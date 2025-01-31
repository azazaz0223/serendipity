@section('custom_css')
    <link rel='stylesheet' href="{{ asset('css/frontend/assessment-responsive.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('css/frontend/assessment-dynamic.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('css/frontend/assessment-custom.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('css/frontend/18v.css') }}" type='text/css' media='all' />

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.form.min.js') }}"></script>
    <style id='custom-inline-css' type='text/css'>
        .chaty-channels {
            display: none;
        }

        .footer_button {
            padding: 0 15px;
            border-radius: 50px;
            display: inline-block;
            overflow: hidden;
            width: 42px;
            height: 42px;
            line-height: 42px !important;
            font-size: 20px !important;
            margin: 0;
            text-align: center;
            text-decoration: none !important;
            font-family: inherit !important;
            transition: color 0.1s ease-in-out, background-color 0.1s ease-in-out, border-color 0.1s ease-in-out;
        }

        .button.button_size_4 {
            font-size: 120%;
            padding-top: 15px;
            padding-bottom: 15px;
            transform: scale(1.0);
        }

        @media only screen and (max-width: 767px) {
            .section_wrapper {
                max-width: none !important;
                padding-left: unset !important;
                padding-right: unset !important;
            }

            .entry-content {
                padding: 0 20px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
