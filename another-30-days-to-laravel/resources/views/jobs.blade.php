<x-layout>
<x-slot:heading>
        Jobsboard
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/">
                <li><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year</li>
            </a>
        @endforeach
    </ul>
</x-layout>
