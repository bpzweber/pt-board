<html>
<body>

<h1>
    Create a project
</h1>

<body>

<form method="post" action="/projects">

    @csrf

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input name="title" class="input" type="text" placeholder="Title" value="">
        </div>
    </div>

    <div class="field">
        <label class="label">Description</label>
        <div class="control">
            <textarea name="description" class="textarea" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="control">
        <button type="submit" class="button is-link">Save</button>
    </div>

</form>

</body>

</html>