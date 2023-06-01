<section class="bg-white w-full  flex justify-center items-center">
    <div class="w-[100%] flex flex-col justify-center items-center gap-8 lg:gap-20  ">
        <div class=" w-[70%]">
            <h1 class="font-hammersmith text-center text-2xl lg:text-6xl mb-6">INSCRIPCIÓN</h1>
            <p class="text-md lg:text-3xl font-Poppins text-justify lg:text-center">
                Para ser parte del Círculo de Kinesiólogos y Fisioterapeutas de Mendoza tenés que presentar la siguiente documentación solicitada a continuación. <br>¡Gracias por elegir ser parte del Círculo!
            </p>
            <div class="w-100 flex justify-center mt-10">
                <h2 class="font-hammersmith lg:text-3xl ">SE ADJUNTA EN FORMATO DIGITAL</h2>
            </div>
        </div>
        <div class="w-full lg:w-[45%]">
            <form class="text-center flex flex-col gap-4 items-center" method="POST" action="{{ route('asociate.send-form') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-6 text-left w-[80%] mx-auto">
                    <div>
                        <label for="name"
                            class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white">Nombre y
                            Apellido*</label>
                        <input type="text" id="name"
                            class=" block w-full font-Poppins font-semibold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            placeholder="" name="name" id="name" required>
                    </div>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white"
                        for="file_input">Currículum Vitae</label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="cv">
                </div>
                <div class="flex flex-col items-center justify-center w-full">
                    <div class="w-[80%]">
                        <div class="flex justify-start w-full">
                            <p class="block  mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white" for="file_input">
                                Fotocopia de DNI (nuevo)</p>
                        </div>
                        <label for="dropzone-file" 
                            class="flex flex-col items-center justify-center w-full h-50 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2  font-Poppins font-bold text-xl text-gray-500 dark:text-gray-400"><span
                                        class="">Hacer clic
                                        para cargar</span> o arrastrar y soltar</p>
                                <p class="font-Poppins font-bold text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)
                                </p>
                            </div>
                            <input id="dropzone-file" name="dni" type="file" class="hidden" required/>
                        </label>
                    </div>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white" for="file_input">Título
                        Universitario (1 copia certificada)
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="titulo" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white" for="file_input">Título
                        de posgrado (En caso de poseer)

                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="posgrado" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white"
                        for="file_input">Matrícula Provincial
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="matricula" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white"
                        for="file_input">Constancia Ingresos Brutos
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="ingresos" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white"
                        for="file_input">Constancia de CUIT (constancia del sitio Web de AFIP-DGI)
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="cuit" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white"
                        for="file_input">Certificado de Inscripción en la Superintendencia de la Salud
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="salud" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl font-medium text-gray-900 dark:text-white" for="file_input">Póliza
                        de Seguro de Mala Praxis vigente expedido por la compañía aseguradora
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="poliza" required>
                </div>
                <div class="mb-6 text-left w-[80%] mx-auto mt-6">
                    <label class="block mb-2 font-hammersmith text-xl text-gray-900 dark:text-white"
                        for="file_input">Habilitación del Consultorio (emitida por Ministerio de Salud y/o
                        Municipalidad y/o Colegio Médico.)
                    </label>
                    <input
                        class="block w-full font-Poppins font-bold text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="consultorio" required>
                </div>
                <button type="submit"
                    class="lg:w-[60%] lg:rounded-[30px] mb-40 lg:mb-0 lg:mt-8 text-white lg:text-xl bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-md w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Enviar</button>
            </form>
        </div>
    </div>
</section>
