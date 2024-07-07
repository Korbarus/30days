<x-layout>
    <x-slot:heading>
        about
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="jobs/{{$job['id']}}">
            <strong>{{$job['title']}}</strong> pays {{$job['salary']}}
            </a>
        </li>
    </ul>
    @endforeach
</x-layout>
