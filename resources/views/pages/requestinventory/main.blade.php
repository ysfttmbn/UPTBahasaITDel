<x-web-layout title="RequestInventory">
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                          <div class="d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"><div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                            <div><h4 class="mb-0">Request Inventory</h4></div>
                          </div>
                          <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">
                            <div class="dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">
                              <div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
                            </div>
                            <div class="dt-buttons d-inline-flex mt-50">
                              @if(!Auth::User()->isAdmin)
                                <a class="dt-button add-new btn btn-primary" href="{{ route('requestinventory.create') }}">
                                    <span>Request</span> 
                                </a>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      @if(!Auth::user()->isAdmin)
                      <table class="user-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead class="table-light">
                            <tr role="row">
                              <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 54.1125px; display: none;" aria-label=""></th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Name</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Date of use</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Date of end</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Status</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 145px;" aria-label="Plan: activate to sort column ascending">Description</th>
                              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.688px;" aria-label="Actions">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($requestinventory as $item)
                          <tr class="odd">
                          <td valign="top" class="dataTables_empty">{{ $item->inventory->name }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->date_of_use }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->time_end }}</td>
                          @php
                          $status = '';
                           if ($item->status==1) {
                             $status = 'Pending';
                           } elseif ($item->status==2) {
                             $status = 'Disetujui';
                           } elseif ($item->status==3) {
                             $status = 'Ditolak';
                           }
                          @endphp
                          <td valign="top" class="dataTables_empty">{{ $status }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->description }}</td>
                          <td>
                          <div class="d-inline-flex">
                            @if(Auth::user()->id == $item->user_id)
                                <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1">
                                        </circle><circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a href="{{ route('requestinventory.edit', $item->id) }}" class="dropdown-item delete-record">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>Edit
                                    </a>
                                    <form action="{{ route('requestinventory.destroy', $item->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="dropdown-item delete-record">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>Delete
                                    </button>
                                    </form> 
                                </div>
                                @endif
                              </div>
                            </td>
                          </tr> 
                          @endforeach                         
                      </tbody>
                    </table>
                    @else
                      <table class="user-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead class="table-light">
                            <tr role="row">
                              <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 54.1125px; display: none;" aria-label=""></th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Nama Inventori</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Waktu Digunakan</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Waktu Pengembalian</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183.475px;" aria-label="Billing: activate to sort column ascending">Status</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 145px;" aria-label="Plan: activate to sort column ascending">Deskripsi</th>
                              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 185.688px;" aria-label="Actions">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($requestinventory as $item)
                        <tr class="odd">
                          <td valign="top" class="dataTables_empty">{{ $item->inventory->name }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->date_of_use }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->time_end }}</td>
                          @php
                          $status = '';
                           if ($item->status==1) {
                             $status = 'Pending';
                           } elseif ($item->status==2) {
                             $status = 'Disetujui';
                           } elseif ($item->status==3) {
                             $status = 'Ditolak';
                           }
                          @endphp
                          <td valign="top" class="dataTables_empty">{{ $status }}</td>
                          <td valign="top" class="dataTables_empty">{{ $item->description }}</td>
                          <td>
                            @if ($item->status == 1)
                            <a href="{{ route('requestinventory.edit', $item->id) }}" class="dropdown-item delete-record">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                              </svg>Edit
                            </a>
                            @endif
                          </td>
                        </tr> 
                        @endforeach                         
                    </tbody>
                  </table>
                  @endif
                  {{ $requestinventory->links() }}
                      <div class="d-flex justify-content-between mx-2 row mb-1"></div>
                    </div>
                  </div>
                    </div>
                </div>
            </section>
        </div>
      </div>    
    </div>
    </section>
    <!--/ List DataTable -->
  </section>
  <!-- Dashboard Analytics end -->
  
          </div>
        </div>
      </div>
  </x-web-layout>