<x-layout>
    <h1>Edit Fakultas</h1>
    @csrf
    @method("PUT")
    <form action="/fakultas" method="POST">
        <div class="form-group">
            <input
            name="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            value="{{$fakultas->nama_fakultas}}">
        </div>
        <div class="form-group">
            <input
            name="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            value="{{$fakultas->nama_fakultas}}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>    
</x-layout>