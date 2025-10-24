@extends('layouts.app')

@section('title', $data['name'])

@section('content')
    <div class="flex flex-col md:flex-row">
        
        <aside class="w-full md:w-1/3 p-8 bg-gray-100 dark:bg-gray-700 transition-colors duration-500">

            <section class="mb-8">
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3 border-b border-indigo-300 dark:border-indigo-500 pb-1">Kontak 📞</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center space-x-2">
                        <span class="text-indigo-500">✉️</span>
                        <a href="mailto:{{ $data['contact']['email'] }}" class="hover:text-indigo-500 transition">{{ $data['contact']['email'] }}</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-indigo-500">📱</span>
                        <span>{{ $data['contact']['phone'] }}</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-indigo-500">📸</span>
                        <a href="https://www.instagram.com/{{ str_replace('@', '', $data['contact']['instagram']) }}" target="_blank" class="hover:text-indigo-500 transition truncate">{{ $data['contact']['instagram'] }}</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-indigo-500">🎂</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $data['birthplace'] }}, {{ $data['birthdate'] }}</span>
                    </li>
                </ul>
            </section>
            
            <hr class="border-gray-300 dark:border-gray-600 mb-8">

            <section class="mb-8">
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 pb-1">Keahlian Utama ✨</h3>
                <div class="space-y-4">
                    @foreach($data['skills'] as $skill)
                        <div class="flex items-center space-x-2">
                            <span class="text-indigo-500 text-lg">{{ $skill['icon'] ?? '⭐️' }}</span> 
                            <div class="flex-grow">
                                <p class="text-sm font-medium mb-1">{{ $skill['name'] }}</p>
                                <div class="skill-bar">
                                    <div class="skill-level" style="width: {{ $skill['level'] }}%;"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <hr class="border-gray-300 dark:border-gray-600 mb-8">
            
            <section>
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3 border-b border-indigo-300 dark:border-indigo-500 pb-1">Bahasa 🗣️</h3>
                <ul class="space-y-1 text-sm">
                    <li>**Indonesia:** Native</li>
                    <li>**Inggris:** Dasar</li>
                </ul>
            </section>

        </aside>

        <main class="w-full md:w-2/3 p-8 space-y-10">

            <section>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-4 pb-2 border-b-4 border-indigo-300 dark:border-indigo-600">Tentang Saya 👤</h2>
                <p class="text-lg leading-relaxed">{{ $data['summary'] }}</p>
            </section>
            
            <hr class="border-gray-200 dark:border-gray-700">

            <section>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-4 pb-2 border-b-4 border-indigo-300 dark:border-indigo-600">Pengalaman Proyek & Organisasi 💼</h2>
                <div class="space-y-8">
                    @foreach($data['experience'] as $exp)
                        <div class="border-l-4 border-indigo-500 pl-4 relative">
                            <span class="absolute -left-2 top-0 block w-4 h-4 bg-indigo-500 rounded-full ring-4 ring-white dark:ring-gray-800"></span>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $exp['title'] }}</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">{{ $exp['company'] }}</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">{{ $exp['period'] }}</p>
                            <ul class="list-disc ml-5 text-gray-700 dark:text-gray-300 space-y-1">
                                @foreach($exp['description'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </section>

            <hr class="border-gray-200 dark:border-gray-700">

            <section>
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100 mb-4 pb-2 border-b-4 border-indigo-300 dark:border-indigo-600">Pendidikan 🎓</h2>
                <div class="space-y-8">
                    @foreach($data['education'] as $edu)
                        <div class="border-l-4 border-indigo-500 pl-4 relative">
                            <span class="absolute -left-2 top-0 block w-4 h-4 bg-indigo-500 rounded-full ring-4 ring-white dark:ring-gray-800"></span>
                            <p class="text-xl font-bold">{{ $edu['degree'] }}</p>
                            @if($edu['institution'])
                                <p class="text-gray-700 dark:text-gray-300">{{ $edu['institution'] }}</p>
                            @endif
                            <p class="text-sm text-indigo-500 dark:text-indigo-400">{{ $edu['year'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

        </main>
    </div>
@endsection