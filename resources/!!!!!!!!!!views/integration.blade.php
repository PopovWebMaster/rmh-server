@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_integration_frame_docs }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.integration')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_integration_frame_docs }}></script>
@endsection 