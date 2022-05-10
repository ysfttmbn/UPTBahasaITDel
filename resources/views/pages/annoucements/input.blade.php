<x-web-layout title="annoucements">
    <div class="app-content content ">
    <div class="content-overlay"></div>
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
                <label class="form-label" for="basic-addon-name">Announcements Title</label>
                <input type="text" name="title" id="basic-addon-name" class="form-control @error('title')is-invalid @enderror" placeholder="Judul" aria-label="Name" aria-describedby="basic-addon-name" required value="{{ $data->title }} ">
                @error('title')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="customFile1" class="form-label">Add Files</label>
                <input type="file"class="form-control @error('file')is-invalid @enderror" name="file" type="file" id="customFile1" required value="{{ $data->file }}">
                @error('file')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Description</label>
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" id="validationBioBootstrap" required value="{{ $data->description }}"></textarea>
                @error('description')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of use</label>
                <input type="date" class="form-control @error('date_of_use')is-invalid @enderror" name="date_of_use" id="validationBioBootstrap" required=""value="{{ $data->date_of_use }}">
                @error('date_of_use')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of end</label>
                <input type="date"class="form-control @error('date_of_end')is-invalid @enderror" name="date_of_end"id="validationBioBootstrap"   required=""value="{{ $data->date_of_end}}">
                @error('date_of_end')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
            <a href="{{ route('dashboard') }}" type="submit" class="btn btn-primary waves-effect waves-float waves-light">Cancel</a>
        </form>
    </div>
 </div>
</x-web-layout>