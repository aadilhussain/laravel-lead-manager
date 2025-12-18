<!DOCTYPE html>
<html>
<head>
    <title>Leads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Leads</h2>

<a href="{{ route('leads.create') }}">+ Add Lead</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach($leads as $lead)
    <tr>
        <td>{{ ucfirst($lead->name) }}</td>
        <td>{{ $lead->email }}</td>
        <td>{{ $lead->phone }}</td>
        <td>{{ ucfirst($lead->status) }}</td>
        <td>
            <a href="{{ route('leads.edit', $lead) }}">Edit</a>

            <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>