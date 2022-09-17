@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="page-title shop-page-title product-page-title">
   <div class="page-title-inner flex-row medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
         <div class="is-large">
            <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{route('home')}}">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}">{{languageName($product->cate->name)}}</a> <span class="divider">&#47;</span> {{languageName($product->name)}}</nav>
         </div>
      </div>
      <div class="flex-col medium-text-center">
      </div>
   </div>
</div>
<main id="main" class="">
   <div class="shop-container">
      <div class="container">
         <div class="woocommerce-notices-wrapper"></div>
      </div>
      <div id="product-2268" class="post-ftoc product type-product post-2268 status-publish first instock product_cat-san-pham-duc-gang-cau product_cat-song-chan-rac-gang-xam-gang-cau has-post-thumbnail shipping-taxable product-type-simple">
         <div class="product-main">
            <div class="row content-row row-divided row-large">
               <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                  @include('layouts.main.rightnav-page')
               </div>
               <div class="col large-9">
                  <div class="row">
                     <div class="large-6 col">
                        <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                           <div class="badge-container is-larger absolute left top z-1"></div>
                           <div class="image-tools absolute top show-on-hover right z-3">
                           </div>
                           <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                              data-flickity-options='{
                              "cellAlign": "center",
                              "wrapAround": true,
                              "autoPlay": false,
                              "prevNextButtons":true,
                              "adaptiveHeight": true,
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "dragThreshold" : 15,
                              "pageDots": false,
                              "rightToLeft": false       }'>
                                 @foreach ($imgs as $img)
                                    <div class="woocommerce-product-gallery__image slide first">
                                       <a data-src="{{$img}}" data-fancybox="gallery">
                                       <img style="height: 400px;" width="300" height="453" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201695%202560%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="lazy-load wp-post-image skip-lazy" alt="{{languageName($product->name)}}" loading="lazy" title="{{languageName($product->name)}}" data-caption="{{languageName($product->name)}}" data-src="{{$img}}" data-large_image="{{$img}}" data-large_image_width="1695" data-large_image_height="2560" srcset="" data-srcset="{{$img}} 300w, {{$img}} 199w, {{$img}} 678w, {{$img}} 768w, {{$img}} 1017w, {{$img}} 1356w, {{$img}} 220w, {{$img}} 1695w" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                    </div>
                                 @endforeach
                           </figure>
                        </div>
                     </div>
                     <div class="product-info summary entry-summary col col-fit product-summary">
                        <h1 class="product-title product_title entry-title">
                           {{languageName($product->name)}}
                        </h1>
                        <div class="is-divider small"></div>
                        <div class="price-wrapper">
                           <p class="price product-page-price ">
                              <button data-id="{{$product->id}}" data-width="500px" class="wpb-get-a-quote-button-form-fire wpb-get-a-quote-button-btn-medium wpb-get-a-quote-button-btn wpb-get-a-quote-button-btn-default">Liên hệ báo giá</button>
                           </p>
                        </div>
                        <div class="product-short-description">
                           <p>
                              <!--:vi-->
                           </p>
                           {!!languageName($product->description)!!}
                        </div>
                        @if (json_decode($product->preserve)[0]->detail != null)
                           <div class="row row-solid"  id="row-488766429">
                              <div id="col-1038352084" class="col small-12 large-12"  >
                                 <div class="col-inner" style="background-color:rgb(255, 255, 255);" >
                                    <div class="khuyen-mai">
                                       <p><span style="color: #d83131;"><strong>Khuyến mãi hot nhất:</strong></span></p>
                                       <ul>
                                          @foreach (json_decode($product->preserve) as $item)
                                             <li><img class="alignnone wp-image-2151" src="{{url('frontend/images/icon-1.png')}}" alt="" width="20" height="20" /> {{$item->detail}}</li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <style>
                                 #row-488766429 > .col > .col-inner {
                                 background-color: rgb(255, 255, 255);
                                 }
                              </style>
                           </div>
                        @endif
                        <div class="social-icons share-icons share-row relative" ><a href="whatsapp://send?text={{languageName($product->name)}} - {{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" data-action="share/whatsapp/share" class="icon primary button round tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="https://www.facebook.com/sharer.php?u={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a><a href="https://twitter.com/share?url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:enteryour@addresshere.com?subject={{languageName($product->name)}}&amp;body=Check%20this%20out:%20{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" rel="nofollow" class="icon primary button round tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a><a href="https://pinterest.com/pin/create/button/?url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}&amp;media=https://pkcvietnam.com.vn/wp-content/uploads/2021/07/song-chan-rac-1000x400-mau-den-678x1024.jpg&amp;description={{languageName($product->name)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="https://vkontakte.ru/share.php?url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" target="_blank" class="icon primary button round tooltip vk" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" title="Share on VKontakte" aria-label="Share on VKontakte"><i class="icon-vk" ></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}&title={{languageName($product->name)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a><a href="https://tumblr.com/widgets/share/tool?canonicalUrl={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" target="_blank" class="icon primary button round tooltip tumblr" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" title="Share on Tumblr" aria-label="Share on Tumblr"><i class="icon-tumblr" ></i></a></div>
                     </div>
                  </div>
                  <div class="product-footer">
                     <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                        <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                           <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                              <a href="#tab-description">
                              Mô tả					</a>
                           </li>
                        </ul>
                        <div class="tab-panels">
                           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                              {!!languageName($product->content)!!}
                           </div>
                        </div>
                     </div>
                     @if (count($productlq) > 1)
                        <div class="related related-products-wrapper product-section">
                           <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                              Sản phẩm tương tự			
                           </h3>
                           <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                              @foreach ($productlq as $pro)
                              @if ($product->id != $pro->id)
                                 @include('layouts.product.item', ['product'=>$pro])
                              @endif
                              @endforeach
                           </div>
                        </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- shop container -->
</main>
@endsection