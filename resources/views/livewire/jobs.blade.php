@auth
    <div>
    {{-- Stop trying to control. --}}
        <div class="spacer" style="height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="text-right">
                    <a href="empleos/create" class="btn btn-success">Agregar Empleo</a>
                    <a href="reports" class="btn btn-secondary">Generar Reporte</a>
                </div>
            </div>
        </div>

        <div class="spacer" style="height: 20px;"></div>
        <div class="container">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-sm-3">
                        <div class="card bg-light" style="width: 18rem; height: 12rem;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-truncate">
                                    @if ($job->approved == 1)
                                        <i class="bi bi-patch-check" style="color: #ffab24;"></i>
                                    @endif
                                    {{ ucfirst($job->jobname )}}
                                    @if ($job->business != "")
                                        <p class="card-text text-truncate"><b>{{ ucfirst($job->business) }}</b></p>
                                    @else
                                        <div class="spacer" style="height: 30px;"></div>
                                    @endif
                                </h5>
                                
                                    
                                @if($job->salary > 0)
                                    <b>Salario: </b>${{ $job->salary }}
                                @else
                                    <div class="spacer" style="height: 30px;"></div>
                                @endif
                                
                                @if ($job->email != "")
                                    <p class="card-text text-truncate">{{ strtolower($job->email) }}</p>
                                @else
                                    <div class="spacer" style="height: 30px;"></div>
                                @endif
                                <form action="/empleos/{{ $job->id }}" method="POST">
                                    <a href="#" class="btn btn-success btn-block"><i class="fa fa-eye"></i></a>
                                    <a href="/empleos/{{ $job->id }}/edit" class="btn btn-warning text-white"><i class="fa fa-pencil"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endauth

@guest
    <div class="spacer" style="height: 20px;"></div>
    <div class="container">
        <div class="row">
            @if ($jobs->count() > 0)
                @foreach ($jobs as $job)
                    @if ($job->approved == 1)
                        <div class="col-sm-3">
                            <div class="card bg-light" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-truncate">
                                        @if ($job->approved == 1)
                                            <i class="bi bi-patch-check" style="color: #ffab24;"></i>
                                        @endif
                                        {{ $job->jobname }}
                                        <p class="card-text text-truncate"><b>{{ $job->business }}</b></p>
                                    </h5>
                                    <p class="card-text text-truncate">{{ $job->email }}</p>
                                    <a href="#" class="btn btn-primary btn-block">Ver Detalles</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="col-sm-12">
                    <div class="card bg-light" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-truncate">No hay empleos disponibles
                            </h5>
                        </div>
                    </div>
                    <br>
                </div>
            @endif
        </div>
    </div>
@endguest
