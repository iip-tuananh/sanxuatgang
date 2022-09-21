@extends('layouts.main.master')
@section('title')
{{$pageContent->title}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
<div  class="page-wrapper page-left-sidebar">
    <div class="row">
        <div id="content" class="large-9 right col" role="main">
            <div class="header-title">
                <h4>{{$pageContent->title}}</h4>
            </div>
            <div class="page-inner">
                {!!$pageContent->content!!}
            </div>
        </div>
        <div id="col-439034941" class="large-3 col col-first col-divided"  >
            @include('layouts.main.rightnav-page')
        </div>
    </div>
</div>
</main>
<style>
    .header-title {
        padding: 10px 15px;
        background-color: #0c3d77;
        text-transform: uppercase;
        margin-bottom: 30px;
    }
    .header-title h4{
        color: white;
    }
</style>
@endsection