@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="blog-wrapper blog-archive page-wrapper">
      <header class="archive-page-header">
         <div class="row">
            <div class="large-12 text-center col">
               <h1 class="page-title is-large uppercase">
                  Danh mục: <span>{{$title_page}}</span>	
               </h1>
            </div>
         </div>
      </header>
      <div class="row row-large row-divided ">
         <div class="large-9 col">
            <div id="row-1948181793" class="row large-columns-2 medium-columns- small-columns-1 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
               @foreach ($blogs as $blog)
                  <div class="col post-item" >
                     <div class="col-inner">
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="plain">
                           <div class="box box-text-bottom box-blog-post has-hover">
                              <div class="box-image" >
                                 <div class="image-cover" style="padding-top:56%;">
                                    <img width="300" height="200" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$blog->image}}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="" data-srcset="{{$blog->image}} 300w, {{$blog->image}} 220w, {{$blog->image}} 600w" sizes="(max-width: 300px) 100vw, 300px" />  							  							  						
                                 </div>
                              </div>
                              <div class="box-text text-left" >
                                 <div class="box-text-inner blog-post-inner">
                                    <h5 class="post-title is-large desc">{{languageName($blog->title)}}</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt desc">{{languageName($blog->description)}}</p>
                                 </div>
                              </div>
                              <div class="badge absolute top post-date badge-outline">
                                 <div class="badge-inner">
                                    <span class="post-date-day">{{date_format($blog->created_at, 'd')}}</span><br>
                                    <span class="post-date-month is-xsmall">{{date_format($blog->created_at, 'M')}}</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               @endforeach
            </div>
            <ul class="page-numbers nav-pagination links text-center">
               {{$blogs->links()}}
            </ul>
         </div>
         <div class="post-sidebar large-3 col">
            @include('layouts.main.rightnav-page')
         </div>
      </div>
   </div>
</main>
@endsection