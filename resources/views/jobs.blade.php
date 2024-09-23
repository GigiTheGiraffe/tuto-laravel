<x-layout>
<x-slot:heading>
        About me
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>The position <strong> {{$job['title']}} </strong> pays {{$job['salary']}} per month</li>
        @endforeach
    </ul>
</x-layout>
