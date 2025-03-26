@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_integration_frame_server }} rel="stylesheet">
@endsection



@section('content')
    @include('layouts.integration_frame_server')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_integration_frame_server }}></script>
@endsection 
















