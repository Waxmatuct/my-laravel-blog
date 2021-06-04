<div class="toggle flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-black dark:text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
    {{-- <label id="switch" class="switch">
        <input type="checkbox" id="switchTheme">
        <span class="slider round"></span>
    </label> --}}

    <label class="switch">
        <input type="checkbox" id="switchTheme">
        <span class="slider round"></span>
    </label>

    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 text-black dark:text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
</div>

<script>
    var elem = document.getElementById('switchTheme')
    if (localStorage.theme === 'dark') {
        elem.checked = true
    } else {
        elem.checked = false
    }
</script>