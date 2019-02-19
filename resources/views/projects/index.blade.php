<html>
<body>

<h1>
    Test
</h1>

@foreach($projects as $project)

<ul>
    <li>
        {{ $project->title }}
    </li>
</ul>
@endforeach

</body>

</html>