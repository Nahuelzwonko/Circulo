@extends('layout')
@section('title', 'Vista de la noticia | CKFM')
@section('content')
<div class="max-w-screen-xl">
    <main class="mt-10" >
        <div class="mb-4 md:mb-0 w-full max-w-sreen-md mx-auto relative ">
            {{-- <img src="/storage/{{$post->image_url}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" alt="imagen"> --}}
            <div class="flex justify-center">
                <h2 class="text-black text-[40px]">
                    {{$post->title}}
                </h2>
            </div>
        </div>
        <div>
            <p></p>
        </div>
    </main>
</div>
@endsection