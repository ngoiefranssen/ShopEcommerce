@extends('layouts.app')
@section('title', 'home')
@section('content')

    <button class="bg-blue-500 hover:bg-blue-700 ml-12 my-2 text-white font-bold py-2 px-4 rounded">Add_Products</button>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                        <a href="{{ route('products.show', $product->id) }}" class="text-red-600">View</a>
                        <a class="block relat@extends('layouts.app')
@section('title', 'home')
@section('content')

    <button class="bg-blue-500 hover:bg-blue-700 ml-11 text-white font-bold py-2 px-4 rounded">Add_Products</button>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap m-4">
                @foreach ($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 w-full p-4">
                        <a href="{{ route('products.show', $product->id) }}" class="text-gray- title-font text-lg text-red-900">View</a>
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ asset('images/' . $product->image_url) }}">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{  $product->category }}</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{  $product->nom }}</h2>
                            <p class="mt-1">$ {{ $product->prix }}</p>
                        </div>

                        <div>
                            @if ( collect(Session::get('cart'))->pluck('id')->contains($product->id) )

                            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{ $product->id }}">

                                <button class="bg-transparent hover:bg-gray-900 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Remove from basket
                                </button>
                            </form>

                            @else

                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Add to Cart
                                </button>
                            </form>

                            @endif
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
ive h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="{{ asset('images/' . $product->image_url) }}">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{  $product->nom }}</h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{  $product->nom }}</h2>
                            <p class="mt-1">$ {{ $product->prix }}</p>
                        </div>

                        <div>
                            @if ( collect(Session::get('cart'))->pluck('id')->contains($product->id) )

                            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{ $product->id }}">

                                <button class="bg-transparent hover:bg-gray-900 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Remove from basket
                                </button>
                            </form>

                            @else

                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Add to Cart
                                </button>
                            </form>

                            @endif
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
