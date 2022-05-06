<x-web-layout title="request">
    <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">Request</h4>
    </div>
    @if(!Auth::user()->isAdmin)
    <div class="card-body">
        @If($data->id)
        <form class="needs-validation" novalidate="" action="{{ route('requestinventory.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @else
        <form class="needs-validation" novalidate="" action="{{ route('requestinventory.store') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Inventori</label>
                <select type="select" class="form-control" name="inventory"id="validationBioBootstrap" required="" value="{{ $data->room}}">
                    <option>Pilih Inventori</option>
                    @foreach($inventories as $item)
                    <option value="{{ $item->id }}" {{ $item->id==$data->inventoy_id?"selected":"" }} >{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Date of use</label>
                <input type="date"class="form-control" name="date_of_use" id="validationBioBootstrap" name="Tambahannoucements"required=""value="{{ $data->date_of_use }}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Payback Time</label>
                <input type="date"class="form-control" name="date_of_end"id="validationBioBootstrap" name="Tambahannoucements"  required=""value="{{ $data->payback_time}}">
            </div>
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Description</label>
                <textarea class="form-control" name="description"id="validationBioBootstrap" name="Tambahannoucements" required value="{{ $data->description }}"></textarea>
            </div><br>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Request</button>
            <a href="{{ route('requestinventory.index') }}" type="submit" class="btn btn-primary waves-effect waves-float waves-light">cancel</a>
        </form>
    </div>
    @else
    <div class="card-body">
        <form class="needs-validation" action="{{ route('requestinventory.verification', $data->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-1">
                <label class="d-block form-label" for="validationBioBootstrap">Status</label>
                <select type="select" class="form-control" name="status" id="validationBioBootstrap">
                    <option>Pilih Status</option>
                    <option value="2">Setujui</option>
                    <option value="3">Tolak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Request</button>
            <a href="{{ route('requestinventory.index') }}" type="submit" class="btn btn-primary waves-effect waves-float waves-light">cancel</a>
        </form>
    </div>
    @endif
 </div>
</x-web-layout>