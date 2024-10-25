<x-admin-layout>

     <div id="kt_content_container" class="container-xxl">
        <!--begin::Category-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-category-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search Category">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
       
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_ecommerce_category_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting" rowspan="1" colspan="1"
                                        aria-label="" style="width: 29.25px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                           #
                                        </div>
                                    </th>
                                    <th class="min-w-250px sorting" tabindex="0"
                                        aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                        aria-label="Category: activate to sort column ascending"
                                        style="width: 801.453px;">Name</th>
                                    <th class="min-w-150px sorting sorting_desc" tabindex="0"
                                        aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                        aria-label="Category Type: activate to sort column ascending"
                                        style="width: 202.219px;" aria-sort="descending">Email</th>
                                    <th class="min-w-150px sorting sorting_desc" tabindex="0"
                                        aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                        aria-label="Category Type: activate to sort column ascending"
                                        style="width: 202.219px;" aria-sort="descending">Phone</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 132.828px;">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

						@foreach ($contact as $item)

                                <!--end::Table row-->
                                <tr class="@if ($loop->odd)odd @else even @endif">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                          {{$loop->iteration}}
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Category=-->
                                    <td>
                                        <div class="d-flex">
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                                    data-kt-ecommerce-category-filter="category_name">{{$item->name}}</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">{{ $item->created_at->diffForHumans() }}</span>

                                            </div>
                                        </div>
                                  
                                        <div class="d-flex d-none">
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                                    data-kt-ecommerce-category-filter="subject">{{$item->subject}}</a>
                                              

                                            </div>
                                        </div>
                                    
                                        <div class="d-flex d-none">
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                                    data-kt-ecommerce-category-filter="message">{{$item->message}}</a>
                                                  

                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category=-->
                                    <!--begin::Type=-->
                                    <td class="sorting_1">
                                        
                                        <a href="mailto:{{$item->email}}" class="fw-bold text-muted d-block fs-7">{{$item->email}}</a>
										
                                        <!--end::Badges-->
                                    </td>
                                    <td class="sorting_1">
                                        <a href="tel:{{$item->phonenumber}}" class="fw-bold text-muted d-block fs-7">{{$item->phonenumber}}</a>
                                    </td>
                                    <!--end::Type=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 viewbtn">view</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{route('contact.destroy',['id'=>encrypt($item->id)])}}" class="menu-link px-3"
                                                    data-kt-ecommerce-category-filter="delete_row" data-route="{{route('contact.destroy',['id'=>encrypt($item->id)])}}">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
						@endforeach

                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Category-->
    </div>
    <!-- Begin Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Contact Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Modal Body -->
        <div class="mb-3">
          <label for="modalName" class="form-label">Name</label>
          <input type="text" class="form-control" id="modalName" readonly>
        </div>
        <div class="mb-3">
          <label for="modalEmail" class="form-label">Email</label>
          <input type="text" class="form-control" id="modalEmail" readonly>
        </div>
        <div class="mb-3">
          <label for="modalPhone" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="modalPhone" readonly>
        </div>
        <div class="mb-3">
          <label for="modalSubject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="modalSubject" readonly>
        </div>
        <div class="mb-3">
          <label for="modalMessage" class="form-label">Message</label>
          <textarea class="form-control" id="modalMessage" rows="3" readonly></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
</x-admin-layout>
<script>
    $(document).ready(function() {
    // Attach event listeners to all buttons with the class 'viewbtn'
    $('.viewbtn').on('click', function(e) {
        e.preventDefault();
        // Fetch the data from the row
        let row = $(this).closest('tr');
        let name = row.find('a[data-kt-ecommerce-category-filter="category_name"]').text();
        let subject = row.find('a[data-kt-ecommerce-category-filter="subject"]').text();
        let message = row.find('a[data-kt-ecommerce-category-filter="message"]').text();
        let email = row.find('a[href^="mailto"]').text();
        let phone = row.find('a[href^="tel"]').text();



        // Set the modal values
        $('#modalName').val(name);
        $('#modalEmail').val(email);
        $('#modalPhone').val(phone);
        $('#modalSubject').val(subject);
        $('#modalMessage').val(message);

        // Show the modal
        $('#viewModal').modal('show');
    });
});

</script>
