<x-layout>
<x-slot:heading>
        About me
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
                <a class="block px-4 py-6 border border-y-black border-x-gray" href="/jobs/{{$job['id']}}">
                The position <strong> {{$job['title']}} </strong> pays {{$job['salary']}} per month
                </a>
        @endforeach
        </div>
</x-layout>
