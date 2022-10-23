<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Empleos') }}
        </h2>
    </x-slot>
    <br>
    <br>
    
    <div class="flex flex-row justify-between w-full">
        <div class="flex flex-row align-middle items-center ml-28">
            <label for="countries" class="mr-5 text-md font-medium text-gray-600">Carrera</label>
            <select id="countries" class="w-96 p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
            @foreach ($careers as $carrera)
                <option value="{{ $carrera->id }}">{{ $carrera->acronym }} - {{ $carrera->name }}</option>
            @endforeach
            </select>
        </div>
        <button type="button" class="text-white focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-5 mb-2 bg-gray-800 hover:bg-gray-700 focus:ring-gray-700 border-gray-700" onclick="printToPDF()"><i class="fa fa-print" aria-hidden="true"></i></button>
    </div>

    <div class="flex flex-col ml-16 mr-16 mt-10 bg-white rounded-md p-5 shadow-sm"  id="report">
        <h2 class="text-3xl font-bold text-slate-500">Reporte por Carrera</h2>
        <hr class="my-5 h-px border-0 bg-gray-200">
        <h2 class="text-2xl font-bold text-slate-500">Habilidades Blandas</h2>
        <div class="flex flex-row  w-full mb-3">
            <div class="h-auto w-2 bg-green-200 mr-5"></div>
            @foreach ($jobs as $job)
                    @if ($job->approved == 1 && $job->softskills != "")
                    <div class="flex flex-row align-middle items-center">
                        <i class="fa-solid fa-caret-right text-xs text-orange-300 mr-3"></i>
                        <p class="text-md">{{ ucfirst($job->softskills) }}</p>
                    </div>
                    @endif
            @endforeach
        </div>
        <hr class="my-5 h-px border-0 bg-gray-200">
        <h2 class="text-2xl font-bold text-slate-500">Habilidades Duras</h2>
        <div class="flex flex-row  w-full mb-3">
            <div class="h-auto w-2 bg-orange-200 mr-5"></div>
            @foreach ($jobs as $job)
                    @if ($job->approved == 1 && $job->hardskills != "")
                    <div class="flex flex-row align-middle items-center">
                        <i class="fa-solid fa-caret-right text-xs text-orange-300 mr-3"></i>
                        <p class="text-md">{{ ucfirst($job->hardskills) }}</p>
                    </div>
                    @endif
            @endforeach
        </div>
        <hr class="my-5 h-px border-0 bg-gray-200">
        <h2 class="text-2xl font-bold text-slate-500">Conocimientos</h2>
        <div class="flex flex-row  w-full mb-3">
            <div class="h-auto w-2 bg-blue-200 mr-5"></div>
            @foreach ($jobs as $job)
                    @if ($job->approved == 1 && $job->knowledge != "")
                    <div class="flex flex-row align-middle items-center">
                        <i class="fa-solid fa-caret-right text-xs text-orange-300 mr-3"></i>
                        <p class="text-md">{{ ucfirst($job->knowledge) }}</p>
                    </div>
                    @endif
            @endforeach
        </div>
        <hr class="my-5 h-px border-0 bg-gray-200">
        <h2 class="text-2xl font-bold text-slate-500">Actividades</h2>
        <div class="flex flex-row  w-full mb-3">
            <div class="h-auto w-2 bg-blue-200 mr-5"></div>
            @foreach ($jobs as $job)
                    @if ($job->approved == 1 && $job->activities != "")
                    <div class="flex flex-row align-middle items-center">
                        <i class="fa-solid fa-caret-right text-xs text-orange-300 mr-3"></i>
                        <p class="text-md">{{ ucfirst($job->activities) }}</p>
                    </div>
                    @endif
            @endforeach
        </div>
    </div>
    <br><br>
</x-app-layout>


<script>
    function printToPDF() {
        var divContents = document.getElementById("report").innerHTML;
        var a = window.open('', '', 'height=720, width=1280');
        a.document.write('<html><head><title>Reporte de Empleos</title>');
        a.document.write('<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">');
        a.document.write('<link rel="stylesheet" href="http://127.0.0.1:5173/resources/css/app.css">');
        a.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />');
        a.document.write('</head><body >');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>