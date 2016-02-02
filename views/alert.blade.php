@if(session()->has('flashalert'))
@section('styles')
    <link rel="stylesheet" href="/public/css/sweetalert.min.css"/>
@endsection

@section('scripts')
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/sweetalert.min.js"></script>
    <script>
        swal({
            title: "{{session('flashalert.title')}}",
            text: "{!! addslashes(session('flashalert.message')) !!}",
            html: {{config('flashalert.html_format')}},
            type: "{{session('flashalert.level')}}",
            timer: "{{config('flashalert.hide_timer')}}",
            showConfirmButton: "{{config('flashalert.show_confirmation_button')}}"
        });
    </script>

@endsection
<?php session()->forget('flashalert'); ?>
@endif
