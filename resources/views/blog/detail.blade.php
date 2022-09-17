@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large row-divided ">
		<div class="large-9 col">
			<article id="post-1033" class="post-1033 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
				<div class="article-inner ">
				<header class="entry-header">
					<div class="entry-header-text entry-header-text-top text-left">
						<h6 class="entry-category is-xsmall">
							<a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" rel="category tag">{{languageName($blog_detail->cate->name)}}</a>
						</h6>
						<h1 class="entry-title">{{languageName($blog_detail->title)}}</h1>
						<div class="entry-divider is-divider small"></div>
					</div>
				</header>
				<div class="entry-content single-page">
					{!!languageName($blog_detail->content)!!}
					<div class="blog-share text-center">
						<div class="is-divider medium"></div>
						<div class="social-icons share-icons share-row relative" ><a href="whatsapp://send?text={{languageName($blog_detail->title)}} - {{route('detailBlog', ['slug'=>$blog_detail->slug])}}" data-action="share/whatsapp/share" class="icon primary button round tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="https://www.facebook.com/sharer.php?u={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a><a href="https://twitter.com/share?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:enteryour@addresshere.com?subject={{languageName($blog_detail->title)}}&amp;body=Check%20this%20out:%20{{route('detailBlog', ['slug'=>$blog_detail->slug])}}" rel="nofollow" class="icon primary button round tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a><a href="https://pinterest.com/pin/create/button/?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}&amp;media=https://pkcvietnam.com.vn/wp-content/uploads/2015/06/duc-gang-khuon-cat_1408604484.jpg&amp;description={{languageName($blog_detail->title)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="https://vkontakte.ru/share.php?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" target="_blank" class="icon primary button round tooltip vk" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" title="Share on VKontakte" aria-label="Share on VKontakte"><i class="icon-vk" ></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}&title={{languageName($blog_detail->title)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon primary button round tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a><a href="https://tumblr.com/widgets/share/tool?canonicalUrl={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" target="_blank" class="icon primary button round tooltip tumblr" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" title="Share on Tumblr" aria-label="Share on Tumblr"><i class="icon-tumblr" ></i></a></div>
					</div>
				</div>
				</div>
			</article>
		</div>
		<div class="post-sidebar large-3 col">
			@include('layouts.main.rightnav-page')
		</div>
	</div>
	</div>
</main>
@endsection