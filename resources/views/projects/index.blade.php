<html>
    <body>
        <h1>Birdboard</h1>
        <ul>
            @forelse ($projects as $project)
                <li>
                    <a href="{{ $project->path() }}" class="href">{{ $project->title }}</a>
                </li>
            @empty
                <li>No project yet.</li>
            @endforelse
        </ul>
    </body>
</html>
