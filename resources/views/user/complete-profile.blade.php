<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Qatfeh') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="display-4">You need to complete your profile before doing anything else,</h1>
                <h1 class="display-6">please fill up this form:</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 border border-success mt-2">
                            <form action="/submit-profile" method="POST">
                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto ">
                                        <label for="fullName" class="col-form-label">Your Fullname:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="fullName" class="form-control" aria-describedby="fullNameHelpInline">
                                    </div>
                                    <div class="col-auto">
                                        <span id="fullNameHelpInline" class="form-text">
                                            Please enter your full name
                                        </span>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto">
                                        <label for="form-select" class="col-form-label">Blood Type:</label>
                                    </div>
                                    <select class="form-select w-50 p-3 d-inline m-4" name="form-select" aria-label="Default select example">
                                        <option selected>Select your blood type</option>
                                        <option value="1">A+</option>
                                        <option value="2">B+</option>
                                        <option value="3">AB+</option>
                                        <option value="3">O+</option>
                                        <option value="1">A-</option>
                                        <option value="2">B-</option>
                                        <option value="3">AB-</option>
                                        <option value="3">O-</option>
                                    </select>
                                </div>

                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto">
                                        <label for="form-select" class="col-form-label">Location:</label>
                                    </div>
                                    <select class="form-select w-50 p-3 d-inline m-4" name="form-select" aria-label="Default select example">
                                        <option selected>Select your Location</option>
                                        <option value="1">Latakia</option>
                                        <option value="2">Tartus</option>
                                        <option value="3">Homs</option>
                                        <option value="3">Hamah</option>
                                        <option value="1">Idlib</option>
                                        <option value="2">Aleppo</option>
                                        <option value="3">Al-Raqah</option>
                                        <option value="3">Al-Hasakah</option>
                                        <option value="3">Al-Qameshli</option>
                                        <option value="3">Der el Zor</option>
                                        <option value="3">Damascus</option>
                                        <option value="3">Dara'a</option>
                                        <option value="3">Al-swayda'a</option>
                                        <option value="3">Al-Qunaytra</option>
                                    </select>
                                </div>

                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto ">
                                        <label for="phoneNumber" class="col-form-label">Additional Phone number:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="phoneNumber" class="form-control" aria-describedby="phoneNumberHelpInline">
                                    </div>
                                    <div class="col-auto">
                                        <span id="phoneNumberHelpInline" class="form-text">
                                            Optional
                                        </span>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto ">
                                        <label for="whatsappLink" class="col-form-label">whatsapp Link:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="whatsappLink" class="form-control" aria-describedby="whatsappLinkHelpInline">
                                    </div>
                                    <div class="col-auto">
                                        <span id="whatsappLinkHelpInline" class="form-text">
                                            Optional
                                        </span>
                                    </div>
                                </div>
                                <div class="m-4">
                                    <div class="d-inline">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>