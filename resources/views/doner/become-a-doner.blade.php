<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Become a doner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header">
                                        Doner
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Being a Doner:</h5>
                                        <p class="card-text">if you are ready to be a doner then please fill up the next form,</p>
                                        <form action="/confirm-doner" method="post">
                                            @csrf
                                            <label for="date" class="col-form-label">available from date:</label>
                                            <input type="date" name="date" id="">
                                            <label class="col-form-label">by proceeding you are telling the system that you are ready at anytime to donate.</label>
                                            <br>

                                            <input class="btn btn-primary" type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>