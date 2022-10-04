  <div>
      {{-- Stop trying to control. --}}

      @auth
          
      <div class="spacer" style="height: 30px;"></div>
      <div class="container">
          <div class="row">
              <div class="text-right">
                  <a href="empleos/create" class="btn btn-success float-right">Agregar Empleo</a>
              </div>
          </div>
      </div>

      <div class="spacer" style="height: 20px;"></div>
      <div class="container">
          <div class="row">
              @foreach ($jobs as $job)
                  <div class="col-sm-3">
                      <div class="card bg-light" style="width: 18rem;">
                          <div class="card-body">
                              <h5 class="card-title font-weight-bold text-truncate">{{ $job->jobname }}
                                  <p class="card-text"><b>{{ $job->business }}</b></p>
                                  @if ($job->approved == 1)
                                      <i class="bi bi-patch-check"></i>
                                  @endif
                              </h5>
                              <p class="card-text">{{ $job->email }}</p>
                              <a href="#" class="btn btn-primary btn-block">Ver Detalles</a>
                              <a href="/empleos/{{ $job->id }}/edit" class="btn btn-warning">Editar</a>
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
            @if($jobs->count() > 0)
                @foreach ($jobs as $job)
                    @if($job->approved == 1)
                        <div class="col-sm-3">
                            <div class="card bg-light" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-truncate">{{ $job->jobname }}
                                        <p class="card-text"><b>{{ $job->business }}</b></p>
                                        @if ($job->approved == 1)
                                            <i class="bi bi-patch-check"></i>
                                        @endif
                                    </h5>
                                    <p class="card-text">{{ $job->email }}</p>
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
    