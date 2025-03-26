@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_login }} rel="stylesheet">
@endsection

@section('content')
    <div id = "app">

    login
    </div>
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_login }}></script>
@endsection 
