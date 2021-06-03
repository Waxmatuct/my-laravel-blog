@if ($message = Session::get('success'))
    <div class="w-full md:w-4/5 bg-primary px-3 py-3" onclick="fade(this)">
        <p class="text-light">{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="w-full md:w-4/5 px-3 py-3" style="background: red" onclick="fade(this)">
        <p class="text-light">{{ $message }}</p>
    </div>
@endif