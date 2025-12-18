<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <div>
        <label for="name">Project Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <button type="submit">Create Project</button>
</form>