@extends('layouts.app')
@section('content')

    <!-- content -->

    <div class="">
        <section class=" w-full">

        @if (Session::get('cart'))

            <div class="flex flex-col max-w-2xl mx-auto">

                <h2 class="inline-block-center text-2xl font-bold my-10">Shopping Cart
                    ({{ collect(Session::get('cart'))->sum('qty_panier') }})</h2>

                @guest
                    <p class="p-4 mt-4 mb-8 font-bold text-gray-900 bg-yellow-300">Vous devez vous connectez pour procéder au
                        payment.
                    </p>
                @endguest
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Produits
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Prix
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantite
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Partiel
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach (Session::get('cart') as $key => $product)

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="flex-shrink-2 mb-4 rounded-none w-full h-full"
                                                            src="{{ asset('images/' . $product['image_url']) }}" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $product['nom'] }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $product['nom'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"> $ {{ $product['prix'] }}</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <form x-ref="formqty" action="{{ route('cart.update', $product['id']) }}"
                                                    method="POST" x-data>
                                                    @csrf

                                                    @method('PUT')

                                                    <select @change="$refs.formqty.submit()"
                                                        class="py-1 text-xs focus:outline-none" name="quantity" id="">
                                                        @foreach (range(1, $product['quantity']) as $qty)
                                                            <option {{ $qty == $product['qty_panier'] ? 'selected' : '' }}
                                                                value="{{ $qty }}">{{ $qty }}</option>
                                                        @endforeach
                                                    </select>
                                                </form>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                $ {{ $product['prix'] * $product['qty_panier'] }}
                                            </td>

                                        </tr>
                                        <!-- More people... -->
                                    @endforeach
                                <tfoot>
                                    <tr>
                                        <td colspan="3" scope="row" class="px-6 text-xs py-4 whitespace-nowrap font-bold">
                                            Total General</th>
                                        <td class="text-xs font-bold px-6 py-4 whitespace-nowrap">$
                                            {{ array_reduce(Session::get('cart'), fn($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}
                                        </td>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @auth
                    <div id="paypal-container" class="mt-8 mx-auto"></div>
                @endauth


            </div>
            </section>

            <!--div class="w-full">
                                                                            <div class="min-h-screen p-6  flex items-center justify-center">
                                                                                <div class="container max-w-screen-lg mx-auto">
                                                                                    <div>
                                                                                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                                                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                                                                                <div class="lg:col-span-2">
                                                                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                                                                                        <div class="md:col-span-5">
                                                                                                            <label for="full_name">Full Name</label>
                                                                                                            <input type="text" name="full_name" id="full_name"
                                                                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                                                                                        </div>

                                                                                                        <div class="md:col-span-5">
                                                                                                            <label for="email">Email Address</label>
                                                                                                            <input type="text" name="email" id="email"
                                                                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                                                                                placeholder="email@domain.com" />
                                                                                                        </div>

                                                                                                        <div class="md:col-span-3">
                                                                                                            <label for="address">Address / Street</label>
                                                                                                            <input type="text" name="address" id="address"
                                                                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                                                                                placeholder="" />
                                                                                                        </div>

                                                                                                        <div class="md:col-span-2">
                                                                                                            <label for="city">City</label>
                                                                                                            <input type="text" name="city" id="city"
                                                                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                                                                                                placeholder="" />
                                                                                                        </div>

                                                                                                        <div class="md:col-span-2">
                                                                                                            <label for="country">Country / region</label>
                                                                                                            <div
                                                                                                                class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                                                                                                <input name="country" id="country" placeholder="Country"
                                                                                                                    class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                                                                                                    value="" />
                                                                                                                <button tabindex="-1"
                                                                                                                    class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                                                                                                    <svg class="w-4 h-4 mx-2 fill-current"
                                                                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                                                                        stroke-linejoin="round">
                                                                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                                <button tabindex="-1" for="show_more"
                                                                                                                    class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                                                                                                    <svg class="w-4 h-4 mx-2 fill-current"
                                                                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                                                                        stroke-linejoin="round">
                                                                                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="md:col-span-2">
                                                                                                            <label for="state">State / province</label>
                                                                                                            <div
                                                                                                                class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                                                                                                <input name="state" id="state" placeholder="State"
                                                                                                                    class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                                                                                                    value="" />
                                                                                                                <button tabindex="-1"
                                                                                                                    class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                                                                                                    <svg class="w-4 h-4 mx-2 fill-current"
                                                                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                                                                        stroke-linejoin="round">
                                                                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                                <button tabindex="-1" for="show_more"
                                                                                                                    class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                                                                                                    <svg class="w-4 h-4 mx-2 fill-current"
                                                                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                                                                        stroke-linejoin="round">
                                                                                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="md:col-span-1">
                                                                                                            <label for="zipcode">Zipcode</label>
                                                                                                            <input type="text" name="zipcode" id="zipcode"
                                                                                                                class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                                                                placeholder="" value="" />
                                                                                                        </div>

                                                                                                        <div class="md:col-span-5">
                                                                                                            <div class="inline-flex items-center">
                                                                                                                <input type="checkbox" name="billing_same" id="billing_same"
                                                                                                                    class="form-checkbox" />
                                                                                                                <label for="billing_same" class="ml-2">My billing address is
                                                                                                                    different than above.</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="md:col-span-5 text-right">
                                                                                                            <div class="inline-flex items-end">
                                                                                                                <button
                                                                                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Commandé</button>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </!--div--->
        @else
            <div class="mt-10 text-3xl text-gray-700">
                Rien n'a été ajouté dans le panier
            </div>
        @endif
    </div>

    <script
        src="https://www.paypal.com/sdk/js?client-id={{ config('paypal.sandbox.client_id') }}&components=buttons,funding-eligibility">
    </script>

    <script>
        paypal.Buttons({
            fundingSource: paypal.FUNDING.PAYPAL,

            style: {
                layout: 'vertical',
                color: 'white',
                shape: 'rect',
                label: 'paypal',
                height: 35
            },

            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: "{{ Session::get('cart') && array_reduce(Session::get('cart'), fn($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}"
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    window.location.replace("{{ route('orders.capture') }}")

                });
            }
        }).render('#paypal-container')
    </script>



@endsection
