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
                            <form action="/addUserDetails" method="POST">
                                @csrf
                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto ">
                                        <label for="fullName" class="col-form-label">Your Fullname:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="full_name" id="fullName" class="form-control" aria-describedby="fullNameHelpInline">
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
                                    <select class="form-select w-50 p-3 d-inline m-4" name="blood_type" aria-label="Default select example">
                                        <option selected>Select your blood type</option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>

                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto">
                                        <label for="form-select" class="col-form-label">Location:</label>
                                    </div>
                                    <select class="form-select w-50 p-3 d-inline m-4" name="location" aria-label="Default select example">
                                        <option selected>Select your Location</option>
                                        <option value="Latakia">Latakia</option>
                                        <option value="Tartus">Tartus</option>
                                        <option value="Homs">Homs</option>
                                        <option value="Hamah">Hamah</option>
                                        <option value="Idlib">Idlib</option>
                                        <option value="Aleppo">Aleppo</option>
                                        <option value="Al-Raqah">Al-Raqah</option>
                                        <option value="Al-Hasakah">Al-Hasakah</option>
                                        <option value="Al-Qameshli">Al-Qameshli</option>
                                        <option value="Der el-Zor">Der el-Zor</option>
                                        <option value="Damascus">Damascus</option>
                                        <option value="Dara'a">Dara'a</option>
                                        <option value="Al-swayda'a">Al-swayda'a</option>
                                        <option value="Al-Qunaytra">Al-Qunaytra</option>
                                    </select>
                                </div>

                                <div class="row g-3 align-items-center m-2">
                                    <div class="col-auto ">
                                        <label for="phoneNumber" class="col-form-label">Additional Phone number:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="additional_phone_number" id="phoneNumber" class="form-control" aria-describedby="phoneNumberHelpInline">
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
                                        <input type="text" name="whatsapp_link" id=" whatsappLink" class="form-control" aria-describedby="whatsappLinkHelpInline">
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