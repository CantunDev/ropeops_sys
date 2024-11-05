<x-app-layout>
    <x-slot name="header">
            <div class="flex items-center space-x-2">

            <h2 class="font-semibold text-xl text-red-600 dark:text-red-500 leading-tight mr-16">
                {{ __('Lista de Compañias') }}
            </h2>

            <a href="{{route('companies.create')}}" type="button" class="flex text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">
                <svg class="w-4 h-4 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                </svg>               
                Nuevo
            </a>
        </div>
    </x-slot>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
            <div class="px-4 mx-auto max-w-screen-2xl lg:px-12">
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                        <div class="flex items-center flex-1 space-x-4">
                            {{-- <h5>
                                <span class="text-gray-500">All Products:</span>
                                <span class="dark:text-white">123456</span>
                            </h5>
                            <h5>
                                <span class="text-gray-500">Total sales:</span>
                                <span class="dark:text-white">$88.4k</span>
                            </h5> --}}
                        </div>
                        <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                    
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-00 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    {{-- <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th> --}}
                                    <th scope="col" class="px-4 py-3">Nombre</th>
                                    <th scope="col" class="px-4 py-3">Contacto</th>
                                    <th scope="col" class="px-4 py-3">Cotizaciones</th>
                                    <th scope="col" class="px-4 py-3">Servicios</th>
                                    <th scope="col" class="px-4 py-3">Pagos</th>
                                    <th scope="col" class="px-4 py-3">Estatus</th>
                                    <th scope="col" class="px-4 py-3">Saldo</th>
                                    <th scope="col" class="px-4 py-3"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    {{-- <td class="w-4 px-4 py-3">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td> --}}
                                    <th scope="row" class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img src="https://ui-avatars.com/api/?name={{$company->slug ? $company->slug : $company->name}}" alt="{{$company->name}}" class="w-auto rounded h-8 mr-3 bg-red-500">
                                       {{$company->company_name}}
                                    </th>
                                    <td class="px-4 py-2">
                                        <div class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                            {{$company->name_contact}}
                                            <div class="">
                                                {{$company->email_contact}}
                                                {{$company->phone_contact}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        {{-- <div class="flex items-center text-center" > --}}
                                            {{-- <div class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full"></div> --}}
                                            {{$company->quotes->count()}}
                                        {{-- </div> --}}
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        17
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        $99233
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Activo</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{-- <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2 text-gray-400" aria-hidden="true">
                                                <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                            </svg>
                                            1.6M
                                        </div> --}}
                                        $3.2M
                                    </td>
                                   
                                    <td class="px-4 py-2 flex">
                                       
                                        <a href="{{route('companies.edit', $company->id)}}" type="button" class="px-2 py-1 text-xs font-medium text-center inline-flex items-center text-white bg-yellow-600 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                            <svg class="w-4 h-5 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                            </svg>                                      
                                        </a>
                                        <form  method="POST" action="{{route('companies.destroy', $company->id)}} ">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $company->id }}">
                                            <button  type="submit" class="px-2 py-1 ml-1 text-xs font-medium text-center inline-flex items-center text-white bg-gray-500 rounded-lg hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-600 dark:hover:bg-red-700 dark:focus:ring-gray-800">
                                                <svg class="w-4 h-5 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                                </svg>                                      
                                            </button>
                                        </form>
                                    </td>

                                </tr>     
                                @empty
                                <div class="flex text-center">
                                    <div class="grow h-14 max">
                    
                                    <div class=" flex items-center text-blue-800 rounded-lg bg-blue-100 dark:bg-gray-800 dark:text-blue-600" role="alert">
                                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <span class="font-extrabold text-lg">Info!</span>
                                             No existen categorias registradas.
                                        </div> 
                                        </div> 
                                    </div> 
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>
          </section>
    </div>
</section>
</x-app-layout>