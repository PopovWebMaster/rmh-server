@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_auth }} rel="stylesheet">
    <link href= {{ $css_reset_password }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.reset_password')
@endsection

@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_reset_password }}></script>
@endsection 