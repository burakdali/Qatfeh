<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doner') }}
        </h2>

        <div class="m-5 w-25 float-end">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>Notifications & Messages:</b></h5>
                    <br><br>

                    <p class="card-text">Here you can find new Notifications and text messages.</p>
                </div>
            </div>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="display-4">You are now ready to donate on call, Thank you </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>