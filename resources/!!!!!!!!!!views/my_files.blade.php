@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_my_files }} rel="stylesheet">
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.my_files')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_my_files }}></script>
@endsection 