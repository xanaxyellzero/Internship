<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-3">
    <div class="hero min-h-screen bg-base-200">
    <div class="text-center hero-content">
        <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">
                Hello {{ Auth::user()->name }}
            </h1> 
        <p class="mb-5">
                Ini adalah antarmuka administrator dari website Polda Jawa Tengah 
            </p> 
        </div>
    </div>
    </div>


    </div>

</x-app-layout>
