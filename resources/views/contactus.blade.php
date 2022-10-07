@extends('layouts.main.master')
@section('title')
Liên hệ
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" role="main" class="content-area">
	<section class="section" id="section_824213487">
		<div class="bg section-bg fill bg-fill  bg-loaded" >
		</div>
		<div class="section-content relative">
			<p>
				{!!$setting->iframe_map!!}
			</p>
			<div id="gap-1758300971" class="gap-element clearfix" style="display:block; height:auto;">
				<style>
				#gap-1758300971 {
				padding-top: 30px;
				}
				</style>
			</div>
			<div class="row"  id="row-1496110294">
				<div id="col-131437095" class="col medium-6 small-12 large-6"  >
				<div class="col-inner"  >
					<div class="container section-title-container" >
						<h1 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:90%;">Thông tin liên hệ</span><b></b></h1>
					</div>
					<p><strong>{{$setting->company}}</strong></p>
					<ul>
						<li><strong>VPGD:</strong> {{$setting->address1}}</li>
						@if ($setting->address2)
						<li><strong>Địa chỉ:</strong> {{$setting->address2}}</li>
						@endif
						@if ($setting->address3)
						<li><strong>Nhà máy:</strong> {{$setting->address3}}</li>
						@endif
						{{-- <li><strong>Số TK:</strong> 0021000337035</li>
						<li><strong>Ngân hàng:</strong> Vietcombank &#8211; CN Hà Nội, Phòng giao dịch số 5</li> --}}
						<li><strong>Website:</strong> www.sanxuatgangduc.com</li>
						<li><strong>Hotline VPGD:</strong> {{$setting->phone1}}</li>
						<li style="margin-bottom: 0;"><strong>Hotline Miền Bắc:</strong></li>
						@foreach (json_decode($setting->phone2) as $item)
						<span style="padding-left: 40px;">{{$item->name}}: <a href="tel:{{$item->number}}">{{$item->number}}</a></span><br>
						@endforeach
						<li style="margin-bottom: 0;"><strong>Hotline Miền Nam:</strong></li>
						@foreach (json_decode($setting->phone3) as $item)
						<span style="padding-left: 40px;">{{$item->name}}: <a href="tel:{{$item->number}}">{{$item->number}}</a></span><br>
						@endforeach
						<li><strong>Email:</strong> {{$setting->email}}</li>
					</ul>
				</div>
				</div>
				<div id="col-1127178756" class="col medium-6 small-12 large-6"  >
				<div class="col-inner"  >
					<div class="container section-title-container" >
						<h2 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:90%;">gỬI THÔNG TIN LIÊN HỆ</span><b></b></h2>
					</div>
					<div role="form" class="wpcf7" id="wpcf7-f930-p72-o1" lang="vi" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
							@csrf
							<p><span class="wpcf7-form-control-wrap text-905"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên" /></span> </p>
							<p><span class="wpcf7-form-control-wrap email-292"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span> </p>
							<p><span class="wpcf7-form-control-wrap text-905"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span><br />
							<span class="wpcf7-form-control-wrap textarea-466"><textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nội dung liên hệ"></textarea></span>
							</p>
							<p><input type="submit" value="Gửi đi" class="wpcf7-form-control has-spinner wpcf7-submit" /></p>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
		<style>
			#section_824213487 {
			padding-top: 0px;
			padding-bottom: 0px;
			}
			#section_824213487 .ux-shape-divider--top svg {
			height: 150px;
			--divider-top-width: 100%;
			}
			#section_824213487 .ux-shape-divider--bottom svg {
			height: 150px;
			--divider-width: 100%;
			}
		</style>
	</section>
	</div>
</main>
@endsection