@if ($message = Session::get('success'))
<div class="bg-green-200 alert alert-success px-3 py-3">
    <p class="text-gray-700">{{ $message }}</p>
</div>
@endif