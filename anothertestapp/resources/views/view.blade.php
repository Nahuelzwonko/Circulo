@extends('layout')
@section('title', 'Vista de la noticia | CKFM')
@section('content')
<div class="max-w-screen-xl">
    <main class="mt-10" >
        <div class="mb-4 md:mb-0 w-full max-w-sreen-md mx-auto relative ">

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
