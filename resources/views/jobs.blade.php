<x-layout>
    <ul>
        @if(isset($jobs) && count($jobs) > 0)
            @foreach ($jobs as $job)
                <a href="/job/{{ $loop->index }}">
                    <li>{{ $job }}</li>
                </a>
            @endforeach
        @else
            <li>No jobs available</li>
        @endif
    </ul>
</x-layout>