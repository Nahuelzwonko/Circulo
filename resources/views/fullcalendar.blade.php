@extends('users.layouts.agenda')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')
<div id="sticky-banner" tabindex="-1" class="fixed top-0 left-0 z-50 flex justify-between w-full p-4 border-b border-gray-200 bg-blue-500">
    <div class="flex items-center mx-auto">
        <p class="flex items-center text-center text-sm font-normal text-white dark:text-gray-400">
            <span class="inline-flex p-1 mr-3 bg-gray-300 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
                <svg class="w-3 h-3 text-green-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                    <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"/>
                </svg>
                <span class="sr-only">Light bulb</span>
            </span>
            <span>El circulo de Kinesiologos y Fisioterapeutas recomienda usar computadora para <span class="text-bold">AGENDA VIRTUAL</span></span>
        </p>
    </div>
    <div class="flex items-center">
        <button data-dismiss-target="#sticky-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-red-500 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>
            <button type="button" class="btn btn-primary hidden" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" id="title">
                            <span id="titleError" class="text-danger"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sm:p-10">
                <div id="calendar"></div>
            </div>



@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
