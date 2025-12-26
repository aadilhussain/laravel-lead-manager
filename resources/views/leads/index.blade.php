@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Leads</h2>

        <a href="{{ route('leads.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add Lead
        </a>
    </div>

    <div class="bg-white shadow rounded overflow-hidden">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Phone</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr class="border-t">
                        <td class="p-3">{{ $lead->name }}</td>
                        <td class="p-3">{{ $lead->email }}</td>
                        <td class="p-3">{{ $lead->phone }}</td>
                        <td class="p-3">
                            @php
                                $colors = [
                                    'new' => 'bg-blue-100 text-blue-800',
                                    'qualified' => 'bg-green-100 text-green-800',
                                    'lost' => 'bg-red-100 text-red-800',
                                    'contacted' => 'bg-yellow-100 text-yellow-800',
                                    'converted' => 'bg-purple-100 text-purple-800',
                                ];
                            @endphp

                            <span class="px-2 py-1 rounded text-sm {{ $colors[$lead->status] ?? 'bg-gray-200' }}">
                                {{ ucfirst($lead->status) }}
                            </span>
                        </td>
                        <td class="p-3 flex gap-2">
                            <a href="{{ route('leads.edit', $lead) }}" class="text-blue-600 hover:underline">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('leads.destroy', $lead) }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
