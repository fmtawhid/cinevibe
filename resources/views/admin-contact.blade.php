@php use Illuminate\Support\Str; @endphp

@extends('layouts.admin_master')
@section('body')
    <!-- Main Section -->
    <main class="flex-1 overflow-y-auto p-6 bg-gray-50 min-h-screen">
        <!-- Header Actions -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-semibold text-gray-800 tracking-tight">Contact Submissions</h1>
        </div>

        <!-- Pagination -->
        <div class="w-full flex justify-end mb-4">
            {{ $contacts->links('pagination::tailwind') }}
        </div>



        <!-- Flash Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-6 shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg border border-gray-100 mt-4">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider">ID</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider">Name</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider">Email</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider">Subject</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider w-1/2">Message</th>
                        <th class="py-3 px-6 text-left font-semibold uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="py-3 px-6 text-gray-900">{{ $contact->id }}</td>
                            <td class="py-3 px-6 text-gray-800 font-medium">{{ $contact->name }}</td>
                            <td class="py-3 px-6 text-gray-600">{{ $contact->email }}</td>
                            <td class="py-3 px-6 text-gray-700">{{ $contact->subject }}</td>
                            <td class="py-3 px-6 text-gray-600 w-1/2">{{ Str::limit($contact->message, 101) }}</td>
                            <td class="py-3 px-6 whitespace-nowrap">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.contact.show', $contact->id) }}"
                                        class="inline-block bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition text-xs font-semibold shadow-sm">
                                        View</a>
                                    <form method="POST" action="{{ route('admin.contact.delete', $contact->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="inline-block bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition text-xs font-semibold shadow-sm">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <style>
            /* Add this style to limit the message column width */
            @media (min-width: 768px) {

                table td:nth-child(5),
                table th:nth-child(5) {
                    width: 30%;
                    max-width: 30%;
                }
            }
        </style>
        <!-- Spacer for bottom padding -->
        <div class="py-8 sm:py-12"></div>
    </main>
@endsection
