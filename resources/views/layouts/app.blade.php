<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('modern/css/vendors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('modern/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('modern/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqueryScrollbar/jquery.scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/materialdesign/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/multiselect/dist/css/bootstrap-multiselect.css') }}">

    <link rel="stylesheet" href="{{ asset('materialDesign\css\mdb.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('modern/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern/vendors/css/extensions/sweetalert.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/forms/toggle/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/forms/switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/core/colors/palette-switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/forms/checkboxes-radios.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/forms/icheck/flat/_all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/modern/vendors/css/pickers/miniColors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/modern/vendors/css/pickers/spectrum/spectrum.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/pickers/colorpicker/colorpicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/pickers/daterange/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/pickers/daterange/daterange.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datetimepicker/bootstrap-datetimepicker.css') }}">

  @stack('link')
  @stack('style')

<style>
    html body .content .content-wrapper {
        padding: 1rem 2.2rem;
    }
    .md-form .form-control.active, .md-form select.form-control {
        margin-top: 2rem;
    }
    .hidden {
        display: none!important;
        visibility: hidden!important;
    }

    .fullscreen {
        min-width: 100%;
        min-height: 100%;
    }

    /* pagination */
    .pagination {
        margin-top: 0;
    }
    .pagination .page-item .page-link {
        border:0;
        padding: 2px 12px!important;
        /* font-size: 10px; */
        font-weight: 300;
    }
    .ml-7, .mx-7 {
        margin-left: 7rem !important;
    }
    .ml-6, .mx-6 {
        margin-left: 6rem !important;
    }
    .mr-6 {
        margin-right: 6rem !important;
    }
    .pl-6{
        padding-left: 6rem !important;
    }
    .pr-6 {
        padding-right: 6rem !important;
    }
    .table-fixed tbody {
        display:block;
        overflow:auto;
    }
    .table-fixed thead, .table-fixed tbody tr {
        display:table;
        width:100%;
        table-layout:fixed;
    }
    .table td{
        border-top: 0;
    }
    .table tr:hover {
        -webkit-box-shadow: inset 1px 0 0 #dadce0, inset -1px 0 0 #dadce0, 0 1px 2px 0 rgba(60,64,67,.3), 0 1px 3px 1px rgba(60,64,67,.15);
        box-shadow: inset 1px 0 0 #dadce0, inset -1px 0 0 #dadce0, 0 1px 2px 0 rgba(60,64,67,.3), 0 1px 3px 1px rgba(60,64,67,.15);
        z-index: 1;
    }
    #tabela-item-lista tr:hover .bqY {
        display: -webkit-box;
        display: -moz-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
    .tools {
        width: 145px;
    }
    .toolsUser {
        width: 225px;
    }
    .table-fixed thead th a, .table-fixed thead th{
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -webkit-font-smoothing: antialiased;
        letter-spacing: .25px;
        color: #5f6368;
        font-weight: 500;
        line-height: 16px;
        -webkit-box-ordinal-group: 0;
        -webkit-order: 0;
        order: 0;
    }
    .table-fixed tbody tr{
        cursor: pointer;
    }
    .bqX {
        height: 20px;
        opacity: .54;
        width: 20px;
        align-items: center;
        border: none;
        display: inline-flex;
        justify-content: center;
        outline: none;
        position: relative;
        z-index: 0;
        cursor: pointer;
        list-style: none;
        margin: 0 10px;
        font-size:24px;
    }
    .bqX:hover {
        opacity: 1;
    }
    .bqX:hover::before {
        background-color: rgba(32, 33, 36, 0.15);
        border: none;
        opacity: 1;
        transform: scale(1);
        color:#000;
    }
    .bqX::before {
        content: '';
        display: block;
        opacity: 0;
        position: absolute;
        transition-duration: .15s;
        transition-timing-function: cubic-bezier(0.4,0.0,0.2,1);
        z-index: -1;
        bottom: -10px;
        left: -10px;
        right: -10px;
        top: -10px;
        background: none;
        border-radius: 50%;
        box-sizing: border-box;
        transform: scale(0);
        transition-property: transform,opacity;
        bottom: -10px;
        left: -10px;
        right: -10px;
        top: -10px;
    }
    .bqX:after {
        content: '';
        height: 200%;
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
    }
    .bqX:hover i.mdi-pencil {
        color: #7cd1f9;
    }
    .bqX:hover i.mdi-delete {
        color: #FF4961;
    }
    .yW {
        -webkit-font-smoothing: antialiased;
        font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
        letter-spacing: .2px;
        white-space: nowrap;
    }
    .bqY {
        display: none;
        margin-right: 6px;
        padding: 0;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .swal-overlay {
        background-color: rgba(0, 0, 0, 0.2);
    }
    .btn.plus {
        background-color: #e91e63;
        bottom: 0;
        margin-bottom: 15px;
        margin-right: 15px;
        position: fixed;
        right: 0;
        border: none;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-shadow: 0 6px 10px 0 rgba(0,0,0,0.14), 0 1px 18px 0 rgba(0,0,0,0.12), 0 3px 5px -1px rgba(0,0,0,0.2);
        box-shadow: 0 6px 10px 0 rgba(0,0,0,0.14), 0 1px 18px 0 rgba(0,0,0,0.12), 0 3px 5px -1px rgba(0,0,0,0.2);
        z-index: 1040;

    }
    .modal-footer {
        background-color: #fff;
    }
    .modal-backdrop {
        background-color: rgba(0, 0, 0, 0.2);
    }
    .modal-crud .modal-dialog {
        box-shadow: 0 12px 15px 0 rgba(0,0,0,0.24);
        width: 700px;
    }
    .modal-crud .modal-header  {
        background-color: #f7f7f7;
    }
    .modal-crud .modal-title {
        font-weight: 500;
    }
    .modal-crud-padding{
        padding-left: 6rem;
        padding-right: 6rem;
    }
    .modal-crud .modal-footer {
        border: 0;
        font-weight: 600;
        font-size: 13px;
        padding-right: 2rem;
    }
    .modal-crud .modal-footer a {
        margin-left:1rem;
    }
    .modal {
        text-align: center!important;
        padding: 0!important;
    }
    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }
    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }
    .Re0Yodel {
        display: inline-block;
        left: 15px;
        outline: 0;
        position: absolute;
        top: 0px;
    }
    .Re0Yod {
        cursor: pointer;
        display: inline-block;
        left: 25px;
        outline: 0;
        position: absolute;
        top: 15px;
    }
    .Re0Yod:hover:after, .Re0Yod:focus:after {
        font-family: 'MaterialDesignIcons';
        font-weight: normal;
        font-style: normal;
        font-size: 20px;
        line-height: 1;
        letter-spacing: normal;
        text-rendering: optimizeLegibility;
        text-transform: none;
        display: inline-block;
        word-wrap: normal;
        direction: ltr;
        font-feature-settings: 'liga' 1;
        -webkit-font-smoothing: antialiased;
        background: rgba(0,0,0,0.26);
        -webkit-border-radius: 50%;
        border-radius: 50%;
        color: white;
        content: '\f1d9';
        left: 3px;
        padding: 12px;
        position: absolute;
        top: 3px;
    }
    .KoG9Dc {
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 2px grey;
        box-shadow: 0 0 2px grey;
    }
    select.form-control:not([size]):not([multiple]) {
        height: 2rem;
    }
    .navbar-brand {
        padding: 12px 0px!important;
    }
    th a.active:after {
        background-color: #d93025;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        content: '';
        display: block;
        height: 3px;
        margin: 0 8px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
    }

    input::placeholder{ font-weight: 100!important; }
    input::-webkit-input-placeholder{ font-weight: 100!important; }
    input::-moz-placeholder{ font-weight: 100!important; }
    input:-ms-input-placeholder{ font-weight: 100!important; }
    input:-moz-placeholder { font-weight: 100!important; }


    .navbar-semi-light .navbar-nav .nav-link.modern-nav-toggle {
        color: #e2d6d6;
    }


    .md-form .minicolors-theme-bootstrap .minicolors-swatch {
        top: 0px !important;
        left: -64px!important;
    }
    .md-form .minicolors input {
        border: 0;
        border-bottom: 1px solid;
        padding: 0.3rem 0 0rem 0;
    }
    .minicolors-theme-bootstrap .minicolors-input {
        padding-left: 0!important;
    }

     .minicolors {
        border-bottom: 1px solid #ccc;
    }

    .minicolors-focus {
        -webkit-box-shadow: 0 1px 0 0 #4285f4;
        box-shadow: 0 1px 0 0 #4285f4;
        border-bottom: 1px solid #4285f4;
    }



    @media (min-width: 576px){
        .modal-dialog {
            max-width: 500px;
            margin: 1.5rem auto;
        }
    }

    .select2 {
        /* margin-left: 6rem; */
        width: -webkit-calc(100% - 12rem)!important;
        width: calc(100% - 12rem)!important;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding: 0;
        color: #757575;
    }
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 0;
        border-radius: 0;
        border-bottom: 1px solid;
    }

    .select2-results__option {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .input-group > .md-form  {
        position: relative;
        -ms-flex: 2 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0;
    }
</style>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    @include('layouts.nav')
    @include('layouts.menu')
    <div class="app-content content">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/vendors.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('modern/js/core/app-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/js/scripts/customizer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('materialDesign/js/mdb.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/editors/ckeditor/ckeditor.js') }}"></script>
    <!--<script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>-->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/decoupled-document/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/translations/pt-br.js"></script> -->
    <script type="text/javascript" src="{{ asset('plugins/jqueryScrollbar/jquery.scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/maskInput/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/moment/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/cnpjcpf/cnpjcpf.js') }}"></script>

    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/miniColors/jquery.minicolors.min.js') }}"></script>

    <!-- FORMS -->
    <script src="{{asset('modern/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script src="{{asset('modern/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
    <script src="{{asset('modern/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('modern/js/scripts/forms/validation/form-validation.js')}}" type="text/javascript"></script>
    <script src="{{asset('modern/vendors/js/forms/toggle/bootstrap-switch.js')}}" type="text/javascript"></script>
    <!-- END FORMS -->

    <script type="text/javascript" src="{{ asset('modern/vendors/js/forms/toggle/bootstrap-switch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/forms/toggle/switchery.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('modern/js/scripts/forms/switch.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('/modern/vendors/js/pickers/spectrum/spectrum.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/modern/vendors/js/pickers/miniColors/jquery.minicolors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/js/scripts/pickers/colorpicker/picker-color.js') }}"></script>

    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/pickers/daterange/daterangepicker.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('modern/js/scripts/forms/checkbox-radio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('modern/js/scripts/forms/wizard-steps.js') }}" ></script> --}}

    <script src="{{ asset('modern/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
    
    <script>
    $(document).ready(function() {
        if($("#ckeditor").length>0){
            //alert(CKEDITOR.version);

            var editor = CKEDITOR.instances['ckeditor'];
            if (editor) { editor.destroy(true); }
            CKEDITOR.replace('ckeditor', {
                height: '550px',
                width: '409px',
                resize_enabled : false,
                extraPlugins: 'forms',
                allowedContent: true,
                pasteFromWordPromptCleanup: true               
            });
        }

        // CKEDITOR.on('instanceReady', function (ev) {
        //     ev.editor.on('paste', function (evt) {
        //         evt.data['html'] = '<!-- class="Mso" -->' + evt.data['html'];
        //     }, null, null, 9); // 9 so we treat the paste data before the pastefromword plugin
        //     ev.editor.on('paste', function (evt) {
        //         // remove empty paragraphs
        //         evt.data['html'] = evt.data['html'].replace(/<p>\s*<\/p>/g, '');
        //     }, null, null, 11);
        // });
        //});

        // DecoupledEditor
        // .create( document.querySelector( '#editor' ),{
        // } )
        // .then( editor => {
        //     const toolbarContainer = document.querySelector( '#toolbar-container' );

        //     toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        // } )
        // .catch( error => {
        //     console.error( error );
        // } );

        // ClassicEditor
        // .create( document.querySelector( '#ckeditor' ), {
        //     language: 'pt-br'
        // })
        // .catch( error => {
        //     console.error( error );
        // });
      
    });
  </script>
  @stack('scripts')

</body>
</html>
