@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-8"></div>
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">📋 My Contacts</h1>
        <a href="{{ route('contacts.create') }}" class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Add New Contact
        </a>
    </div>

    <div class="overflow-hidden bg-white dark:bg-gray-800 rounded-lg shadow-lg">
        <table class="w-full table-fixed divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="w-1/4 py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-300">Name</th>
                    <th class="w-1/4 py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-300">Email</th>
                    <th class="w-1/4 py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-300">Phone</th>
                    <th class="w-1/4 py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($contacts as $contact)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200"></tr>
                        <td class="py-4 px-4 text-gray-900 dark:text-gray-200">{{ $contact->name }}</td>
                        <td class="py-4 px-4 text-gray-900 dark:text-gray-200">{{ $contact->email }}</td>
                        <td class="py-4 px-4 text-gray-900 dark:text-gray-200">{{ $contact->phone }}</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center space-x-3"></div>
                                <a href="{{ route('contacts.edit', $contact->id) }}" 
                                   class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md transition duration-200 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-12 12a2 2 0 01-2.828 0l-1.414-1.414a2 2 0 010-2.828l12-12z"/>
                                    </svg>
                                    Edit
                                </a>
                                
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition duration-200 shadow-sm"
                                            onclick="return confirm('Are you sure you want to delete this contact?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor"></svg>
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
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
@endsection
