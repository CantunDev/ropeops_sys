<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 dark:text-red-500 leading-tight">
            {{ __('Actualizar trabajador') }}
        </h2>
    </x-slot>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-2 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-6 text-xl font-bold text-gray-900 dark:text-white">Informacion personal del trabajador</h2>

            <form class="max-w-max mx-auto" method="POST" action="{{route('workers.update', $worker->id)}}">
                @method('PATCH')
                @csrf
                <div class="grid gap-4 sm:grid-cols-3 sm:gap-12">
                    <div class="col-3">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->name}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno</label>
                        <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->lastname}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno</label>
                        <input type="text" name="surname" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->surname}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                        <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->phone}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->email}}">
                    </div>
                    {{-- <div class="col-1">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                    </div> --}}
                    <div class="grid grid-cols-4 gap-4 col-span-full">
                        <div class="col-span-1">
                            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha nacimiento</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input datepicker id="birthdate"  name="birthday" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$worker->birthday}}">
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label for="ine" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">INE</label>
                            <input type="text" name="ine" id="ine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->ine}}" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="nss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NSS</label>
                            <input type="text" name="nss" id="nss" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->nss}}" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="curp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CURP</label>
                            <input type="text" name="curp" id="curp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->curp}}" required="">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                        <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->address}}" required="">
                    </div>
                    <div class="sm:col-3">
                        <label for="cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CP</label>
                        <input type="number" name="cp" id="cp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->cp}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="blood_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Sangre</label>
                        <select id="blood_type" name="blood_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Tipo...</option>
                            <option value="A+" {{ $worker->blood_type == 'A+' ? 'selected' : '' }}>A+</option>
                            <option value="A-" {{ $worker->blood_type == 'A-' ? 'selected' : '' }}>A-</option>
                            <option value="B+" {{ $worker->blood_type == 'B+' ? 'selected' : '' }}>B+</option>
                            <option value="B-" {{ $worker->blood_type == 'B-' ? 'selected' : '' }}>B-</option>
                            <option value="AB+" {{ $worker->blood_type == 'AB+' ? 'selected' : '' }}>AB+</option>
                            <option value="AB-" {{ $worker->blood_type == 'AB-' ? 'selected' : '' }}>AB-</option>
                            <option value="O+" {{ $worker->blood_type == 'O+' ? 'selected' : '' }}>O+</option>
                            <option value="O-" {{ $worker->blood_type == 'O-' ? 'selected' : '' }}>O-</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="overalls_size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de overoll</label>
                        <input type="number" name="overalls_size" id="overalls_size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->overalls_size}}" required="">
                    </div>
                    <div class="col-3">
                        <label for="shoe_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de botas</label>
                        <input type="number" name="shoe_number" id="shoe_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->shoe_number}}" required="">
                    </div>
                    <h2 class="col-span-full mb-1 text-xl font-bold text-gray-900 dark:text-white">Informacion bancaria del trabajador</h2>

                    <div class="sm:col-span-1">
                        <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona el banco</label>
                        <select id="bank" name="bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Banco...</option>
                            <option value="BBVA" {{ $worker->bank == 'BBVA' ? 'selected' : '' }}>BBVA</option>
                            <option value="SANTANDER" {{ $worker->bank == 'SANTANDER' ? 'selected' : '' }}>SANTANDER</option>
                            <option value="BANORTE" {{$worker->bank == 'BANORTE' ? 'selected' : ''}}> BANORTE </option>
                            <option value="BANAMEX" {{$worker->bank == 'BANAMEX' ? 'selected' : ''}}> BANAMEX</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="account_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de cuenta</label>
                        <input type="text" name="account_number" id="account_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->account_number}}" required="">
                    </div> 
                    <div class="grid grid-cols-2 gap-4 col-span-full">
                        <div class="col-span-1">
                            <label for="interbank_key" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clabe interbancaria</label>
                            <input type="text" name="interbank_key" id="interbank_key" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->interbank_key}}" required="">
                        </div> 
                        <div class="col-span-1">
                            <label for="card_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero tarjeta</label>
                            <input type="text" name="card_number" id="card_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$worker->card_number}}" required="">
                        </div> 
                    </div>
                    
                    
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-yellow-600 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-yellow-700 hover:bg-yellow-800">
                    Actualizar
                </button>
                <a href="{{URL::previous()}}" type="button" class="ml-4 text-gray-700 hover:text-white border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-500 dark:text-gray-500 dark:hover:text-white dark:hover:bg-gray-500 dark:focus:ring-gray-700">
                    Cancelar 
                </a>
            </form>
        </div>
      </section>
    
</x-app-layout>