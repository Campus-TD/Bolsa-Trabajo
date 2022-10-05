<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de Empleos') }}
        </h2>
    </x-slot>
    <br>
    <br>
    
    <center>
        <div class="col-6">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
                <select class="form-select" id="inputGroupSelect01">
                    @foreach ($careers as $carrera)
                        <option value="{{ $carrera->id }}">{{ $carrera->acronym }} - {{ $carrera->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </center>

    <div class="spacer" style="height: 20px;"></div>
    <div class="container bg-white px-3 py-3" id="reportCont">
        <div class="row">
            <div class="col-6">
                <h2 class="font-semibold text-4xl text-gray-800 leading-tight">
                    {{ __('Reporte por Carrera') }}
                </h2>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right" onclick="printToPDF()"><i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="spacer" style="height: 30px;"></div>
        <h2 class="font-bold text-xl text-warning">
            Habilidades Blandas
        </h2>
        <ul class="list-disc">
        @foreach ($jobs as $job)
                @if ($job->approved == 1 && $job->softskills != "")
                    <li>{{ ucfirst($job->softskills) }}</li>
                @endif
        @endforeach
        </ul>

        <div class="spacer" style="height: 30px;"></div>
        
        <h2 class="font-bold text-xl text-warning">
            Habilidades Duras
        </h2>
        <ul class="list-disc">
        @foreach ($jobs as $job)
                @if ($job->approved == 1 && $job->hardskills != "")
                    <li>{{ ucfirst($job->hardskills) }}</li>
                @endif
        @endforeach
        </ul>
        
        <div class="spacer" style="height: 30px;"></div>

        <h2 class="font-bold text-xl text-warning">
            Conocimientos
        </h2>
        <ul class="list-disc">
        @foreach ($jobs as $job)
                @if ($job->approved == 1 && $job->knowledge != "")
                    <li>{{ ucfirst($job->knowledge) }}</li>
                @endif
        @endforeach
        </ul>
        
        <div class="spacer" style="height: 30px;"></div>

        <h2 class="font-bold text-xl text-warning">
            Actividades
        </h2>
        <ul class="list-disc">
        @foreach ($jobs as $job)
                @if ($job->approved == 1 && $job->activities != "")
                    <li>{{ ucfirst($job->activities) }}</li>
                @endif
        @endforeach
        </ul>
    </div>
    <br><br>

</x-app-layout>


<script>
    function printToPDF() {
        var divContents = document.getElementById("reportCont").innerHTML;
        var a = window.open('', '', 'height=720, width=1280');
        a.document.write('<html><head><title>Reporte de Empleos</title>');
        a.document.write('<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">');
        a.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">');
        a.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">');
        a.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />');
        a.document.write('</head><body >');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>