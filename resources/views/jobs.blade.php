<x-layout>
    <x-slot:heading>
<<<<<<< HEAD
        Job  Listings
=======
        Job Listings
>>>>>>> 53396258f9c6b004e73bc9a74e8fa62abbc34947
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>