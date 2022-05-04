<x-web-layout title="activity">
    <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Ativity</h4>
    </div>
    <div class="card-body">
        @If($data->id)
        <form class="needs-validation" novalidate="" action="{{ route('gallery.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @else
        <form class="needs-validation" novalidate="" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="mb-1">
                <label class="form-label" for="basic-addon-name">title activity</label>
                <input type="text" name="title" id="basic-addon-name" class="form-control" placeholder="Judul" aria-label="Name" aria-describedby="basic-addon-name" required value="{{ $data->title }}">
            </div>
            <div class="mb-1">
                <label for="customFile1" class="form-label">add images</label>
                <input type="file" class="form-control" name="images" id="customFile1" required value="{{ $data->file }}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">description</label>
                <textarea class="form-control" name="description"id="validationBioBootstrap" name="Description" required value="{{ $data->description }}"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">save changes</button>
            <a href="{{ route('gallery.index') }}" class="btn btn-primary waves-effect waves-float waves-light">cancel</a>
        </form>
    </div>
 </div>
</x-web-layout>