<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    @foreach($jobs as $job)
        <h3>Title: <strong>{{$job['Title']}}</strong> Salary: <strong>{{$job['Salary']}}</strong> per year</h3>

    @endforeach
</x-layout>
