
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario') }}
        </h2>
    </x-slot>
    <!-- FORM -->

    <div class="spacer" style="height: 50px;"></div>
    <div class="container text-center">
        
    <div class="card">
        <br>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
                    <select class="form-select" id="inputGroupSelect01">
                        @foreach ($careers as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->acronym }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Bolsa de Trabajo</label>
                    <select class="form-select" id="inputGroupSelect01">
                        @foreach ($tasks as $bolsas)
                            <option value="{{ $bolsas->id }}">{{ $bolsas->value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Ciudad</label>
                    <select class="form-select" id="inputGroupSelect01">
                        @foreach ($cities as $citie)
                            <option value="{{ $citie->id }}">{{ $citie->value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Empleo</label>
                    <select class="form-select" id="inputGroupSelect01">
                        @foreach ($employments as $job)
                            <option value="{{ $job->id }}">{{ $job->value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Mes</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Enero</option>
                        <option value="1">Febrero</option>
                        <option value="2">Marzo</option>
                        <option value="3">Abril</option>
                        <option value="3">Mayo</option>
                        <option value="3">Junio</option>
                        <option value="3">Julio</option>
                        <option value="3">Agosto</option>
                        <option value="3">Septiembre</option>
                        <option value="3">Octubre</option>
                        <option value="3">Noviembre</option>
                        <option value="3">Diciembre</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Año</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>2022</option>
                        <option value="1">2021</option>
                        <option value="2">2020</option>
                        <option value="3">2019</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>


    <form  method="POST" action="/empleos">
    @csrf
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Empleo</span>
                    <input type="text" aria-label="First name" class="form-control" name="jobname">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Empresa</span>
                    <input type="text" aria-label="First name" class="form-control" name="business">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Correo Electrónico</span>
                    <input type="text" aria-label="First name" class="form-control" name="email">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Giro</span>
                    <input type="text" aria-label="First name" class="form-control" name="business_turn">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group">
                    <span class="input-group-text">Salario</span>
                    <input type="text" aria-label="First name" class="form-control" name="salary" placeholder="0.00">
                </div>
            </div>
            <div class="col-1">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="english">
                    <label class="form-check-label" for="exampleCheck1">Inglés</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Actividades</span>
                    <textarea class="form-control" name="activities"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Habilidades Blandas</span>
                    <input type="text" aria-label="First name" class="form-control blandas">
                </div>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-primary addBlandas">Agregar</button>
            </div>
            <div class="col-5">
                <div class="input-group">
                    <textarea rows="1" class="form-control habilidadesBlandas" aria-label="Habilidades Blandas"  name="softskills" data-validation="required" data-validation="custom" data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                  </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Habilidades Duras</span>
                    <input type="text" aria-label="First name" class="form-control duras">
                </div>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-primary addDuras">Agregar</button>
            </div>
            <div class="col-5">
                <div class="input-group">
                    <textarea rows="1" class="form-control habilidadesDuras" aria-label="Habilidades Duras" name="hardskills" data-validation="required" data-validation="custom" data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                  </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Conocimientos</span>
                    <input type="text" aria-label="First name" class="form-control conocimiento">
                </div>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-primary addConocimientos">Agregar</button>
            </div>
            <div class="col-5">
                <div class="input-group">
                    <textarea rows="1" class="form-control conocimientos" aria-label="Conocimientos" name="knowledge" data-validation="required" data-validation="custom" data-validation-regexp="^[a-zA-Z ]{2,30}$" readonly></textarea>
                </div>
            </div>
        </div>
        <br>

        <div class="row ">
            <div class="col-5">
                <div class="input-group">
                    <button type="submit" class="btn btn-success float-right">Guardar</button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="button" value="">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    <br><br>
    <!-- END FORM -->
</x-app-layout>

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