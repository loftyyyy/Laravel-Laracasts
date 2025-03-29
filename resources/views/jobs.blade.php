<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <ul>
    @foreach($jobs as $job)

        <li>
            <a href="jobs/{{$job['id']}}" class="hover:underline">
                Title: <strong>{{$job['Title']}}</strong>
                Salary: <strong>{{$job['Salary']}}</strong>

            </a>

        </li>

    @endforeach
    </ul>
</x-layout>
