<x-layout>
<x-slot:heading>
        About me
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="text-blue hover:underline" href="/jobs/{{$job['id']}}">
                The position <strong> {{$job['title']}} </strong> pays {{$job['salary']}} per month
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
