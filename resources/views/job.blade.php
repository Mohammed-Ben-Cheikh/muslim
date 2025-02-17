<x-layout>
    <ul>
        @if(isset($jobs) && count($jobs) > 0)
            @if ($id > count($jobs) - 1)
                <li>Job not found</li>
            @else
                <li>{{ $jobs[$id] }}</li>
            @endif
        @else
            <li>No jobs available</li>
        @endif
    </ul>
</x-layout>