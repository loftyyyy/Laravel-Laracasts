<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <ul>
    @foreach($jobs as $job)

        <li>
            <a href="jobs/{{$job['id']}}" class="hover:underline">
                Title: <strong>{{$job['job_title']}}</strong>
                Salary: <strong>{{$job['job_salary']}}</strong>

            </a>

        </li>

    @endforeach
    </ul>
</x-layout>
