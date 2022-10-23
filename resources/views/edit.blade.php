@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Empleo') }}
            </h2>
        </x-slot>

        <div class="flex flex-col mt-10 columns-1 text-center px-[25px] pb-[25px] bg-gray-100">
            <form method="POST" action="{{ route('empleos.update', $job->id) }}" class="flex flex-col columns-1">
                @csrf
                @method('PUT')
                <div class="flex flex-row justify-end pb-4">
                    <label for="green-toggle" class="inline-flex relative items-center mr-5 cursor-pointer">
                        <input type="checkbox" name="approved" role="switch" id="green-toggle" class="sr-only peer" 
                        @if ($job->approved == 1)
                            checked
                        @endif />
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Aprobado</span>
                    </label>
                </div>
                <div class="flex flex-row pb-4">
                    <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                        Empleo
                      </span>
                      <input type="text" autocomplete="off" value="{{ $job->jobname }}" aria-label="Nombre Empleo" name="jobname" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[47%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Empresa
                          </span>
                          <input type="text" autocomplete="off" value="{{ $job->business }}" aria-label="Empresa" name="business" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[50%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Correo Electrónico
                          </span>
                          <input type="text" autocomplete="off" value="{{ $job->email }}" aria-label="Correo Electrónico" name="email" class="form-control w-[76.4%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <div class="flex flex-row w-[47%] ">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Giro
                          </span>
                          <input type="text" autocomplete="off" value="{{ $job->business_turn }}" aria-label="Giro" name="business_turn" class="form-control w-[100%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex flex-row w-[33%]">
                        <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                            Salario
                          </span>
                          <input autocomplete="off" type="text" value="{{ $job->salary }}" aria-label="Salario" name="salary" placeholder="0.00" class="form-control w-[76.4%] px-3 text-sm text-gray-900 bg-white rounded-r-md border border-l-0 border-gray-300" id="inputGroupSelect01">
                    </div>
    
                    <div class="flex items-center mb-4 w-[14%] h-5">
                        <label for="small-toggle" class="inline-flex relative items-center mb-5 mt-8 cursor-pointer">
                            <input type="checkbox" name="english" id="small-toggle" class="sr-only peer" @if ($job->english == 1) checked @endif>
                            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900">Ingles</span>
                        </label>
                    </div>
    
                </div>
    
                <div class="flex flex-row justify-between w-full pb-4">
                    <span class="input-group-text inline-flex items-center px-3 py-2 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-gray-300">
                        Actividades
                      </span>
                    <textarea rows="3" class="form-control block sticky p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" aria-label="Habilidades Blandas"
                        data-validation="required" data-validation="custom"
                        data-validation-regexp="^[a-zA-Z ]{2,30}$" name="activities">{{ $job->activities }}</textarea>
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
                        data-validation-regexp="^[a-zA-Z ]{2,30}$">{{ $job->softskills }}</textarea>
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
                        data-validation-regexp="^[a-zA-Z ]{2,30}$">{{ $job->hardskills }}</textarea>
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
                        data-validation-regexp="^[a-zA-Z ]{2,30}$">{{ $job->knowledge }}</textarea>
                    </div>
                </div>
    
                <div class="flex flex-row items-start">
                    <div class="flex flex-row">
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg rounded-r-none text-sm px-5 py-2.5 mr-2 mb-2">Guardar</button>
                    </div>
                    <div class="flex flex-row">
                        <a href="{{ route('empleos') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg rounded-l-none text-sm px-5 py-2.5 mr-2 mb-2">Cancelar</a>
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