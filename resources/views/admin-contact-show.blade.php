@extends('layouts.admin_master')
@section('body')
    <main class="p-6">
        <a href="{{ route('admin.contact') }}" class="text-blue-500 underline mb-4 inline-block">← Back</a>
        <h1 class="text-2xl font-bold mb-4">Message Details</h1>
        <p><strong>ID: </strong>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Subject:</strong> {{ $contact->subject }}</p>
        <p><strong>Message:</strong></p>
        <p class="mt-2">{{ $contact->message }}</p>
    </main>
@endsection
