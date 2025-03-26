@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_integration_docs}} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu') 
@endsection

@section('content')
    @include('layouts.integration_docs')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_integration_docs }}></script>
@endsection 