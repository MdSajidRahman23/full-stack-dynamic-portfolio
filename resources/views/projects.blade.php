@extends('layouts.app')

@section('title', 'আমার প্রজেক্টস')

@section('content')
<h1 class="text-5xl font-extrabold text-gray-900 mb-12 text-center">আমার সেরা প্রজেক্টস</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach($projects as $project)
    <div class="bg-white p-6 rounded-xl shadow-xl border-t-4 border-blue-500 flex flex-col hover:shadow-2xl transform hover:-translate-y-1 transition duration-300">
        <h2 class="text-2xl font-bold text-gray-900 mb-3">{{ $project['name'] }}</h2>
        <p class="text-gray-600 mb-4 flex-grow">{{ $project['description'] }}</p>
        
        <div class="mt-auto pt-4 border-t border-gray-200">
            <span class="text-sm font-semibold text-gray-700 block mb-2">ব্যবহৃত প্রযুক্তি:</span>
            <span class="text-sm text-indigo-600 font-medium">{{ $project['tech'] }}</span>
        </div>
        
        <a href="{{ $project['link'] }}" target="_blank" class="mt-4 inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition duration-150">
            বিস্তারিত দেখুন
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
    @endforeach
</div>
@endsection