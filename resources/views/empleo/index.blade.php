<x-app-layout>
    <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg sm:mx-12 md:mx-52 mt-10 ">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-4xl font-medium leading-6 text-gray-900">{{ $title }}</h3>
            <div class="flex">

                <div class="mt-5">
                    <button onclick="location.href='{{ route('empleo.create') }}'" type="button"
                        class="inline-flex rounded bg-violet-600 py-2 px-3 text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-violet-300 focus:outline-none">Nuevo</button>
                </div>

            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-white px-4 py-5 grid grid-cols-12">
                    <div class="text-sm  font-medium">id</div>
                    <div class="mt-1 text-sm font-medium col-span-8 text-gray-900 sm:mt-0">Nombre</div>
                    <div class="mt-1 text-sm font-medium text-gray-900 sm:mt-0">Acciones</div>

                </div>
                @php
                    $bandera = true;
                    $color = 'bg-gray-100';
                @endphp
                @foreach ($employments as $employment)
                    <div class="{{ $color }} px-4 py-5 grid grid-cols-12">
                        <div class="text-sm  font-medium text-gray-500">{{ $employment->id }}</div>
                        <div class="mt-1 text-sm col-span-8 text-gray-900 sm:mt-0">{{ $employment->value }}</div>
                        <div class="mt-1 sm:mt-0">
                            <form action="/empleo/{{ $employment->id }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit"
                                    class="inline-flex justify-center rounded-full bg-red-600 py-2 px-3 text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-red-300 focus:outline-none">Eliminar</button>
                            </form>
                        </div>
                    </div>
                    @if ($bandera)
                        @php
                            $color = 'bg-white';
                            $bandera = false;
                        @endphp
                    @else
                        @php
                            $color = 'bg-gray-100';
                            $bandera = true;
                        @endphp
                    @endif
                @endforeach

            </dl>
        </div>
    </div>
    <br><br>
</x-app-layout>