@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_auth }} rel="stylesheet">
    <link href= {{ $css_printing_office_orders }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.printing_office_orders')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_printing_office_orders }}></script>
@endsection 