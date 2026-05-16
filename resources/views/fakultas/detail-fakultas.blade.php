<x-layout>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow border-0">

                    <!-- Header -->
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">
                            Detail Fakultas
                        </h4>
                    </div>


                    <!-- Content -->
                    <div class="card-body p-4">

                        <table class="table table-borderless align-middle mb-4">

                            <tbody>

                                <tr>
                                    <td class="fw-semibold" width="35%">
                                        Nama Fakultas
                                    </td>

                                    <td width="5%">:</td>

                                    <td>
                                        {{ $fakultas->nama_fakultas }}
                                    </td>
                                </tr>


                                <tr>
                                    <td class="fw-semibold">
                                        Nama Dekan
                                    </td>

                                    <td>:</td>

                                    <td>
                                        {{ $fakultas->nama_dekan }}
                                    </td>
                                </tr>

                            </tbody>

                        </table>


                        <!-- Button -->
                        <div class="text-end">

                            <a href="/fakultas"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>