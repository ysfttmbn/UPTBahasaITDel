<x-web-layout title="RequestInventory">
    <div class="app-content content ">
    <div class="content-body">
        <div class="card">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h6 class="mb-0">Request Inventory</h6>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mx-0 row">
                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>Show 
                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                <option value="7">7</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select> entries
                        </label>
                    </div>
                    <div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>Search:
                          <input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0">
                        </label>
                      </div>
                    </div>
                    @if(!Auth::guest() && Auth::user()->isAdmin)
                    <div class="dt-buttons d-inline-flex mt-50">
                      <a class="dt-button add-new btn btn-primary" href="{{ route('annoucements.create') }}">
                          <span>Add Announcement</span> 
                      </a>
                    </div>
                    @endif
                </div>
            </div>
            <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
                <thead>
                    <tr role="row">
                        <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 34px; display: none;" aria-label=""></th>
                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 35px;" data-col="1" aria-label="">
                            <div class="form-check"> 
                                <input class="form-check-input" type="checkbox" value="" id="checkboxSelectAll">
                                <label class="form-check-label" for="checkboxSelectAll"></label>
                            </div>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 115px;" aria-label="Name: activate to sort column ascending">Name
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 118px;" aria-label="Email: activate to sort column ascending">Email
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Date: activate to sort column ascending">Date
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 137px;" aria-label="Salary: activate to sort column ascending">Salary</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 133px;" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 142px;" aria-label="Actions">Actions</th>
                    </tr>
                </thead>
            <tbody>
                <tr class="odd">
                    <td valign="top" colspan="7" class="dataTables_empty">Loading...
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between mx-0 row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a>
                                </li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-web-layout>