@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_layout_sheet }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu') 
@endsection

@section('content')
    @include('layouts.layout_sheet')
@endsection



@section('script_js')

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.6.82/pdf.min.js"></script> -->

    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_layout_sheet }}></script>

@endsection 