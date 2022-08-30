
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario') }}
        </h2>
    </x-slot>
    <!-- FORM -->

    <div class="spacer" style="height: 50px;"></div>
    <form>
    @csrf
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Empleo</span>
                    <input type="text" aria-label="First name" class="form-control" id="jobname" wire:model="jobname">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Empresa</span>
                    <input type="text" aria-label="First name" class="form-control" id="business" wire:model="business">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text">Correo Electrónico</span>
                    <input type="text" aria-label="First name" class="form-control" id="email" wire:model="email">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Actividades</span>
                    <textarea class="form-control" id="activities" wire:model="activities"></textarea>
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
                    <textarea rows="1" class="form-control habilidadesBlandas" aria-label="Habilidades Blandas" disabled  id="softskills" wire:model="softskills"></textarea>
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
                    <textarea rows="1" class="form-control habilidadesDuras" aria-label="Habilidades Duras" disabled id="hardskills" wire:model="hardskills"></textarea>
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
                    <textarea rows="1" class="form-control conocimientos" aria-label="Conocimientos" disabled id="knowledge" wire:model="knowledge"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-5">
                <div class="input-group">
                    <button wire:click="storeJob()" class="btn btn-success float-right" type="button" value="">Guardar</button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger" type="button" value="">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
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