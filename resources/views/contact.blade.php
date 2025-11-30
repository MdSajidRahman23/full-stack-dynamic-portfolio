@extends('layouts.app')

@section('title', 'যোগাযোগ')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-10 rounded-xl shadow-2xl">
    <h1 class="text-5xl font-extrabold text-gray-900 mb-4 text-center">আমার সাথে যোগাযোগ করুন</h1>
    <p class="text-center text-gray-600 mb-10">আমি নতুন চাকরির সুযোগ বা কোনো আকর্ষণীয় প্রজেক্টের জন্য উন্মুক্ত।</p>

    <div class="space-y-6">
        <div class="flex items-center p-4 bg-blue-50 rounded-lg">
            <svg class="w-6 h-6 text-blue-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <div>
                <p class="font-semibold text-gray-800">ইমেইল</p>
                <a href="mailto:rahmasajid1027@gmail.com" class="text-blue-600 hover:underline">rahmasajid1027@gmail.com</a>
            </div>
        </div>
        
        <div class="flex items-center p-4 bg-indigo-50 rounded-lg">
            <svg class="w-6 h-6 text-indigo-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            <div>
                <p class="font-semibold text-gray-800">GitHub</p>
                <a href="https://github.com/MdSajidRahman23" target="_blank" class="text-indigo-600 hover:underline">/MdSajidRahman23</a>
            </div>
        </div>
        
        <div class="text-center pt-6">
            <p class="text-gray-700">আমি সাধারণত ২৪ ঘন্টার মধ্যে ইমেইলের উত্তর দিই।</p>
        </div>
    </div>
</div>
@endsection