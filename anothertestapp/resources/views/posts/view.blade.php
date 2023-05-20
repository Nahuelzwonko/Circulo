<section class="container mx-auto  ">
    <div class="w-full flex justify-start mb-10">
        <span class="font-Poppins text-black">Posted on
            {{ \Carbon\Carbon::parse($post->created_at)->format('l, j F') }}</span>
    </div>
    <div class="w-full flex justify-center">
        <h1 class="text-3xl font-custom">{{ $post->title }}</h1>
    </div>
    <div class="w-full flex justify-center">
        <img src="/storage/{{ $post->image_url }}" alt="Imagen de la noticia" class="mt-4 rounded-lg">
    </div>
    <div>
        <p class="mt-2 text-gray-600">{!! nl2br($post->cuerpo) !!}</p>
    </div>
    </div>
<div class="w-full flex flex-col items-center">
    <div>
        <h2 class="font-custom text-[30px] ">PDF's Importantes</h2>
    </div>
    <div>
        <a href="{{ asset('storage/' . $post->pdf_url) }}" download class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 0h8a2 2 0 012 2v6h2a2 2 0 012 2v8a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2h4zm1 2v2h6V2H7zm2 3a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1zm5 5a1 1 0 01-1 1h-2a1 1 0 010-2h2a1 1 0 011 1zm0 3a1 1 0 01-1 1h-2a1 1 0 010-2h2a1 1 0 011 1z" clip-rule="evenodd"></path>
            </svg>
            Descargar PDF
        </a>
    </div>
</div>


</section>
