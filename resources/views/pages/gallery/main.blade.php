<x-web-layout title="Galery">
    <!-- BEGIN: Content-->
   <div class="app-content content ">
       <div class="content-body">
           <div id="user-profile">
               <!-- profile header -->
               <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">
                <div class="me-1">
                </div>
                <div class="dt-buttons d-inline-flex mt-50">
                    @if(Auth::User()->isAdmin)
                    <a class="dt-button add-new btn btn-primary waves-effect waves-float waves-light" href="{{ route('gallery.create') }}">
                        <span>Add Activity</span> 
                    </a>
                    @endif
                </div>
               </div><br>
               <div class="row">
                   @foreach ($galleries as $item)
                    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('file/'.$item->images) }}" alt="Card image cap" style="height:170px">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $item->title }}</h4>
                                <p class="card-text">
                                    {{ $item->description }}
                                </p>
                                <div class="dt-buttons d-inline-flex mt-50">
                                    @if(Auth::User()->isAdmin)
                                    <a class="btn btn-outline-primary waves-effect center-block" href="{{ route('gallery.edit', $item->id) }}">
                                        <span> Edit </span> 
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
       </div>
   </div>
    <!-- /User Card -->
</x-web-layout>