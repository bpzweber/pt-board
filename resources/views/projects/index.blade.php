<html>
<body>

<h1>
    Test
</h1>

@forelse($projects as $project)

<ul>
    <li>
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </li>
</ul>

@empty

    <p>No projects yet</p>

@endforelse



</body>

</html>