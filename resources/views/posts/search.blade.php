<hr>
@if (count($results) > 0)
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->phone }}</li>
            <li>{{ $result->name }}</li>
            <li>{{ $result->job }}</li>
            <li>{{ $result->post1 }}</li>
            <hr>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
<hr>