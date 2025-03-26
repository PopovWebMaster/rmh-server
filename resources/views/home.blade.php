@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_home }} rel="stylesheet">
@endsection

@section('content')
<h1>Тестовое изменение</h1>
    <div id = "app"></div>
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_home }}></script>
    <!-- <script type="text/javascript" src=""></script> -->
@endsection 
