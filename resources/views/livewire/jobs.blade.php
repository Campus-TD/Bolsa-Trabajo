<div>
    {{-- Stop trying to control. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleos') }}
        </h2>
    </x-slot>

    <!-- Add button in form-->
    <div class="spacer" style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="text-right">
                <button wire:click="create()" class="btn btn-success float-right">Agregar Empleo</button>
            </div>
        </div>
    </div>

    <div class="spacer" style="height: 20px;"></div>
    <div class="container">
        <div class="row">
        @foreach($jobs as $job)
            <div class="col-sm-3">
            <div class="card bg-light" style = "width: 18rem;">
              <div class="card-body">
                 <h5 class="card-title font-weight-bold">{{$job->jobname}}</h5>
                 <p class="card-text"><b>{{$job->business}}</b></p>
                 <p class="card-text">{{$job->email}}</p>
                 <a href="#" class="btn btn-secondary btn-block">Ver Detalles</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
</div>