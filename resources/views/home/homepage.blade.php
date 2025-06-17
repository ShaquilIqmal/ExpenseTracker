<x-layout>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="max-w-7xl mx-auto mt-10 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center underline">Expense Tracker</h2>

        <div class="flex gap-4 p-6">

            <div class="flex flex-col">
                <div class="w-64 h-[160px] bg-white shadow rounded-lg p-4 mb-4">
                    <button type="button" class="bg-red-50 hover:bg-red-100 text-black w-full py-2 px-4 rounded mb-4"
                        data-bs-toggle="modal" data-bs-target="#modal_add_category">
                        Add Category
                    </button>
                    <button type="button" class="bg-red-50 hover:bg-red-100 text-black w-full py-2 px-4 rounded"
                        data-bs-toggle="modal" data-bs-target="#modal_add_expenses">
                        Add Expense
                    </button>
                </div>
        
                <div class="w-64 h-[300px] bg-white shadow rounded-lg p-4">
                    <h4 class="text-center">Spendings</h4>
                    <a>Overall Expenses : RM {{ $getTotalExpensesAmount }}</a>
                    <a class="font-sans"> Try Font</a>


                </div>
            </div>
            


            <div class="flex-1 bg-white shadow rounded-lg p-4">
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Filter</label>
                    <select class="w-full border border-gray-300 rounded px-3 py-2">
                        <option>Category</option>
                        <option>Day</option>
                        <option>Week</option>
                        <option>Month</option>
                    </select>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-left text-sm font-medium text-gray-700">
                                <th class="p-3 border-b">#</th>
                                <th class="p-3 border-b">Expense</th>
                                <th class="p-3 border-b">Category</th>
                                <th class="p-3 border-b">Amount</th>
                                <th class="p-3 border-b">Date</th>
                                <th class="p-3 border-b">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            @foreach($getUserExpenses as $userExpense)
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">{{ $loop->iteration }}</td>
                                <td class="p-3 border-b">{{ $userExpense->title }}</td>
                                <td class="p-3 border-b">{{ $userExpense->category->category_name }}</td>
                                <td class="p-3 border-b">RM {{ number_format($userExpense->amount, 2) }}</td>
                                <td class="p-3 border-b">{{ $userExpense->created_at->format('d-m-Y') }}</td>
                                <td class="p-3 border-b">
                                    <button type="button"
                                        class="bg-red-400 hover:bg-red-500 text-white w-full py-2 px-4 rounded mb-4 deleteExpense"
                                        data-id="{{ $userExpense->id }}">
                                        Remove
                                    </button>
                                    <button type="button"
                                    class="bg-blue-400 hover:bg-blue-500 text-white w-full py-2 px-4 rounded mb-4 deleteExpense"
                                    data-id="{{ $userExpense->id }}">
                                    Edit
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('home.modal.addCategory')
    @include('home.modal.addExpenses')
</x-layout>
