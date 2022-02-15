@extends('layouts.guest')
@section('title', 'login')
@section('container')


<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
       <form action="{{ route('login') }}" method="POST">
        @csrf
        @method('POST')

        @if (session('error'))
            <div class="rounded-lg p-2 text-center w-full mb-2 text-white bg-red-500 mx-0">{{ session('error') }}</div>
        @endif

        <div class="bg-white px-8 py-8 rounded shadow-md text-black w-full">
            {{-- <h1 class="mb-8 text-3xl text-center">Sign up</h1> --}}
            <div class="relative mb-4">
            <input
                type="text"
                class="block border border-grey-light w-full p-3 px-8 rounded mb-4"
                name="email" id="email"
                placeholder="@email" />
            </div>
            <div class="relative mb-4">
            <input
                type="text"
                class="block border border-grey-light w-full p-3 px-8 rounded mb-4"
                name="password" id="password"
                placeholder="password" />
            </div>
            <button
                type="submit"
                class="w-full text-center py-3 rounded bg-black text-white hover:bg-green-dark focus:outline-none my-1"
            >Sign In</button>

        </div>

       </form>
        <div class="text-grey-dark mt-6">
            Veillez créer un compte?
            <a class="text-red-500 " href="{{ route('register') }}">Create Account</a>
        </div>
    </div>
</div>

@endsection
