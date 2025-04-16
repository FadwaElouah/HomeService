@extends('layouts.app')
@section('content')
<div class="flex flex-col min-h-screen">
  <!-- Header -->
  <header class="p-4">
    <div class="container mx-auto">
        <div class="flex items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/home-icon.svg') }}" alt="HomeService" class="w-6 h-6 mr-1">
                <span class="font-bold">
                    <span class="text-[#fd7600]">Home</span>
                    <span>Service</span>
                </span>
            </div>
        </div>
    </div>
</header>
