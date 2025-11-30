@extends('layouts.app')

@section('title', 'আমার সম্পর্কে')

@section('content')
<div class="bg-white p-10 rounded-xl shadow-2xl">
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4 border-b pb-2">{{ $name }}</h1>
    <p class="text-2xl text-blue-600 mb-8">{{ $title }}</p>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <div class="lg:col-span-2">
            <h3 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 pb-1">আমার লক্ষ্য</h3>
            <p class="text-gray-700 leading-relaxed mb-8">{{ $bio }}</p>

            <h3 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 pb-1">শিক্ষা ও অভিজ্ঞতা</h3>
            <ul class="list-disc list-outside text-gray-700 space-y-3 pl-5 mb-8">
                <li class="font-semibold">{{ $education }}</li>
                <li>{{ $experience }}</li>
            </ul>
        </div>
        
        <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
            <h4 class="text-2xl font-bold text-gray-800 mb-4">যোগাযোগ</h4>
            <ul class="space-y-3 text-gray-700">
                <li>**ইমেইল:** rahmasajid1027@gmail.com</li>
                <li>**LinkedIn:** [আপনার লিঙ্কডইন প্রোফাইল লিঙ্ক]</li>
                <li>**GitHub:** [আপনার GitHub প্রোফাইল লিঙ্ক]</li>
            </ul>
        </div>
    </div>

    <h3 class="text-3xl font-bold text-gray-800 mt-10 mb-6 border-b-2 pb-1">দক্ষতা (Skills)</h3>
    <div class="flex flex-wrap gap-4">
        @foreach($skills as $skill)
            <span class="bg-indigo-100 text-indigo-800 text-lg font-medium px-4 py-2 rounded-full shadow-md transition duration-150 hover:bg-indigo-200">
                {{ $skill }}
            </span>
        @endforeach
    </div>
</div>
@endsection