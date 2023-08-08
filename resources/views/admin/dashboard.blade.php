<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-4">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">doner id</th>
                                    <th scope="col">seeker id</th>
                                    <th scope="col">donation date</th>
                                    <th scope="col">is done</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>