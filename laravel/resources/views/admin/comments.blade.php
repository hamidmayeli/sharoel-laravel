<x-admin-dashboard-layout>
    <div class="container mx-auto p-6" x-data="{ showModal: false, selectedSubmission: {} }">
        <h1 class="text-2xl font-bold mb-4">{{__('Comments')}}</h1>
        <div class="overflow-x-auto mb-5">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">#</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Name</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Email</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Phone Number</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Subject</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Message</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($comments as $comment)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-600">{{$comment->id}}</td>
                    <td class="px-6 py-4 text-sm text-gray-600"><span class="whitespace-nowrap">{{$comment->name}} </span></td>
                    <td class="px-6 py-4 text-sm text-gray-600"><span class="whitespace-nowrap">{{$comment->email}}</span></td>
                    <td class="px-6 py-4 text-sm text-gray-600"><span class="whitespace-nowrap">{{$comment->phone}}</span></td>
                    <td class="px-6 py-4 text-sm text-gray-600"><span class="line-clamp-2">{{$comment->subject}}</span></td>
                    <td class="px-6 py-4 text-sm text-gray-600"><span class="line-clamp-2">{{$comment->message}}</span></td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <button
                            @click="showModal = true; selectedSubmission = {{$comment}}"
                            class="text-blue-500 hover:text-blue-700 font-medium">View</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$comments->links()}}

        <!-- Modal -->
        <div
            class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50"
            x-show="showModal"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md text-body">
                <div class="flex justify-between">
                    <h2 class="text-xl font-bold mb-4 text-title">Submission Details</h2>
                    <button
                        @click="showModal = false"
                        class="px-3 rounded-lg text-red-500 hover:bg-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="mb-2"><strong>Name:</strong> <span x-text="selectedSubmission.name"></span></p>
                <p class="mb-2"><strong>Email:</strong> <span x-text="selectedSubmission.email"></span></p>
                <p class="mb-2"><strong>Phone:</strong> <span x-text="selectedSubmission.phone"></span></p>
                <p class="mb-2"><strong>Subject:</strong> <span x-text="selectedSubmission.subject"></span></p>
                <p class="mb-4"><strong>Message:</strong> <span x-text="selectedSubmission.message"></span></p>
            </div>
        </div>
    </div>

</x-admin-dashboard-layout>
