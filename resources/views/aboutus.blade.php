@extends('layouts.main.master')
@section('title')
Giới thiệu
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
@endsection