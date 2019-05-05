@extends('layouts.admin')

<div class="fixed-sn dashboard">
    @section('sidebar')
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')
    @endsection

    @section('content')

    @endsection

    @section('footer')
    @include('admin.partials.footer')
    @endsection

    @section('scripts')
    <script type="text/javascript" src="{{asset('frontend/js/vendor/tinymce/tinymce.min.js')}}"></script>
    <script>
        // SideNav Initialization
            $(".button-collapse").sideNav();

            // Data Picker Initialization
            $('.datepicker').pickadate();

            var skills = [
                "PHP",
                "C++",
                "Java",
                "JavaScript"
            ];

            $('#form-autocomplete').mdb_autocomplete({
                data: skills
            });

            // TinyMCE Initialization
            tinymce.init({ selector:'#description', menubar: false, height : "300" });
    </script>
    @endsection
</div>
