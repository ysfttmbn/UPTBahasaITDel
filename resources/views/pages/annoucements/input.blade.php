<x-auth-layout title="annoucements">
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Add annoucements</h4>
    </div>
    <div class="card-body">
        @If($data->id)
        <form class="needs-validation" novalidate="" action="{{ route('annoucements.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @else
        <form class="needs-validation" novalidate="" action="{{ route('annoucements.store') }}" method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="mb-1">
                <label class="form-label" for="basic-addon-name">Judul annoucements</label>
                <input type="text" name="title" id="basic-addon-name" class="form-control" placeholder="Judul" aria-label="Name" aria-describedby="basic-addon-name" required value="{{ $data->title }}">
            </div>
            <div class="mb-1">
                <label for="customFile1" class="form-label">Tambahkan File</label>
                <input type="file"class="form-control" name="file" type="file" id="customFile1" required value="{{ $data->file }}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Deskripsi</label>
                <textarea class="form-control" name="description"id="validationBioBootstrap" name="Tambahannoucements" required value="{{ $data->description }}"></textarea>
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of use</label>
                <input type="date"class="form-control" name="date_of_use" id="validationBioBootstrap" name="Tambahannoucements"required=""value="{{ $data->date_of_use }}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of end</label>
                <input type="date"class="form-control" name="date_of_end"id="validationBioBootstrap" name="Tambahannoucements"  required=""value="{{ $data->date_of_end}}">
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">save changes</button>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">cancel</button>
        </form>
    </div>
 </div>
</x-auth-layout>