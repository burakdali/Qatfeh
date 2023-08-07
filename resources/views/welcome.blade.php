<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home screen') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="display-4">One blood donation could save up to 3 lives</h1>

            <?php if (Auth::user()->hasRole('user')) : ?>
                <div class="container m-5">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="card">
                                <div class="card-header">
                                    Become a DONER
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">save a life</h5>
                                    <p class="card-text">Only few steps next,Donate and you can save up to 3 people lives.</p>
                                    <a href="/become-a-doner" class="btn btn-danger">Become a DONER</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="card">
                                <div class="card-header">
                                    Seeking for Blood
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Available types</h5>
                                    <p class="card-text">if you are searching for a specific blood type then you are on the right track.</p>
                                    <a href="/seeking-for-blood" class="btn btn-primary">Seek for blood</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>

</x-app-layout>
@if(!empty($successMsg))
<div class="alert alert-success"> {{ $successMsg }}</div>
@endif