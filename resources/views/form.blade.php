@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formulario') }}
            </h2>
        </x-slot>


        <div class="px-[25px] pb-[25px] bg-gray-100">
            <br>
            <div class="bg-white pb-[15px] border-2 rounded-md">
                <div class="flex flex-row justify-between w-full my-[15px]">
                    <div class="flex w-[15%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                          Carrera
                        </span>
                        <select class="form-select w-[80%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                            @if ($careers->count() > 0)
                                @foreach ($careers as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->acronym }}</option>
                                @endforeach
                            @else
                                <option value="0">No disponible</option>
                            @endif
                        </select>
                    </div>
                    
                    <div class="flex w-[55%]">
                        <span class="input-group-text inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Bolsa de Trabajo
                        </span>
                        <select class="form-select w-[80%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                            @if ($tasks->count() > 0)
                                @foreach ($tasks as $bolsas)
                                    <option value="{{ $bolsas->id }}">{{ $bolsas->value }}</option>
                                @endforeach
                            @else
                                <option value="0">No disponible</option>
                            @endif
                        </select>
                    </div>
        
                    <div class="flex w-[25%]">
                        <span class="input-group-text inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Ciudad
                        </span>
                        <select class="form-select w-[80%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                            @if ($cities->count() > 0)
                                @foreach ($cities as $citie)
                                    <option value="{{ $citie->id }}">{{ $citie->value }}</option>
                                @endforeach
                            @else
                                <option value="0">No disponible</option>
                            @endif
        
                        </select>
                    </div>
        
                </div>
    
                <div class="flex flex-row justify-between w-full">
                    <div class="flex w-[50%]">
                        <span class="input-group-text inline-flex items-center py-2 px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Empleo
                        </span>
                        <select class="form-select w-[85%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
        
                            <option selected="Coordinador">Coordinador de sistemas TI</option>
                            <option value="Coordinador">Coordinador de sistemas TI</option>
                            <option value="Coordinador">Coordinador de sistemas TI</option>
                            <option value="Coordinador">Coordinador de sistemas TI</option>
        
                        </select>
                    </div>
    
                    <div class="flex w-[20%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                          Mes
                        </span>
                        <select class="form-select w-[90%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
        
                            <option selected="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
        
                        </select>
                    </div>
    
                    <div class="flex w-[20%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                          Año
                        </span>
                        <select class="form-select w-[90%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
        
                            <option selected="1">2022</option>
                            <option value="2">2021</option>
                            <option value="3">2020</option>
                            <option value="4">2019</option>
        
                        </select>
                    </div>
    
                </div>
    
                
            </div>
        </div>
        <div class="flex flex-col columns-1 text-center px-[25px] pb-[25px] bg-gray-100">
            <form method="POST" action="/empleos" class="flex flex-col columns-1">
                @csrf
                <div class="flex flex-row pb-4">
                    <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                        Empleo
                      </span>
                      <input type="text" autocomplete="off" aria-label="Nombre Empleo" name="jobname" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[47%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Empresa
                          </span>
                          <input type="text" autocomplete="off" aria-label="Empresa" name="business" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[50%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Correo Electrónico
                          </span>
                          <input type="text" autocomplete="off" aria-label="Correo Electrónico" name="email" class="form-control w-[76.4%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[47%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Giro
                          </span>
                          <input type="text" autocomplete="off" aria-label="Giro" name="business_turn" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[33%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Salario
                          </span>
                          <input autocomplete="off" type="text" aria-label="Salario" name="salary" placeholder="0.00" class="form-control w-[76.4%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex items-center mb-4 w-[14%] h-5">
                        <input id="default-checkbox"  name="english" type="checkbox" value="" class="form-check-input w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Inglés</label>
                    </div>
    
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                        Actividades
                      </span>
                    <textarea rows="3" class="form-control block sticky p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" aria-label="Habilidades Blandas"
                        name="softskills" data-validation="required" data-validation="custom"
                        data-validation-regexp="^[a-zA-Z ]{2,30}$" name="activities"></textarea>
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[48%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Habilidades Blandas
                          </span>
                          <input type="text" aria-label="First name" class="blandas form-control w-[71%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300">
                    </div>
    
                    <div class="flex flex-row w-[10%]">
                        <button type="button" class="addBlandas text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar</button>
                    </div>
    
                    <div class="flex items-start mb-4 w-[38%] h-5 top-0">
                        <textarea rows="1" class="habilidadesBlandas form-control block sticky p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" aria-label="Habilidades Blandas"
                        name="softskills" data-validation="required" data-validation="custom"
                        data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                    </div>
    
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[49.5%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Habilidades Duras
                          </span>
                          <input type="text" aria-label="First name" class="duras form-control w-[71%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[11.5%]">
                        <button type="button" class="addDuras text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar</button>
                    </div>
    
                    <div class="flex items-start mb-4 w-[38%] h-5 top-0">
                        <textarea rows="1" class="habilidadesDuras form-control block sticky p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" aria-label="Habilidades Duras"
                        name="hardskills" data-validation="required" data-validation="custom"
                        data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                    </div>
    
                </div>
                
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[54%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Conocimientos
                          </span>
                          <input type="text" aria-label="First name" class="conocimiento form-control w-[73.2%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[13%]">
                        <button type="button" class="addConocimientos text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar</button>
                    </div>
    
                    <div class="flex items-start mb-4 w-[41%] h-5 top-0">
                        <textarea rows="1" class="conocimientos form-control block sticky p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" aria-label="Habilidades Blandas"
                        name="knowledge" data-validation="required" data-validation="custom"
                        data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                    </div>
    
                </div>
    
                <div class="flex flex-row items-start">
                    
                    <div class="flex flex-row">
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg rounded-r-none text-sm px-5 py-2.5 mr-2 mb-2">Guardar</button>
                    </div>
    
                    <div class="flex flex-row">
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg rounded-l-none text-sm px-5 py-2.5 mr-2 mb-2">Cancelar</button>
                    </div>
    
                </div>
                
                
            </form>
        </div>

    </x-app-layout>
@endauth

@guest
    <script>
        alert('Sin autorización');
        window.location = "/empleos";
    </script>
@endguest

<script>
    const btnAddBlandas = document.querySelector('.addBlandas');
    const txtBlandas = document.querySelector('.habilidadesBlandas');
    const tBlandas = document.querySelector('.blandas');
    const btnAddDuras = document.querySelector('.addDuras');
    const txtDuras = document.querySelector('.habilidadesDuras');
    const tDuras = document.querySelector('.duras');
    const btnAddConocimientos = document.querySelector('.addConocimientos');
    const txtConocimientos = document.querySelector('.conocimientos');
    const tConocimientos = document.querySelector('.conocimiento');

    btnAddBlandas.addEventListener('click', function(){
        txtBlandas.value += tBlandas.value + '\n';
        tBlandas.value = '';
    });

    btnAddDuras.addEventListener('click', function(){
        txtDuras.value += tDuras.value + '\n';
        tDuras.value = '';
    });

    btnAddConocimientos.addEventListener('click', function(){
        txtConocimientos.value += tConocimientos.value + '\n';
        tConocimientos.value = '';
    });
</script>