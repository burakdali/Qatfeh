<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search result') }}
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
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Blood type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php foreach ($users as $index) : ?>
                                    <tr>
                                        <td>{{$index->full_name}}</td>
                                        <td>{{$index->email}}</td>
                                        <td>{{$index->phone_number}}</td>
                                        <td>{{$index->location}}</td>
                                        <td>{{$index->blood_type}}</td>
                                        <td>

                                            <form action="/store-transaction?doner_id=<?php echo $index->id ?>" method="POST">
                                                @csrf
                                                <button type="submit" class="m-2" title="send a message via email">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>