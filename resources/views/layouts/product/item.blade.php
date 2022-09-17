
@php
$imgs = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="col" >
<div class="col-inner">
      <div class="badge-container absolute left top z-1"></div>
      <div class="product-small box has-hover box-bounce box-text-bottom">
      <div class="box-image" >
      <div class="image-zoom-long image-cover" style="padding-top:250px;">
            <a href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" aria-label="{{languageName($product->name)}}">
            <img width="1695" height="2560" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201695%202560%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$imgs[0]}}" class="lazy-load attachment-original size-original" alt="{{languageName($product->name)}}" loading="lazy" srcset="" data-srcset="{{$imgs[0]}} 1695w, {{$imgs[0]}} 199w, {{$imgs[0]}} 678w, {{$imgs[0]}} 768w, {{$imgs[0]}} 1017w, {{$imgs[0]}} 1356w, {{$imgs[0]}} 220w, {{$imgs[0]}} 300w" sizes="(max-width: 1695px) 100vw, 1695px" />									</a>
      </div>
      <div class="image-tools top right show-on-hover">
      </div>
      <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
            <a class="quick-view" href="javascript:void(0);" data-id="{{$product->id}}">Xem nhanh</a>									
      </div>
      </div>
      <div class="box-text text-center" >
      <div class="title-wrapper">
            <p class="name product-title woocommerce-loop-product__title"><a href="{{route('detailProduct',['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{languageName($product->name)}}</a></p>
      </div>
      <div class="price-wrapper">
            <span class="price"><button data-id="{{$product->id}}" data-width="500px" class="wpb-get-a-quote-button-form-fire wpb-get-a-quote-button-btn-medium wpb-get-a-quote-button-btn wpb-get-a-quote-button-btn-default">Liên hệ báo giá</button></span>
      </div>
      </div>
      </div>
</div>
</div>

