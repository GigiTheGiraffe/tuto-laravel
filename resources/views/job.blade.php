<x-layout>
<x-slot:heading>
        About me
    </x-slot:heading>
                <h2> {{$job['title']}} </h2>
                <p>The position <strong> {{$job['title']}} </strong> pays {{$job['salary']}} per month</p>
</x-layout>
