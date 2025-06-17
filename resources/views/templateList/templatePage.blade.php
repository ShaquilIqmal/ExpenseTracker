<x-layout>
    <div class="flex flex-wrap justify-center mt-10 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center w-full underline">Template Page</h2><br><br>

        <div class="w-full md:w-1/2">
            <div class="rounded-lg shadow p-6 mx-16">
                <h3 class="text-xl font-semibold mb-4 text-gray-700">Sweet Alert</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-left text-sm font-medium text-gray-700">
                                <th class="p-3 border-b">#</th>
                                <th class="p-3 border-b">Description</th>
                                <th class="p-3 border-b">Button</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700">
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">1</td>
                                <td class="p-3 border-b">SweetAlert Opps</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert1">Try 1</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">2</td>
                                <td class="p-3 border-b">SweetAlert with buttons</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert2">Try 2</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">3</td>
                                <td class="p-3 border-b">SweetAlert Animated</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert3">Try 3</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">4</td>
                                <td class="p-3 border-b">SweetAlert Sure to Delete?</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert4">Try 4</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">5</td>
                                <td class="p-3 border-b">SweetAlert with Image</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert5">Try 5</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">6</td>
                                <td class="p-3 border-b">SweetAlert with GIF</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert6">Try 6</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-3 border-b">7</td>
                                <td class="p-3 border-b">SweetAlert Auto Close</td>
                                <td class="p-3 border-b">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" id="sweetalert7">Try 7</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2">

            <div class="rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-6 text-center underline">Select plugins</h2><br><br>

                <div class="d-flex align-items-center">
                    <div class="mr-4 mb-4" id="select_a"></div>


                    {{-- <div class="mr-4 mb-4" id="select_b"></div> --}}
                </div>

                <div class="d-flex align-items-center">
                    <select class="mr-4 mb-4" multiple name="select_c" id="select_c" >
                        {{-- @foreach ($getCustomerIncludedEmailList_Assigned as $memberCustomer) --}}
                            {{-- <option value="{{ $memberCustomer['id'] }}">{{ $memberCustomer['fullName'] }}</option> --}}
                            <option value="">a</option>
                            <option value="">b</option>
                        {{-- @endforeach --}}
                    </select>

                    <select class="mr-4 mb-4" multiple name="select_d" id="select_d" >
                        {{-- @foreach ($getCustomerIncludedEmailList_Assigned as $memberCustomer) --}}
                            {{-- <option value="{{ $memberCustomer['id'] }}">{{ $memberCustomer['fullName'] }}</option> --}}
                            <option value="">a</option>
                            <option value="">b</option>
                        {{-- @endforeach --}}
                    </select>
                </div>

                <button type="button" id="debug_button" class="bg-red-50 hover:bg-red-100 text-black w-full py-2 px-4 rounded">Debug button</button>

            </div><br>

            <div class="rounded-lg shadow p-6">
                <form action="{{ route('create.message') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="rounded-lg shadow p-6">
                        <div id="editor">
                            <p>Type Here</p>
                        </div>

                        <input type="hidden" name="text" id="editor-content">

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Save Message</button>
                    </div>
                </form>
            </div><br>

            <div class="rounded-lg shadow p-6">
                <div class="rounded-lg shadow p-6">
                    @foreach($getMessage as $message)
                        <div class="message">
                            {!! $message->text !!} <!-- Display the text content -->
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>


        </div>




    </div>


</x-layout>
