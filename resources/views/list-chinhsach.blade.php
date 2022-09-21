@extends('layouts.main.master')
@section('title')
Chính sách và bảo mật thông tin
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
                <h4>Chính sách và bảo mật thông tin</h4>
            </div>
            <div class="page-inner">
                @foreach ($pageContent as $item)
                    <div class="chinh-sach-item">
                        <a href="{{route('detailchinhsach', ['slug'=>$item->slug])}}">
                            <h4>{{$item->title}}</h4>
                        </a>
                        <div class="desc">
                            {!!$item->description!!}
                        </div>
                    </div>
                @endforeach
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
    .chinh-sach-item {
        margin-bottom: 30px;
    }
    .chinh-sach-item h4{
        text-transform: uppercase;
        color: #0c3d77;
    }
    .chinh-sach-item a:hover{
        text-decoration: underline;
    }
</style>
@endsection