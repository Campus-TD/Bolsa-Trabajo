<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <!-- Modal toggle -->
    <button
        class="block rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" data-modal-toggle="defaultModal">
        Toggle modal
    </button>




    <!-- This example requires Tailwind CSS v2.0+ -->
    <div id="defaultModal" aria-hidden="true" class="relative z-10" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <!--
      Background backdrop, show/hide based on modal state.
  
      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
                <div class="flex justify-center">
                    <div class="">
                        <form action="#" method="POST">
                            <div class="overflow-hidden rounded-md shadow">
                                <div class="bg-white px-16 py-14">
                                    <label for="carrera"
                                        class="block bg-gradient-to-r from-cyan-400 via-indigo-500 to-violet-600 bg-clip-text text-left text-8xl font-bold text-transparent">
                                        Nueva Carrera
                                    </label>
                                    <div class="mt-8 flex">
                                        <input type="text" name="acronym" id="acronym"
                                            class="focus-visible block w-20 border-none border-transparent text-2xl text-red-900 focus:border-transparent focus:ring-0"
                                            placeholder="ISC">
                                        <input type="text" name="carrera" id="carrera"
                                            class="focus-visible block w-full border-none border-transparent text-2xl text-red-900 focus:border-transparent focus:ring-0"
                                            placeholder="Ingeniería en Sistemas Computacionales">
                                    </div>


                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center rounded-full bg-violet-600 py-2 px-8 text-sm font-medium text-white shadow-sm transition-all duration-500 hover:bg-purple-500 focus:outline-none">Save</button>
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
