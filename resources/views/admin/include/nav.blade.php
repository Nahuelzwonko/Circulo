
<!-- Header -->
<div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
    <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-gray-800  border-none">
        <img class="w-28  mr-4 mt-1 rounded-md overflow-hidden" src="{{ asset('storage/logo/logowhite.svg') }}" />

    </div>
    <div class="flex justify-between items-center h-14 bg-gray-800 header-right">
        <div class="rounded flex items-center w-full max-w-xl mr-4 p-2  ">
        </div>
        <ul class="flex items-center">
            <li>
            </li>
            <li>
                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center mr-4 hover:text-red-800" role="menuitem">
                        <span class="inline-flex mr-1">Salir</span>

                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- ./Header -->
