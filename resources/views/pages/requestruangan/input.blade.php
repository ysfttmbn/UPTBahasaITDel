<x-web-layout title="request">
    <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Request</h4>
    </div>
    <div class="card-body">
        {{-- @If($data->id) --}}
        <form class="needs-validation" novalidate="" action="{{-- {{ route('requestinventory.update', $data->id) }} --}}" method="POST" enctype="multipart/form-data">
            {{-- @method('PATCH')
            @else --}}
        <form class="needs-validation" novalidate="" action="{{-- {{ route('requestinventory.store') }} --}}" method="POST" enctype="multipart/form-data">
        {{-- @endif
            @csrf --}}
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Room</label>
                <select type="select" class="form-control" name="room"id="validationBioBootstrap" required="" value="{{-- {{ $data->room}} --}}">
                    <option>Ruangan 914</option>
                </select>
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Nama Pengguna</label>
                <input type="text" name="nama_pengguna" id="basic-addon-name" class="form-control" placeholder="Your Name" aria-label="Name" aria-describedby="basic-addon-name" required value="{{-- {{ $data->nama_pengguna }} --}}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of use</label>
                <input type="date"class="form-control" name="date_of_use" id="validationBioBootstrap" required=""value="{{-- {{ $data->date_of_use }} --}}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Time End</label>
                <input type="date"class="form-control" name="time_end" id="validationBioBootstrap"   required=""value="{{-- {{ $data->time_end}} --}}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Description</label>
                <textarea class="form-control" name="description" id= "validationBioBootstrap"  required value="{{-- {{ $data->description }} --}}"></textarea>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Request</button>
            <a href="{{ route('requestruangan.index') }}" type="submit" class="btn btn-primary waves-effect waves-float waves-light">cancel</a>
        </form>
    </div>
 </div>
</x-web-layout>