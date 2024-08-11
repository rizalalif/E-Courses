<div id="toast-{{ $type }}"
    class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow top-4 right-4 dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-{{ $iconColor }}-500 bg-{{ $iconColor }}-100 rounded-lg dark:bg-{{ $iconColor }}-800 dark:text-{{ $iconColor }}-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="{{ $iconPath }}" />
        </svg>
        <span class="sr-only">{{ $iconAlt }}</span>
    </div>
    <div class="text-sm font-normal ms-3">{{ $message }}</div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        data-dismiss-target="#toast-{{ $type }}" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toast = document.getElementById('toast-{{ $type }}');
        if (toast) {
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => {
                    toast.remove();
                }, 300); // 300ms untuk efek transisi, sesuaikan jika perlu
            }, 3000); // 3000ms = 3 detik
        }
    });
</script>
