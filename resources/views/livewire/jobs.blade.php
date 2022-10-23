@auth
    <div>
    {{-- Stop trying to control. --}}

        <div class="flex flex-row w-full justify-end mt-6 mb-3">
            <a href="empleos/create" class="mr-5 text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Agregar Empleo</a>
        </div>

        <div class="flex flex-wrap w-full justify-start">
            @foreach($jobs as $job)
                <div class="select-none m-3 p-6 w-[346px] bg-white rounded-md border border-gray-200 shadow-sm" id="card">

                    <!-- JOB NAME-->

                    <div class="flex flex-row justify-start align-middle items-center">
                        @if($job->jobname != "")
                            <h2 class="text-2xl tracking-tight truncate text-slate-700 w-full whitespace-nowrap cursor-default">{{ ucfirst($job->jobname) }}</h2>
                        @endif
                        
                        @if ($job->approved == 1)
                            <i class="bi bi-patch-check text-xl" style="color: #ffab24;"></i>
                        @endif
                    </div>

                    <!-- BUSINESS NAME-->
                         
                    <div class="flex flex-row justify-start align-middle items-center">
                        <i class="text-slate-500 fa-regular fa-building mr-1"></i>
                        @if ($job->business != "")
                            <h2 class="text-md tracking-tight font-bold truncate text-slate-600 ml-2 w-full whitespace-nowrap cursor-default">{{ ucfirst($job->business) }}</h2>
                        @else
                            <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap cursor-default">{{ 'No disponible' }}</h2>
                        @endif
                    </div>

                    <!-- SALARY -->
                         
                    <div class="flex flex-row justify-start align-middle items-center">
                        <i class="text-slate-500 fa-regular fa-dollar-sign mr-1.5"></i>
                        @if ($job->salary != "")
                            <h2 class="text-md tracking-tight font-semibold truncate text-slate-600 ml-2 w-full whitespace-nowrap cursor-default">{{ $job->salary }}</h2>
                        @else
                            <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap cursor-default">{{ 'No disponible' }}</h2>
                        @endif
                    </div>

                    <!-- EMAIL VALUE -->
                         
                    <div class="flex flex-row justify-start align-middle items-center">
                        <i class="text-slate-500 fa-regular fa-envelope"></i>
                        @if ($job->email != "")
                            <a href="mailto:{{$job->email}}" class="text-md tracking-tight font-semibold truncate text-blue-700 ml-2 whitespace-nowrap">{{ strtolower($job->email) }}</a>
                        @else
                            <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap cursor-default">{{ 'No disponible' }}</h2>
                        @endif
                    </div>

                    <!-- BUTTONS SECTIONS -->
                         
                    <div class="flex flex-row justify-center align-middle items-center mt-5">
                        <form action="/empleos/{{ $job->id }}" method="POST">
                            <a href="#" class="mr-5 text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 bg-green-500 hover:bg-green-400 focus:outline-none"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/empleos/{{ $job->id }}/edit" class=" mr-5 text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 bg-orange-500 hover:bg-orange-400 focus:outline-none"><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 bg-red-500 hover:bg-red-400 focus:outline-none"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    
                        
                </div>
            @endforeach
        </div>
@endauth

@guest
    <div class="flex flex-wrap w-full justify-start">
        @foreach($jobs as $job)
            <div class="m-3 p-6 w-[346px] bg-white rounded-md border border-gray-200 shadow-sm" id="card">

                <!-- JOB NAME-->

                <div class="flex flex-row justify-start align-middle items-center">
                    @if($job->jobname != "")
                        <h2 class="text-2xl tracking-tight truncate text-slate-700 w-full whitespace-nowrap">{{ ucfirst($job->jobname) }}</h2>
                    @endif
                </div>

                <!-- BUSINESS NAME-->
                    
                <div class="flex flex-row justify-start align-middle items-center">
                    <i class="text-slate-500 fa-regular fa-building mr-1"></i>
                    @if ($job->business != "")
                        <h2 class="text-md tracking-tight font-bold truncate text-slate-600 ml-2 w-full whitespace-nowrap">{{ ucfirst($job->business) }}</h2>
                    @else
                        <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap">{{ 'No disponible' }}</h2>
                    @endif
                </div>

                <!-- SALARY -->
                    
                <div class="flex flex-row justify-start align-middle items-center">
                    <i class="text-slate-500 fa-regular fa-dollar-sign mr-1.5"></i>
                    @if ($job->salary != "")
                        <h2 class="text-md tracking-tight font-semibold truncate text-slate-600 ml-2 w-full whitespace-nowrap">{{ $job->salary }}</h2>
                    @else
                        <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap">{{ 'No disponible' }}</h2>
                    @endif
                </div>

                <!-- EMAIL VALUE -->
                    
                <div class="flex flex-row justify-start align-middle items-center">
                    <i class="text-slate-500 fa-regular fa-envelope"></i>
                    @if ($job->email != "")
                        <a href="mailto:{{$job->email}}" class="text-md tracking-tight font-semibold truncate text-blue-700 ml-2 w-full whitespace-nowrap">{{ strtolower($job->email) }}</a>
                    @else
                        <h2 class="text-md tracking-tight truncate text-slate-600 ml-2 w-full whitespace-nowrap">{{ 'No disponible' }}</h2>
                    @endif
                </div>

                <!-- BUTTONS SECTIONS -->
                    
                <div class="flex flex-row justify-start align-middle items-center mt-5">
                    <form action="/empleos/{{ $job->id }}" method="POST">
                        <a href="#" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:outline-none focus:ring-cyan-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ver detalles</a>
                    </form>
                </div>
                
                    
            </div>
        @endforeach
    </div>
@endguest
