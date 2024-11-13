<!-- resources/views/contacts/edit.blade.php -->

@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">✏️ Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2 dark:text-gray-300" for="name">Name</label>
            <input type="text" name="name" value="{{ $contact->name }}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2 dark:text-gray-300" for="email">Email</label>
            <input type="email" name="email" value="{{ $contact->email }}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2 dark:text-gray-300" for="phone">Phone</label>
            <input type="text" name="phone" value="{{ $contact->phone }}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600" required>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-200">Update Contact</button>
            <a href="{{ route('contacts.index') }}" class="text-blue-500 hover:text-blue-600 font-semibold">Cancel</a>
        </div>
    </form>
@endsection
