@extends('layouts.app')

@section('title', 'হোম')

@section('content')
<header class="text-center py-20 lg:py-32 bg-white rounded-3xl shadow-2xl overflow-hidden relative">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-100 opacity-70"></div>
    <div class="relative z-10 max-w-4xl mx-auto">
        <h1 class="text-6xl font-extrabold text-gray-900 mb-4 animate-fadeIn">
            কোডিং-এ আমার পরিচয়
        </h1>
        <p class="text-2xl text-gray-600 mb-8 font-light">
            আমি <span class="font-bold text-blue-600">MD SAJID RAHMAN</span>, একজন দক্ষ Laravel ডেভেলপার।
            ক্লিন কোড এবং ইউজার-কেন্দ্রিক ডিজাইন আমার লক্ষ্য।
        </p>
        <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 shadow-lg transform hover:scale-105 transition duration-300">
            আমার কাজের নমুনা দেখুন →
        </a>
    </div>
</header>

<section class="mt-20">
    <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-12">আমার প্রধান দক্ষতা</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-xl border-t-4 border-blue-500 hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-bold mb-3 text-gray-800">Laravel Full-Stack</h3>
            <p class="text-gray-600">Routing, Eloquent ORM, Blade templating এবং API ডেভেলপমেন্টে গভীর জ্ঞান।</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-xl border-t-4 border-indigo-500 hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-bold mb-3 text-gray-800">ক্লিন কোড এবং Git</h3>
            <p class="text-gray-600">পেশাদার স্ট্যান্ডার্ড মেনে চলা, ভার্সন কন্ট্রোলের জন্য Git/GitHub ব্যবহার।</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-xl border-t-4 border-green-500 hover:shadow-2xl transition duration-300">
            <h3 class="text-xl font-bold mb-3 text-gray-800">ডেটাবেস ম্যানেজমেন্ট</h3>
            <p class="text-gray-600">MySQL/MariaDB ব্যবহার করে দক্ষ ডেটাবেস স্কিমা ডিজাইন ও অপটিমাইজেশন।</p>
        </div>
    </div>
</section>
@endsection