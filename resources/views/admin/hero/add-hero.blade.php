<x-admin-layout>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                action="{{ route('hero.store') }}" enctype="multipart/form-data">
                @csrf
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Thumbnail</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3"
                                data-kt-image-input="true" style="background-image: url({{ asset('admin/assets/media/svg/files/blank-image.svg'); }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change avatar">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                                
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">
                                Set the category thumbnail image. Only *.png,
                                *.jpg and *.jpeg image files are accepted
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                        
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            {{--
                            <div class="form-select mb-2 select2-hidden-accessible">
                                --}}
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="status"
                                        id="flexSwitchCheckDefault" />
                                </div>
                                {{--
                            </div>
                            --}}

                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7 mt-4">
                                Set the category status.
                            </div>

                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Title</label>
                                <input type="text" name="title" class="form-control mb-2" placeholder="slider Title"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container row">
                               <div class="col-md-4">
                                <label class="required form-label">Pre Title</label>
                                <input type="text" name="pretitle" class="form-control mb-2" placeholder="Slider Pretitle"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                               <div class="col-md-4">
                                <label class="required form-label">Link</label>
                                <input type="text" name="link" class="form-control mb-2" placeholder="button link"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                               <div class="col-md-4">
                                <label class="required form-label">Icon Image</label>
                                <input type="file" name="mini_image[]" class="form-control mb-2"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            </div>
                              <div class="mb-5 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Offer</label>
                                <input type="text" name="offer" class="form-control mb-2"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div>
                                <label class="form-label">Description</label>
                            {{-- <textarea id="kt_docs_tinymce_basic" name="description" class="tox-target">
                            </textarea> --}}
                             <input type="text" name="description" class="form-control mb-2"/>
                                <div class="text-muted fs-7">
                                    Set a description to the Hero Slider for better
                                    visibility.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('hero.index')}}"
                            id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
                <div></div>
            </form>
        </div>
        <!--end::Container-->
    </div>
</x-admin-layout>