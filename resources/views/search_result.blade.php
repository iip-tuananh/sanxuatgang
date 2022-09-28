@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="shop-page-title category-page-title page-title ">
	<div class="page-title-inner flex-row  medium-flex-wrap container">
	<div class="flex-col flex-grow medium-text-center">
		<div class="is-large">
			<nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{route('home')}}">Trang chủ</a> <span class="divider">&#47;</span> Tìm thấy {{count($resultPro)}} kết quả phù hợp</nav>
		</div>
		<div class="category-filtering category-filter-row show-for-medium">
			<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
			<i class="icon-equalizer"></i>
			<strong>Bộ lọc</strong>
			</a>
			<div class="inline-block">
			</div>
		</div>
	</div>
	</div>
</div>
<main id="main" class="">
	<div class="row category-page-row">
	<div class="col large-3 hide-for-medium ">
		@include('layouts.main.rightnav-page')
	</div>
	<div class="col large-9">
		<div class="shop-container">
			<div class="woocommerce-notices-wrapper"></div>
			<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 equalize-box">
				@foreach ($resultPro as $product)
				@include('layouts.product.item', ['product'=>$product])
				@endforeach
			</div>
			<!-- row -->
		</div>
		<!-- shop container -->		
	</div>
	</div>
</main>
@endsection
