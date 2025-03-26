@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_my_file }} rel="stylesheet">
    
@endsection

@section('topMenu')
    @include('layouts.topMenu')
@endsection

@section('content')
    @include('layouts.my_file')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_main }}></script>
    <script type="text/javascript" src={{ $js_my_file }}></script>
@endsection