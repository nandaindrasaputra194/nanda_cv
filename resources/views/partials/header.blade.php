<header class="bg-indigo-600 dark:bg-indigo-800 text-white p-10 text-center">
    <div class="p-4 flex justify-end absolute top-0 right-0 z-10 no-print">
        <button id="toggle-dark" class="p-2 text-gray-200 dark:text-gray-400 hover:text-white dark:hover:text-indigo-400 transition duration-300 rounded-full bg-indigo-500 dark:bg-gray-700 shadow-md">
            <svg id="sun-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <svg id="moon-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
        </button>
    </div>

   <img src="{{ asset('images/indra.jpg') }}" 
     alt="Foto Profil Nanda Indra Saputra" 
     class="profile-photo mx-auto mb-4">

    <h1 class="text-5xl font-extrabold tracking-tight mb-1">{{ $data['name'] }}</h1>
    <p class="text-xl font-light opacity-80">{{ $data['title'] }}</p>
</header>