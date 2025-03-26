@extends('layouts.layout')

@section('link_css')
    <link href= {{ $css_admin }} rel="stylesheet">
@endsection

@section('content')
    @include('layouts.admin')
@endsection



@section('script_js')
    <script type="text/javascript" src={{ $js_admin }}></script>
    <!-- <script type="text/javascript" src=""></script> -->
@endsection 
