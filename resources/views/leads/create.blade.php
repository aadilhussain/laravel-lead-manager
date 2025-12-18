<!DOCTYPE html>
<html>
<head>
    <title>Create Lead</title>
</head>
<body>

<h2>Create Lead</h2>

<form method="POST" action="{{ route('leads.store') }}">
    @csrf

    <p>
        Name:<br>
        <input type="text" name="name" required>
    </p>

    <p>
        Email:<br>
        <input type="email" name="email">
    </p>

    <p>
        Phone:<br>
        <input type="text" name="phone">
    </p>

    <p>
        Source:<br>
        <input type="text" name="source">
    </p>

    <button type="submit">Save</button>
</form>

</body>
</html> 