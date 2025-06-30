
<x-admin-dashboard-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">{{__('Plans')}}</h1>
        <div class="overflow-x-auto mb-5">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">#</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Name</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Price</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Discounted Price</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Discounted</th>
                    <th class="text-left px-6 py-3 text-sm font-medium text-gray-700">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($plans as $plan)
                    <tr class="border-b hover:bg-gray-50" >
                        <td class="px-6 py-4 text-sm text-gray-600">{{$plan->id}}</td>
                        <td class="px-6 py-4 text-sm text-gray-600 uppercase"><span class="whitespace-nowrap">{{$plan->name}} </span></td>
                        <td class="px-6 py-4 text-sm text-gray-600"><span class="whitespace-nowrap">{{$plan->price}}</span></td>
                        <td class="px-6 py-4 text-sm text-gray-600"><span class="line-clamp-2">{{$plan->discounted_price}}</span></td>
                        <td class="px-6 py-4 text-sm text-gray-600"><span class="whitespace-nowrap">{{$plan->is_discounted ? 'yes' : 'no'}} </span></td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <a
                                href={{route('admin.plans.edit',['plan'=>$plan->id])}}
                                class="text-blue-500 hover:text-blue-700 font-medium">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin-dashboard-layout>
