@extends('layouts.app')

@section('content')

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <!--div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">vous pouvez faire vos achats de manière sécurisée, faire un don à une association caritative et bien plus encore. Vous avez presque terminé. En confirmant votre adresse email, vous nous indiquez que vous êtes le titulaire légitime de ce compte.</p>
      </!--div-->


        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/stylo super.jpg') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                <p class="mt-1">$16.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Ventilatos.jfif') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Ventilateur</h2>
                <p class="mt-1">$21.15</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Laptop M1.jfif') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Laptop M1</h2>
                <p class="mt-1">$500.00</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/iphone-13.jpg') }}">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">Iphone 13 Pro</h2>
                <p class="mt-1">$255.50</p>
              </div>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/lunette.jfif') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Lunette</h2>
                  <p class="mt-1">$11.70</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Hypnotic Poison.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Hypnotic Poison</h2>
                  <p class="mt-1">$75.65</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Sac à Main  Porté Epaule Femme.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Sac à Main  Porté Epaule Femme</h2>
                  <p class="mt-1">$35.00</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Sac a Main.jfif') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Sac à Main</h2>
                  <p class="mt-1">$22.40</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Saton sport Fashion Buy Shoes for men.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Saton Sport Fashion Buy Shoes for Men</h2>
                  <p class="mt-1">$27.75</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/télécommunications-d-affaires-pc.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Routeur-Télécommunications-D-affaires-Pc</h2>
                  <p class="mt-1">$21.15</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/T-Shirt.jfif') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">T-Shirt</h2>
                  <p class="mt-1">$17.15</p>
                </div>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Samsung Galaxy S20.jpeg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">/Samsung Galaxy S20</h2>
                  <p class="mt-1">$75.25</p>
                </div>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Laptop.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Laptop</h2>
                  <p class="mt-1">$450.40</p>
                </div>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Chaussure de Marche pour femme.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Habillement</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Chaussure de Marche Pour Femme</h2>
                  <p class="mt-1">$16.00</p>
                </div>
              </div>

              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/Min portable bluetooth speaker stereo.jfif') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Min portable bluetooth speaker stereo</h2>
                  <p class="mt-1">$125.00</p>
                </div>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/surveillance-reglementation.jpg') }}">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Technology</h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">Camera-Surveillance-Reglementation</h2>
                  <p class="mt-1">$180.45</p>
                </div>
              </div>

              </div>
            </div>

        </div>
    </div>
  </section>

  <div class="flex flex-wrap -m-4">
    <div class="p-4 lg:w-1/4 md:w-1/2">
      <div class="h-full flex flex-col items-center text-center">
        <div class="relative w-100 h-120">
            <img class="rounded-full h-24 w-24 flex items-center justify-center..." src="{{ asset('images/jéhdai.jpg') }}" alt="user image" />
            <div class="absolute top-0 right-0 h-6 w-6 my-1 border-4 border-white rounded-full bg-red-400 z-2"></div>
          </div>
        <div class="w-full">
          <h2 class="title-font font-medium text-lg text-gray-900">Jehdai Le grand</h2>
          <h3 class="text-gray-500 mb-3">Fullstack Developer</h3>
          <p class="mb-4">A fullstack developper and personnal entrepreneur..</p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
    <div class="p-4 lg:w-1/4 md:w-1/2">
      <div class="h-full flex flex-col items-center text-center">
        <div class="relative w-100 h-120">
            <img class="rounded-full border border-gray-100 shadow-lg" src="" alt="user image" />
            <div class="absolute top-0 right-0 h-6 w-6 my-1 border-4 border-white rounded-full bg-red-400 z-2"></div>
          </div>
        <div class="w-full">
          <h2 class="title-font font-medium text-lg text-gray-900">Holden Caulfield</h2>
          <h3 class="text-gray-500 mb-3">UI Developer</h3>
          <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
    <div class="p-4 lg:w-1/4 md:w-1/2">
      <div class="h-full flex flex-col items-center text-center">
        <div class="relative w-100 h-120">
            <img class="rounded-full border border-gray-100 shadow-lg" src="" alt="user image" />
            <div class="absolute top-0 right-0 h-6 w-6 my-1 border-4 border-white rounded-full bg-red-400 z-2"></div>
          </div>
        <div class="w-full">
          <h2 class="title-font font-medium text-lg text-gray-900">Emmanuella</h2>
          <h3 class="text-gray-500 mb-3">UI Developer</h3>
          <p class="mb-4">I am a Web Developer</p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>

    <div class="p-4 lg:w-1/4 md:w-1/2">
      <div class="h-full flex flex-col items-center text-center">
        <div class="relative w-100 h-120">
            <img class="rounded-full h-24 w-24 flex items-center justify-center..." src="{{ asset('images/sylva.JPG') }}" alt="user image" width="200px" height="500px" />
            <div class="absolute top-0 right-0 h-6 w-6 my-1 border-4 border-white rounded-full bg-red-400 z-2"></div>
          </div>
        <div class="w-full">
          <h2 class="title-font font-medium text-lg text-gray-900">Sylva MARHEGANE</h2>
          <h3 class="text-gray-500 mb-3">Live Streamer</h3>
          <p class="mb-4">To broadcast online emissions on many streaming's platforms</p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-2 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>


  <section class="text-gray-600 body-font">
    <div class="container px5 py-200 mx-auto">
    </div>
</section>

@endsection
