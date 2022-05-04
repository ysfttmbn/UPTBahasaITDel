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
                            <h4 class="card-title">Percakapan</h4>
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
                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
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
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avatar img" width="50" height="50">
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
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="34" height="34">
                                        </div>
                                        <div class="profile-user-info w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-0">{{ $reply->user->username }}</h6>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-body font-medium-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    <span class="align-middle text-muted">34</span>
                                                </a>
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
                                            <label class="form-label" for="label-textarea">Add Comment</label>
                                            <textarea name="message" class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
                                        </fieldset>
                                        <!--/ comment box -->
                                        <button type="sumbit" class="btn btn-sm btn-primary waves-effect waves-float waves-light">Post Comment</button>
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