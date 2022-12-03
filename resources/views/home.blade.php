@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
<script>
      $.notify("Gửi đơn hàng thành công!", "success");
</script>
@endif
@endsection
@section('content')
<main id="main" class="">
<div id="content" role="main" class="content-area">
      <section class="section" id="section_1108416118">
      <div class="bg section-bg fill bg-fill  bg-loaded" >
      </div>
      <div class="section-content relative">
      <div class="slider-wrapper relative" id="slider-1218513842" >
            <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                  data-flickity-options='{
                  "cellAlign": "center",
                  "imagesLoaded": true,
                  "lazyLoad": 1,
                  "freeScroll": false,
                  "wrapAround": true,
                  "autoPlay": 6000,
                  "pauseAutoPlayOnHover" : true,
                  "prevNextButtons": true,
                  "contain" : true,
                  "adaptiveHeight" : true,
                  "dragThreshold" : 10,
                  "percentPosition": true,
                  "pageDots": true,
                  "rightToLeft": false,
                  "draggable": true,
                  "selectedAttraction": 0.1,
                  "parallax" : 0,
                  "friction": 0.6        }'
                  >
                  @foreach ($banners as $banner)
                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2130786431">
                        <div class="img-inner dark" >
                              <img width="1920" height="614" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201920%20614%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$banner->image}}" class="lazy-load attachment-original size-original" alt="" loading="lazy" srcset="" data-srcset="{{$banner->image}} 1920w, {{$banner->image}} 300w, {{$banner->image}} 1024w, {{$banner->image}} 768w, {{$banner->image}} 1536w, {{$banner->image}} 220w" sizes="(max-width: 1920px) 100vw, 1920px" />		
                        </div>
                        <style>
                              #image_2130786431 {
                                    width: 100%;
                              }
                        </style>
                  </div>
                  @endforeach
            </div>
            <div class="loading-spin dark large centered"></div>
      </div>
      </div>
      <style>
      #section_1108416118 {
      padding-top: 0px;
      padding-bottom: 0px;
      }
      #section_1108416118 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_1108416118 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
      </style>
      </section>
      <section class="section hide-for-small" id="section_1840411639">
      <div class="bg section-bg fill bg-fill  bg-loaded" >
      </div>
      <div class="section-content relative">
      <div class="row row-collapse align-equal row-solid"  id="row-929370360">
            <div id="col-1366467310" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner" style="background-color:rgb(226, 237, 248);" >
                  <div class="is-border"
                  style="border-width:0px 0px 0px 0px;">
                  </div>
                  <div class="icon-box featured-box icon-box-left text-left"  >
                  <div class="icon-box-img" style="width: 31px">
                        <div class="icon">
                              <div class="icon-inner" >
                              <img width="263" height="275" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20263%20275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{url('frontend/images/icon-chat-luong.png')}}" class="lazy-load attachment-medium size-medium" alt="" loading="lazy" srcset="" data-srcset="{{url('frontend/images/icon-chat-luong.png')}} 263w, {{url('frontend/images/icon-chat-luong.png')}} 220w" sizes="(max-width: 263px) 100vw, 263px" />					
                              </div>
                        </div>
                  </div>
                  <div class="icon-box-text last-reset">
                        <p><span style="font-size: 85%; font-weight: bold; color: #880000;">THƯƠNG HIỆU UY TÍN</span></p>
                  </div>
                  </div>
                  </div>
                  <style>
                  #col-1366467310 > .col-inner {
                  padding: 15px 15px 15px 15px;
                  }
                  </style>
            </div>
            <div id="col-1285621900" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner" style="background-color:rgb(226, 237, 248);" >
                  <div class="is-border"
                  style="border-width:0px 0px 0px 0px;">
                  </div>
                  <div class="icon-box featured-box icon-box-left text-left"  >
                  <div class="icon-box-img" style="width: 31px">
                        <div class="icon">
                              <div class="icon-inner" >
                              <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{url('frontend/images/quality-products.png')}}" class="lazy-load attachment-medium size-medium" alt="" loading="lazy" srcset="" data-srcset="{{url('frontend/images/quality-products.png')}} 300w, {{url('frontend/images/quality-products.png')}} 1024w, {{url('frontend/images/quality-products.png')}} 768w, {{url('frontend/images/quality-products.png')}} 1536w, {{url('frontend/images/quality-products.png')}} 2048w, {{url('frontend/images/quality-products.png')}} 220w, {{url('frontend/images/quality-products.png')}} 100w" sizes="(max-width: 300px) 100vw, 300px" />					
                              </div>
                        </div>
                  </div>
                  <div class="icon-box-text last-reset">
                        <p><span style="font-size: 85%; font-weight: bold; color: #880000;">SẢN PHẨM  CHẤT LƯỢNG</span></p>
                  </div>
                  </div>
                  </div>
                  <style>
                  #col-1285621900 > .col-inner {
                  padding: 15px 15px 15px 15px;
                  }
                  </style>
            </div>
            <div id="col-1508160561" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner" style="background-color:rgb(226, 237, 248);" >
                  <div class="is-border"
                  style="border-width:0px 0px 0px 0px;">
                  </div>
                  <div class="icon-box featured-box icon-box-left text-left"  >
                  <div class="icon-box-img" style="width: 31px">
                        <div class="icon">
                              <div class="icon-inner" >
                              <img width="256" height="256" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20256%20256%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{url('frontend/images/tu-van-1.png')}}" class="lazy-load attachment-medium size-medium" alt="" loading="lazy" srcset="" data-srcset="{{url('frontend/images/tu-van-1.png')}} 256w, {{url('frontend/images/tu-van-1.png')}} 220w, {{url('frontend/images/tu-van-1.png')}} 100w" sizes="(max-width: 256px) 100vw, 256px" />					
                              </div>
                        </div>
                  </div>
                  <div class="icon-box-text last-reset">
                        <p><span style="font-size: 85%; font-weight: bold; color: #880000;">TƯ VẤN , HỖ TRỢ NHIỆT TÌNH</span></p>
                  </div>
                  </div>
                  </div>
                  <style>
                  #col-1508160561 > .col-inner {
                  padding: 15px 15px 15px 15px;
                  }
                  </style>
            </div>
            <div id="col-662557599" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner" style="background-color:rgb(226, 237, 248);" >
                  <div class="is-border"
                  style="border-width:0px 0px 0px 0px;">
                  </div>
                  <div class="icon-box featured-box icon-box-left text-left"  >
                  <div class="icon-box-img" style="width: 31px">
                        <div class="icon">
                              <div class="icon-inner" >
                              <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{url('frontend/images/giao-hang-toan-quoc.png')}}" class="lazy-load attachment-medium size-medium" alt="" loading="lazy" srcset="" data-srcset="{{url('frontend/images/giao-hang-toan-quoc.png')}} 300w, {{url('frontend/images/giao-hang-toan-quoc.png')}} 220w, {{url('frontend/images/giao-hang-toan-quoc.png')}} 100w, {{url('frontend/images/giao-hang-toan-quoc.png')}} 391w" sizes="(max-width: 300px) 100vw, 300px" />					
                              </div>
                        </div>
                  </div>
                  <div class="icon-box-text last-reset">
                        <p><span style="font-size: 85%; font-weight: bold; color: #880000;">GIAO HÀNG TOÀN QUỐc</span></p>
                  </div>
                  </div>
                  </div>
                  <style>
                  #col-662557599 > .col-inner {
                  padding: 15px 15px 15px 15px;
                  }
                  </style>
            </div>
      </div>
      </div>
      <style>
      #section_1840411639 {
      padding-top: 0px;
      padding-bottom: 0px;
      background-color: rgb(255, 255, 255);
      }
      #section_1840411639 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_1840411639 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
      @media (min-width:550px) {
      #section_1840411639 {
      padding-top: 6px;
      padding-bottom: 6px;
      }
      }
      </style>
      </section>
      <div id="gap-507482771" class="gap-element clearfix" style="display:block; height:auto;">
      <style>
      #gap-507482771 {
      padding-top: 30px;
      }
      </style>
      </div>
      <section class="section" id="section_1492338039">
      <div class="bg section-bg fill bg-fill  bg-loaded" >
      </div>
      <div class="section-content relative">
      <div class="row row-small"  id="row-644359211">
            <div id="col-439034941" class="col hide-for-small medium-3 small-12 large-3"  >
                  @include('layouts.main.rightnav-page')
            </div>
            <div id="col-1295422980" class="col nptruyen-content medium-9 small-12 large-9"  >
                  <div class="col-inner"  >
                        @foreach ($categoryhome as $key=>$cate)
                        @if (count($cate->product) > 0)
                              @if ($key%2==0)
                                    <div class="container section-title-container vi-left-title" >
                                          <h2 class="section-title section-title-bold"><b></b><span class="section-title-main" style="font-size:90%;">{{languageName($cate->name)}}</span><b></b><a href="{{route('allListProCate',['cate'=>$cate->slug])}}" target="" rel="noopener">Xem tất cả<i class="icon-angle-right" ></i></a></h2>
                                    </div>
                                    <div class="row  equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1">
                                          @foreach ($cate->product as $product)
                                                @include('layouts.product.item', ['product'=>$product])
                                          @endforeach
                                    </div>
                              @else
                                    <div class="container section-title-container vi-left-title" >
                                          <h2 class="section-title section-title-bold"><b></b><span class="section-title-main" style="font-size:90%;">{{languageName($cate->name)}}</span><b></b><a href="{{route('allListProCate',['cate'=>$cate->slug])}}" target="" rel="noopener">Xem tất cả<i class="icon-angle-right" ></i></a></h2>
                                    </div>
                                    <div class="row  equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                          @foreach ($cate->product as $product)
                                                @include('layouts.product.item', ['product'=>$product])
                                          @endforeach
                                    </div>
                              @endif
                        @endif
                        @endforeach
                  </div>
            </div>
      </div>
      </div>
      <style>
      #section_1492338039 {
      padding-top: 0px;
      padding-bottom: 0px;
      }
      #section_1492338039 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_1492338039 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
      </style>
      </section>
      <section class="section" id="section_1106812651">
      <div class="bg section-bg fill bg-fill  bg-loaded" >
      </div>
      <div class="section-content relative">
      <div class="row"  id="row-1364185255">
            <div id="col-1134690975" class="col small-12 large-12"  >
                  <div class="col-inner"  >
                  <div class="container section-title-container" style="margin-bottom:-5px;">
                  <h2 class="section-title section-title-center"><b></b><span class="section-title-main" >TRUYỀN THÔNG NÓI VỀ T&T</span><b></b></h2>
                  </div>
                  <div class="slider-wrapper relative" id="slider-5863197" >
                  <div class="slider slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal"
                        data-flickity-options='{
                              "cellAlign": "center",
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "freeScroll": false,
                              "wrapAround": true,
                              "autoPlay": 6000,
                              "pauseAutoPlayOnHover" : true,
                              "prevNextButtons": true,
                              "contain" : true,
                              "adaptiveHeight" : true,
                              "dragThreshold" : 10,
                              "percentPosition": true,
                              "pageDots": false,
                              "rightToLeft": false,
                              "draggable": true,
                              "selectedAttraction": 0.1,
                              "parallax" : 0,
                              "friction": 0.6        }'
                        >
                        @foreach ($partners as $key=>$partner)
                              <div class="ux-logo has-hover align-middle ux_logo inline-block" style="max-width: 100%!important; width: 200px!important;">
                                    <a class="ux-logo-link block image-" title=""  href="{{$partner->link}}" style="padding: 15px;"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$partner->image}}" title="" alt="" class="lazy-load ux-logo-image block" style="height:100px;" loading="lazy" /></a>
                              </div>
                        @endforeach
                  </div>
                  <div class="loading-spin dark large centered"></div>
                  </div>
                  </div>
            </div>
      </div>
      </div>
      <style>
      #section_1106812651 {
      padding-top: 30px;
      padding-bottom: 30px;
      }
      #section_1106812651 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_1106812651 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
      </style>
      </section>
</div>
</main>
@endsection