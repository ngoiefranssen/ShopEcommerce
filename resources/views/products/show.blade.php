@extends('layouts.app')
@section('title', 'view')
@section('content')


    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ asset('storage/' . $product->image_url) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category->name }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->nom }}</h1>
                    <div class="flex mb-4">

                    </div>
                    <p class="leading-relaxed">{{ $product->description }}</p>

                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900 my-2">${{ $product->prix }}</span>

                    </div>

                    <div>
                        @if (collect(Session::get('cart'))->pluck('id')->contains($product->id))

                            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{ $product->id }}">

                                <button
                                    class="bg-transparent hover:bg-gray-900 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Remove from basket
                                </button>
                            </form>

                        @else

                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-9">
                                    Add to Cart
                                </button>
                            </form>

                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
