<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Carrera</title>
</head>

<body>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div id="defaultModal" aria-hidden="true" class="relative z-10" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 bg-gray-900 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="flex justify-center">
                    <div class="">
                        <form action="{{ route('carreras.store') }}" method="POST">
                            @csrf
                            <div class="overflow-hidden rounded shadow-2xl shadow-cyan-800">
                                <div class="bg-white px-16 py-14">
                                    <label for="carrera"
                                        class="block bg-gradient-to-r from-cyan-400 via-indigo-500 to-violet-600 bg-clip-text text-left text-8xl font-bold text-transparent">
                                        Nueva Carrera
                                    </label>
                                    <div class="mt-8 flex">
                                        <input required type="text" name="acronym" id="acronym"
                                            class="focus-visible block w-20 border-none border-transparent text-2xl text-red-900 focus:border-transparent focus:ring-0"
                                            placeholder="ISC">
                                        <input required type="text" name="name" id="carrera"
                                            class="focus-visible block w-full border-none border-transparent text-2xl text-red-900 focus:border-transparent focus:ring-0"
                                            placeholder="Ingeniería en Sistemas Computacionales">
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center rounded-full bg-violet-600 py-2 px-8 text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-purple-500 focus:outline-none">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
