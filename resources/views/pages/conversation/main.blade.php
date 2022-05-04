<x-web-layout title="Percakapan">
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Topik Percakapan</h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('conversation.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="fname-icon">Pesan</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-merge">
                                                    
                                                    <textarea name="message" class="form-control" aria-label="With textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Kirim</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Percakapan</h4>
                        </div>
                        <div class="card-body">
                            @foreach($conversation as $data)
                                <div class="card-body">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <!-- avatar -->
                                        <div class="avatar me-1">
                                            <img src="img/User.png" alt="avatar img" width="50" height="50">
                                        </div>
                                        <!--/ avatar -->
                                        <div class="profile-user-info">
                                            <h6 class="mb-0">{{ $data->user->username }}</h6>
                                            <small class="text-muted">{{ \App\Helpers\Helper::convertDate($data->created_at) }}</small>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        {{$data->message}}
                                    </p>
                                    <!-- like share -->
                                    @php
                                     $replies = \App\Models\Conversation::where('parent_conversation_id', $data->id)->get(); 
                                    @endphp
                                    <!-- comments -->
                                    @foreach ($replies as $reply)
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="avatar mt-25 me-75">
                                            <img src="img/User.png" alt="Avatar" width="34" height="34">
                                        </div>
                                        <div class="profile-user-info w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-0">{{ $reply->user->username }}</h6>
                                            </div>
                                            <small>{{ $reply->message }}</small>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--/ comments -->

                                    <!-- comment box -->
                                    <form action="{{ route('conversation.reply', $data->id) }}" method="POST">
                                        @csrf
                                        <fieldset class="mb-75">
                                            <label class="form-label" for="label-textarea">Balas</label>
                                            <textarea name="message" class="form-control" id="label-textarea" rows="3" placeholder="Add message"></textarea>
                                        </fieldset>
                                        <!--/ comment box -->
                                        <button type="sumbit" class="btn btn-sm btn-primary waves-effect waves-float waves-light">Kirim</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</x-web-layout>