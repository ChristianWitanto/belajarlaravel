<x-layout>

    <div class="container mt-4">

        <div class="card shadow border-0">
            
            <!-- Header -->
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">List Fakultas</h4>

                <a href="/fakultas/create" class="btn btn-light btn-sm">
                    + Tambah Fakultas
                </a>
            </div>

            <!-- Table -->
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th width="5%">No</th>
                                <th>Fakultas</th>
                                <th>Dekan</th>
                                <th width="25%" class="text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($fakultas as $item)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td class="fw-semibold">
                                    {{ $item->nama_fakultas }}
                                </td>

                                <td>
                                    {{ $item->nama_dekan }}
                                </td>

                                <td>

                                    <div class="d-flex gap-2 justify-content-center">

                                        <a href="/fakultas/{{ $item->id }}"
                                           class="btn btn-info btn-sm">
                                            Detail
                                        </a>

                                        <a href="/fakultas/{{ $item->id }}/edit"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="/fakultas/{{ $item->id }}"
                                              method="post"
                                              class="m-0">

                                            @csrf
                                            @method("DELETE")

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin hapus data?')">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-layout>