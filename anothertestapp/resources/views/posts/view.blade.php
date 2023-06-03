<div class="container mx-auto mt-[60px] ">
    <div class="w-full flex justify-start mb-4 lg:mb-10">
        <span class="font-Poppins text-black font-bold">Posted on {{ \Carbon\Carbon::parse($post->created_at)->format('l, j F') }}</span>
    </div>
    <div class="w-full flex justify-center mb-12">
        <h1 class="lg:text-5xl text-2xl text-center font-hammersmith capitalize">{{ $post->title }}</h1>
    </div>
    <div class="w-full flex justify-center">
        <img src="/storage/{{ $post->image_url }}" alt="Imagen de la noticia" class=" mt-4 rounded-[30px]">
    </div>
    <p class="mt-2 text-gray-600  lg:block">{{ ($post->body) }}</p>
    <div>
        <p class=" mt-12 text-2xl text-gray-600 font-Poppins text-justify">{!! nl2br($post->cuerpo) !!}</p>
    </div>
    
    <div class="w-full flex flex-col items-center mt-20">
        <div>
            <h2 class="font-Poppins text-[30px] mb-8">PDF's Importantes</h2>
        </div>
        <div>
            <a href="{{ asset('storage/' . $post->pdf_url) }}" download class="bg-blue-500 hover:bg-blue-700 text-white font-Poppins py-2 px-4 rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 0h8a2 2 0 012 2v6h2a2 2 0 012 2v8a2 2 0 01-2 2H2a2 2 0 01-2-2V2a2 2 0 012-2h4zm1 2v2h6V2H7zm2 3a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1zm5 5a1 1 0 01-1 1h-2a1 1 0 010-2h2a1 1 0 011 1zm0 3a1 1 0 01-1 1h-2a1 1 0 010-2h2a1 1 0 011 1z" clip-rule="evenodd"></path>
                </svg>
                Descargar PDF
            </a>
        </div>
    </div>


</div>
