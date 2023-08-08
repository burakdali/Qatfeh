<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seeking For blood') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="m-5 w-75 float-start">
                        <div class="card text-center">
                            <div class="card-header">
                                Add your criteria
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Wanted Blood Type and location</b></h5>
                                <br><br>
                                <form action="/search-for-donators" method="post">
                                    @csrf
                                    <div class="row g-3 align-items-center m-2">

                                        <div class="col-auto">
                                            <label for="form-select" class="col-form-label">Blood Type:</label>
                                        </div>
                                        <select class="form-select w-50 p-3 d-inline m-4" name="blood_type" aria-label="Default select example">
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
                                    <input type="submit" name="submit" id="" title="Search">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>