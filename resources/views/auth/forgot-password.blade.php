@extends('auth.auth-layout')

@section('title','Forgot Password')
@section('SecondTitle','Entrez votre email')

@section('auth-form')
<div class="mx-auto max-w-xs">
    <form action="{{ route('password.email') }}" method="post">
        @csrf
        <input
        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
        type="email" name="email" placeholder="Email" />
        <button
        class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
            <circle cx="8.5" cy="7" r="4" />
            <path d="M20 8v6M23 11h-6" />
        </svg>
        <span class="ml-3">
            Submit
        </span>
        </button>
        @if (session('status'))
        <div class="p-4 mt-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">{{ session('status') }}</span> 
          </div>
        @endif    
    </form>
</div>
@endsection

