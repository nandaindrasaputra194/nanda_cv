<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - @yield('title')</title> 
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
    body { 
        font-family: 'Poppins', sans-serif;
    }
    .skill-bar { height: 8px; border-radius: 4px; background-color: #e0e0e0; overflow: hidden; }
    .dark .skill-bar { background-color: #374151; }
    .skill-level { height: 100%; border-radius: 4px; background-color: #4f46e5; transition: width 1s ease-in-out; }

    /* --- PERUBAHAN DI SINI --- */
    .profile-photo {
        width: 150px; /* Ukuran lebar baru */
        height: 150px; /* Ukuran tinggi baru */
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #ffffff; 
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    .dark .profile-photo {
        border: 4px solid #374151;
        box-shadow: none;
    }

    /* Print CSS */
    @media print {
        .no-print { display: none !important; }
        .cv-container { box-shadow: none !important; margin: 0 !important; padding: 0 !important; border-radius: 0 !important; }
        body { background-color: white !important; color: black !important; }
        .dark { background-color: white !important; }
        .md\:flex-row { flex-direction: row !important; }
        .md\:w-1\/3, .md\:w-2\/3 { width: auto !important; }
        .profile-photo { border: 2px solid #000000 !important; box-shadow: none !important; }
    }
</style>
</head>
<body class="bg-gray-50 text-gray-800 transition-colors duration-500 dark:bg-gray-900 dark:text-gray-100 p-4 sm:p-8">

    <div class="max-w-5xl mx-auto my-6 bg-white dark:bg-gray-800 rounded-xl shadow-2xl overflow-hidden transition-colors duration-500 relative cv-container">
        
        @include('partials.header') 

        @yield('content')
        
        @include('partials.footer') 
        
    </div>

    <script class="no-print">
        const toggle = document.getElementById('toggle-dark');
        const html = document.documentElement;
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        function setMode(mode) {
            if (mode === 'dark') {
                html.classList.add('dark');
                localStorage.theme = 'dark';
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            } else {
                html.classList.remove('dark');
                localStorage.theme = 'light';
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            }
        }
        
        const storedTheme = localStorage.theme;
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (storedTheme === 'dark' || (!storedTheme && prefersDark)) {
            setMode('dark');
        } else {
            setMode('light');
        }

        toggle.addEventListener('click', () => {
            const currentMode = html.classList.contains('dark') ? 'dark' : 'light';
            setMode(currentMode === 'dark' ? 'light' : 'dark');
        });

        document.addEventListener('DOMContentLoaded', () => {
            const skillLevels = document.querySelectorAll('.skill-level');
            skillLevels.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => { bar.style.width = width; }, 100);
            });
        });
    </script>
</body>
</html>
