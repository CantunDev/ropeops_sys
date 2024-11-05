<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 dark:text-red-500 leading-tight">
            {{ __('Nueva cotizacion') }}
        </h2>
    </x-slot>
    <section class="bg-gray-100 dark:bg-gray-900 ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-18 lg:px-6">
            <form id="create_quote" method="POST" action="{{route('quotes_company.store')}}">
                @csrf
                @method('POST')  
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-1 ">
                        <label for="folio" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Folio</label>
                        <input type="text" id="folio" name="folio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="COT-TASR-001-24" required />
                    </div>
                    <div class="col-span-1 ">
                        <label for="date" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                        <input type="date" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="col-span-2 ">
                        <label for="title" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Titulo del trabajo</label>
                        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Servicio de ..." required />
                    </div>
                    <div class="col-span-2 ">
                        <label for="company_id" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Cliente</label>
                        <select id="company_id" name="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Selecciona un cliente </option>
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}"> {{$company->name}} </option>
                                    
                                @endforeach
                        </select>
                    </div>
                    <div class="col-start-1 col-span-3 ">
                        <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                        <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Carretera ..." required />
                    </div>
                    <div class="col-span-1 ">
                        <label for="contact_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nombre contacto</label>
                        <input type="text" id="contact_name" name="contact_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John John" required />
                    </div>
                    <div class="col-span-1">
                        <label for="contact_phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Telefono contacto</label>
                        <input type="tel" id="contact_phone" name="contact_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="983-321-4566" required />
                    </div>
                    <div class="col-span-1">
                        <label for="contact_email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Correo contacto</label>
                        <input type="email" id="contact_email" name="contact_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John@empresa.com" required />
                    </div>
                    <div class="col-span-full">
                        <label for="description" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                        <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Servicio para ..." required />
                    </div>
                    <div class="col-start-2 col-span-1 ">
                        <label for="condition_payment" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Condicion de pago</label>
                        <input type="text" id="condition_payment" name="condition_payment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="50" required />
                    </div>
                    <div class="col-span-1 ">
                        <label for="advance_payment" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Anticipo</label>
                        <input type="text" id="advance_payment" name="advance_payment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="50" required />
                    </div>
                    <div class="col-span-1 ">
                        <label for="workdays" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Dias trabajo</label>
                        <input type="number" id="workdays" name="workdays" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10" required />
                    </div>
                    {{-- <div class="col-end-7 col-span-6 bg-yellow-300">03</div> --}}
                    {{-- <div class="col-start-1 col-end-7 bg-yellow-300">04</div> --}}
                </div>
                <div id="input-container">
                    <div class="grid grid-cols-8 gap-4 mt-8 input-row">
                        <div class="col-start-1 col-span-3 ">
                            <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                            <textarea name="description_details[]" rows="2" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Descripcion" required></textarea>
                        </div>
                        <div class="col-span-1 ">
                            <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Cantidad</label>
                            <input type="number" name="quantity[]" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="1" required />
                        </div>
                        <div class="col-span-1 ">
                            <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Unidad</label>
                            <input type="text" name="unit[]" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="PZA" required />
                        </div>
                        <div class="col-span-1 ">
                            <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">P.U</label>
                            <input type="number" name="unit_price[]" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="$0.00" required />
                        </div>
                        <div class="col-span-1 ">
                            <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                            <input type="number" name="amount_details[]" class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="$0.00" required />
                        </div>
                        <div class="col-span-1">
                            <button type="button" class="plus-btn mt-6 text-white bg-green-700 hover:bg-green-800 p-2.5 rounded-lg">+</button>
                            <button type="button" class="minus-btn mt-6 text-white bg-red-700 hover:bg-red-800 p-2.5 rounded-lg">-</button>
                        </div>
                    </div>
                </div> 

                Condensador garantia 50 mil 
                - 
                <div class="grid grid-cols-4 gap-1 mt-8">
                    <div class="col-end-5 col-span-1 ">
                        <label for="subtotal" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">SUBTOTAL</label>
                        <input type="number" id="subtotal" name="subtotal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$0.00" required />
                    </div>
                    <div class="col-end-5 col-span-1 ">
                        <label for="iva" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">IVA</label>
                        <input type="number" id="iva" name="iva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$0.00" required />
                    </div>
                    <div class="col-end-5 col-span-1">
                        <label for="amount" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">TOTAL</label>
                        <input type="number" id="amount" name="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$0.00" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-8">
                    <div class="col-start-1 col-span-1">
                        <label for="company_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nota</label>
                        <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nota:" required />
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-1 mt-8">
                    <div class="col-start-1 col-span-1">
                        <label for="company_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Vigencia</label>
                        <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="15" required />
                    </div>
                    <div class="col-start-1 col-span-1 ">
                        <label for="start" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tiempo de inicio</label>
                        <input type="text" id="start" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="5" required />
                    </div>
                    <div class="col-start-1 col-span-1 ">
                        <label for="" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Forma de pago</label>
                        <input type="text" id="" name="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="%" required />
                    </div>
                    <div class="col-start-1 col-span-1 ">
                        <label for="" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Moneda</label>
                        <input type="text" id="" name="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="MXN" required />
                    </div>
                    <div class="col-start-1 col-span-1">
                        <label for="notes" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Notas</label>
                        <input type="text" id="notes" name="notes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Notas:" required />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-1 mt-8 items-center text-center">
                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Guardar</button>
                    <a href="{{URL::previous()}}" type="button" class="ml-4 text-gray-700 hover:text-white border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-700">
                        Cancelar 
                    </a>
                </div>
            </form>

        </div>
    </section>
    <script>
        document.addEventListener('click', function (event) {
            if (event.target.matches('.plus-btn')) {
                const container = document.getElementById('input-container');
                const newRow = document.querySelector('.input-row').cloneNode(true);
                newRow.querySelectorAll('input, textarea').forEach(input => input.value = '');
                container.appendChild(newRow);
            }
            if (event.target.matches('.minus-btn')) {
                const rows = document.querySelectorAll('.input-row');
                if (rows.length > 1) {
                    event.target.closest('.input-row').remove();
                } else {
                    alert("Al menos una fila debe permanecer");
                }
            }
        });
    </script>
</x-app-layout>