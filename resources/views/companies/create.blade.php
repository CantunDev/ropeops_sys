<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 dark:text-red-500 leading-tight">
            {{ __('Nueva compañia') }}
        </h2>
    </x-slot>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-10 antialiased">
        <div class="py-1 px-4 mx-auto max-w-2xl lg:py-10">

            <form class="max-w-max mx-auto" method="POST" action="{{route('companies.store')}}">
                @csrf
                <h2 class="mb-6 text-xl font-bold text-gray-900 dark:text-white">Informacion de la compañia</h2>
                <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                <div class="col-span-3">
                    <label for="company_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nombre comercial</label>
                    <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                </div>
                <div class="col-span-2">
                    <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
                </div>
                <div class="col-span-1">
                    <label for="slug" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" />
                </div>  
                <div>
                    <label for="rfc" class="block mb-2 mt-0 text-sm font-medium text-gray-900 dark:text-white">RFC</label>
                    <input type="text" id="rfc" name="rfc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="RFC343F234D3" required />
                </div>
                <div>
                    <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                    <input type="tel" id="telephone" name="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-453-678" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="company@company.com" required />
                </div>
                <div class="col-span-2">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                    <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Calle 53 Colonia Electricistas" required="">
                </div>
                <div class="col-span-1">
                    <label for="cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CP</label>
                    <input type="text" name="cp" id="cp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="24120" required="">
                </div>
            </div>
            <h2 class="mt-4 mb-4 text-xl font-bold text-gray-900 dark:text-white">Informacion de contacto</h2>
            <div class="grid sm:grid-cols-2 sm:gap-6">
                <div class="col-span-3">
                    <label for="name_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" id="name_contact" name="name_contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required />
                </div> 
                <div class="col-2">
                    <label for="email_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                    <input type="email" id="email_contact" name="email_contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                </div> 
                <div class="col-2">
                    <label for="phone_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                    <input type="text" id="phone_contact" name="phone_contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="982-430-4123" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
                </div> 
            </div>
            <h2 class="mt-4 mb-6 col-span-full text-xl font-bold text-gray-900 dark:text-white">Informacion bancaria de la compañia</h2>
            <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">

            <div class="sm:col-span-1">
                <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona el banco</label>
                <select id="bank" name="bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="">Banco...</option>
                    <option value="BBVA">BBVA</option>
                    <option value="SANTANDER">SANTANDER</option>
                    <option value="BANORTE">BANORETE</option>
                    <option value="BANAMEX">BANAMEX</option>
                </select>
            </div>
              <div class="sm:col-span-2">
                    <label for="account_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de cuenta</label>
                    <input type="text" name="account_number" id="account_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="234223423432" required="">
                </div> 
                <div class="grid grid-cols-3 gap-4 col-span-full">
                    <div class="col-span-1">
                        <label for="interbank_key" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clabe interbancaria</label>
                        <input type="text" name="interbank_key" id="interbank_key" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="234223423432" required="">
                    </div> 
                    <div class="col-span-1">
                        <label for="card_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero tarjeta</label>
                        <input type="text" name="card_number" id="card_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="234223423432" required="">
                    </div> 
                    <div class="col-span-1">
                        <label for="credit_days" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dias de credito</label>
                        <input type="number" name="credit_days" id="credit_days" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="28" required="">
                    </div> 
                </div>
            </div>
            
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                Registrar
            </button>
            <a href="{{URL::previous()}}" type="button" class="ml-4 text-gray-700 hover:text-white border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-500 dark:text-gray-500 dark:hover:text-white dark:hover:bg-gray-500 dark:focus:ring-gray-700">
                Cancelar 
            </a>
        </form>
    </section>
</x-app-layout>