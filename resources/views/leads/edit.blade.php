<!DOCTYPE html>
<html>
<head>
    <title>Edit Lead</title>
</head>
<body>

<h2>Edit Lead</h2>

<form method="POST" action="{{ route('leads.update', $lead) }}">
    @csrf
    @method('PUT')

    <p>
        Name:<br>
        <input type="text" name="name" value="{{ $lead->name }}" required>
    </p>

    <p>
        Email:<br>
        <input type="email" name="email" value="{{ $lead->email }}">
    </p>

    <p>
        Phone:<br>
        <input type="text" name="phone" value="{{ $lead->phone }}">
    </p>

    <p>
        Source:<br>
        <input type="text" name="source" value="{{ $lead->source }}">
    </p>

    <p>
        Status:<br>
        <select name="status">
            <option value="new" {{ $lead->status == 'new' ? 'selected' : '' }}>New</option>
            <option value="contacted" {{ $lead->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
            <option value="qualified" {{ $lead->status == 'qualified' ? 'selected' : '' }}>Qualified</option>
            <option value="closed" {{ $lead->status == 'closed' ? 'selected' : '' }}>Closed</option>
        </select>
    </p>

    <button type="submit">Update</button>
</form>

</body>
</html>