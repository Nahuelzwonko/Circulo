<section class="container mx-auto font-Poppins">
    <h1 class="lg:text-7xl font-extrabold text-center">Noticias</h1>
    @if ($posts->isNotEmpty())
        <div class="bg-white p-6 flex items-center justify-between">
        
            <div class="ml-4 p-4 flex w-[55%]">
                
                <div class="flex flex-col items-center ">
                    
                    <div class="w-full flex justify-start mt-8">
                        <span class=" text-black">Posted on
                            {{ \Carbon\Carbon::parse($posts->first()->created_at)->format('l, j F') }}</span>
                    </div>
                    <div class="w-full flex justify-start">
                        <h2 class="text-[30px] font-extrabold ">{{ $posts->first()->title }}</h2>
                    </div>
                    <div class="">
                        <p class="text-gray-600 mt-5 text-justify">{{ $posts->first()->body }}</p>
                    </div>
                    <div class="w-full flex justify-start mt-5">
                        <a href="{{ route('posts.view', $posts->first()->id) }}"
                            class="flex items-center font-bold text-black hover:underline">
                            Leer más
                            <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="ml-1">
                                <path
                                    d="M17.5209 8.05802C17.6798 8.2184 17.7689 8.435 17.7689 8.66073C17.7689 8.88646 17.6798 9.10306 17.5209 9.26344L9.90773 16.8766C9.74535 17.0318 9.52964 17.1189 9.30502 17.1198C9.19275 17.1193 9.08157 17.0978 8.97723 17.0564C8.82327 16.9917 8.69191 16.8828 8.59971 16.7436C8.50751 16.6043 8.45858 16.4409 8.45911 16.2739V9.50664H0.845911C0.621561 9.50664 0.406401 9.41752 0.247761 9.25888C0.0891224 9.10024 0 8.88508 0 8.66073C0 8.43638 0.0891224 8.22122 0.247761 8.06258C0.406401 7.90394 0.621561 7.81482 0.845911 7.81482H8.45911V1.04753C8.45858 0.880527 8.50751 0.717105 8.59971 0.57786C8.69191 0.438615 8.82327 0.329777 8.97723 0.265063C9.13348 0.204119 9.30379 0.188659 9.46846 0.22047C9.63312 0.252281 9.78542 0.330064 9.90773 0.444819L17.5209 8.05802Z"
                                    fill="#030211" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 ">
                <img src="/storage/{{ $posts->first()->image_url }}" alt="Imagen de la noticia" class="mt-4 rounded-[20px]">
            </div>
        </div>
    @endif
    <div class="w-full flex justify-center border-t-[1.5px] bg-gradient-to-r border-black to-gray-400 mt-10"></div>
    <div class="w-full flex justify-start mb-20">
        <h2 class="text-[40px] ">Últimas noticias</h2>
    </div>
    {{-- Mostrar las demás noticias --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-30 gap-8">
        @foreach ($posts->slice(1) as $post)
            <div class="bg-white p-6">
                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                <img src="/storage/{{ $post->image_url }}" alt="Imagen de la noticia" class="mt-4 rounded-lg">
                <span class=" text-black">{{ \Carbon\Carbon::parse($post->created_at)->format('l, j F') }}</span>
                <p class="mt-2 text-gray-600">{{ $post->body }}</p>
                <div class="w-full flex justify-start mt-5">
                    <a href="{{ route('posts.view', $post->id) }}"
                        class="flex items-center font-semibold text-black hover:underline">
                        Leer más
                        <svg width="10" height="10" viewBox="1 -3 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-1">
                            <path
                                d="M17.5209 8.05802C17.6798 8.2184 17.7689 8.435 17.7689 8.66073C17.7689 8.88646 17.6798 9.10306 17.5209 9.26344L9.90773 16.8766C9.74535 17.0318 9.52964 17.1189 9.30502 17.1198C9.19275 17.1193 9.08157 17.0978 8.97723 17.0564C8.82327 16.9917 8.69191 16.8828 8.59971 16.7436C8.50751 16.6043 8.45858 16.4409 8.45911 16.2739V9.50664H0.845911C0.621561 9.50664 0.406401 9.41752 0.247761 9.25888C0.0891224 9.10024 0 8.88508 0 8.66073C0 8.43638 0.0891224 8.22122 0.247761 8.06258C0.406401 7.90394 0.621561 7.81482 0.845911 7.81482H8.45911V1.04753C8.45858 0.880527 8.50751 0.717105 8.59971 0.57786C8.69191 0.438615 8.82327 0.329777 8.97723 0.265063C9.13348 0.204119 9.30379 0.188659 9.46846 0.22047C9.63312 0.252281 9.78542 0.330064 9.90773 0.444819L17.5209 8.05802Z"
                                fill="#030211" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
