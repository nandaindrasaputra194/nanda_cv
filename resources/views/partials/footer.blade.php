<footer class="bg-gray-100 dark:bg-gray-700 p-6 border-t border-gray-200 dark:border-gray-600 text-center text-sm text-gray-600 dark:text-gray-400 no-print">
    <div class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-8">
        @if(isset($data['contact']))
            <div>
                ✉️ **Email:** <a href="mailto:{{ $data['contact']['email'] }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ $data['contact']['email'] }}</a>
            </div>
            <div>
                📱 **WA:** {{ $data['contact']['phone'] }}
            </div>
            <div>
                📸 **IG:** <a href="https://www.instagram.com/{{ str_replace('@', '', $data['contact']['instagram']) }}" target="_blank" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ $data['contact']['instagram'] }}</a>
            </div>
        @endif
    </div>
    <p class="mt-4 pt-4 border-t border-gray-300 dark:border-gray-600 text-xs">
        Dokumen ini dihasilkan secara dinamis menggunakan Laravel & Tailwind CSS. Versi: {{ date('Ymd') }}
    </p>
</footer>