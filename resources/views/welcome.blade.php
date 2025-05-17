@extends('layouts.app')

@section('content')
    <div
        class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-600 via-blue-400 to-green-400 rounded-3xl m-4 shadow-lg relative overflow-hidden">
        <!-- Top Yonex Logo -->
        <div
            class="absolute top-4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-md px-4 py-1 shadow">
            <img src="/images/yonex-logo.svg" alt="Yonex" class="h-8 mx-auto">
        </div>

        <div class="w-full max-w-3xl text-center px-6 py-16">
            <h1 class="text-6xl md:text-7xl font-extrabold tracking-widest text-white mb-6"
                style="font-family: 'Orbitron', sans-serif;">SHUTTLERS</h1>
            <h2 class="text-lg font-bold text-white uppercase mb-4">Craft your strategy. Own the court</h2>
            <p class="text-white mb-10">
                Beyond racquets and shuttlecocks, you'll select a Shuttler with unique badminton abilities—lightning-fast
                footwork, precise drop shots, or powerful smashes—that create the perfect openings to outplay your opponent.
                Each Shuttler brings their own style, and every rally tells a different story.
            </p>
            <!-- Icons Row -->
            <div class="flex justify-center gap-8 mb-10">
                <img src="/images/explosive.svg" alt="Icon 1" class="h-10 w-10" />
                <img src="/images/resilient.svg" alt="Icon 2" class="h-10 w-10" />
                <img src="/images/perceptive.svg" alt="Icon 3" class="h-10 w-10" />
                <img src="/images/cunning.svg" alt="Icon 4" class="h-10 w-10" />
                <img src="/images/enduring.svg" alt="Icon 5" class="h-10 w-10" />
                <img src="/images/fleet.svg" alt="Icon 6" class="h-10 w-10" />
                <img src="/images/precision.svg" alt="Icon 7" class="h-10 w-10" />
            </div>
        </div>

        <!-- Bottom Footer Bar -->
        <div
            class="absolute bottom-0 left-0 w-full bg-gradient-to-r from-blue-700 to-green-500 py-3 flex flex-col md:flex-row items-center justify-between px-8 text-white text-xs rounded-b-3xl">
            <div class="flex items-center gap-2">
                <img src="/images/yonex-logo.png" alt="Yonex" class="h-5">
                <span>2012 - 2024 Yonex Co., Ltd</span>
            </div>
            <div class="flex gap-4 mt-2 md:mt-0">
                <a href="#" class="hover:underline">Terms and Conditions</a>
                <a href="#" class="hover:underline">Accessibility</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Using Yonex Products Safely</a>
            </div>
        </div>
    </div>
@endsection
