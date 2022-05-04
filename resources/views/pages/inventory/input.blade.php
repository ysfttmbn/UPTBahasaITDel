<x-web-layout title="inventory">
    <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Inventory</h4>
    </div>
    <div class="card-body">
        @If($data->id)
        <form class="needs-validation" novalidate="" action="{{ route('inventory.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @else
        <form class="needs-validation" novalidate="" action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="mb-1">
                <label class="form-label" for="basic-addon-name">Nama Inventori</label>
                <input type="text" name="name" id="basic-addon-name" class="form-control" placeholder="Nama Inventori" aria-label="Name" aria-describedby="basic-addon-name" required value="{{ $data->title }}">
            </div>
           <div class="mb-1">
                <label for="customFile1" class="form-label">Tambahkan Gambar</label>
                <input type="file" class="form-control" name="images" id="customFile1" required value="{{ $data->file }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Tambah</button>
            <a href="{{ route('inventory.index') }}" type="submit" class="btn btn-primary waves-effect waves-float waves-light">cancel</a>
        </form>
    </div>
 </div>
</x-web-layout>