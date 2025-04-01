<x-layout>
    @if($job === null)
        <x-slot:heading>
            Job Not Found
        </x-slot:heading>

        <h1 class="text-9xl">ERROR, JOB NOT FOUND</h1>
    @else
        <x-slot:heading>
            Job
        </x-slot:heading>

        <h1 class="text-5xl font-bold mb-3">Job Information</h1>
        <h3 class="text-2xl"><strong>{{$job['job_title']}}</strong> </h3>
        <h3 class="text-2xl">This job pays <strong>{{$job['job_salary']}}</strong> per year</h3>
    @endif
</x-layout>
