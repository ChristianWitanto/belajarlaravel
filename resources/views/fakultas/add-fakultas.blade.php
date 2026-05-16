<x-layout>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow border-0">

                    <!-- Header -->
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">
                            Tambah Fakultas
                        </h4>
                    </div>

                    <!-- Form -->
                    <div class="card-body p-4">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/fakultas" method="POST">
                            @csrf

                            <!-- Nama Fakultas -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Nama Fakultas
                                </label>

                                <input
                                    name="nama_fakultas"
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukkan nama fakultas"
                                    >
                            </div>


                            <!-- Nama Dekan -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Dekan
                                </label>

                                <input
                                    name="nama_dekan"
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukkan nama dekan"
                                    >
                            </div>


                            <!-- Button -->
                            <div class="d-flex justify-content-between">

                                <a href="/fakultas"
                                   class="btn btn-outline-secondary">
                                    Kembali
                                </a>

                                <button type="submit"
                                        class="btn btn-primary px-4">
                                    Simpan
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>