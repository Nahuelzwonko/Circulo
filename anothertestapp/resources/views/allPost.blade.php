@extends('layout')
@section('title', 'Noticias | CKFM')
@section('content')
<section class="relative py-20 overflow-hidden">
    <div class="max-w-2xl mx-auto mb-15 text-center">
        
        <h1 class="font-heading text-5xl xs:text-6xl md:text-7xl font-bold">
          <span class="font-serif italic">Noticias</span>
        </h1>
      </div>
    @foreach($posts as $post)
    
    <div class="relative container px-4 mx-auto">
      <div class="max-w-5xl mx-auto">
        {{--  --}}
        <div class="py-12 border-t-2 border-gray-100">
          <div class="flex flex-wrap lg:flex-nowrap items-center">
            <div class="w-full lg:w-auto px-4 mb-8 lg:mb-0">
              <img class="block w-44 h-30" src="saturn-assets/images/blog/image-blog-small-2.png" alt="">
            </div>
            <div class="w-full lg:w-9/12 px-4 mb-10 lg:mb-0">
              <div class="max-w-2xl">
                <img class="w-full" src="/storage/{{$post->image_url}}" alt="foto">
                <span class="block text-gray-400 mb-1">{{\Carbon\Carbon::parse($post->created_at)}}</span>
                <a href="{{route('posts.view', $post->id)}}" class="text-2xl font-semibold text-gray-900">{{$post->title}}</a>
                <span class="w-[80px]">{{$post->body}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
@endsection
