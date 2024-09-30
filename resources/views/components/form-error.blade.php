@props(['name'])

@error($name)
<p class='text-md text-red-600 font-bold mt-1'> {{ $message}} </p>
@enderror
