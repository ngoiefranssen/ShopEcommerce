
@extends('layouts.guest')
@section('title', 'login')
@section('container')

<form method="POST" action="{{ route('login') }}">

    @csrf
    @method('post')

<section class="text-gray-600 body-font rounded-lg p-8 py-10">
    <div class=" container-center px-5 py-24 mx-auto flex flex-center items-center">
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-10  flex flex-col md:ml-auto w-full mt-10 md:mt-0">

        @if (session('error'))

        <div class="rounded-lg p-2 text-center w-full mb-2 text-white bg-red-500 mx-0">{{ session('error') }}</div>

       @endif
        <div class="relative mb-4">

          <!--label for="email" class="leading-7 text-sm text-gray-600">Email</!--label-->
          <input type="text" id="email" name="email" placeholder="@email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <!--label for="password" class="leading-7 text-sm text-gray-600">Password</!--label-->
          <input type="password" id="password" name="password" placeholder="passsword" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</button>
        <!--p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</!--p-->
      </div>
    </div>
  </section>
  <p class="text-center">Veillez créer un compte? <a class="text-" href="{{ route('register') }}">Créer un compte</a></p>

</form>

@endsection
