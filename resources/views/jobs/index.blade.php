<x-layout>
<x-slot:heading>
        All of our wonderful jobs
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
                <a class="block px-4 py-6 border border-y-black border-x-gray" href="/jobs/{{$job['id']}}">
                <h3 class='font-bold text-blue-500'>{{  $job->employer->name }}</h3>
                <p>The position <strong> {{$job['title']}} </strong> pays {{$job['salary']}} per month</p>
                </a>
        @endforeach
        </div>
        <div>
            {{ $jobs->links() }}
        </div>
</x-layout>
