<x-admin-layout>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                action="{{ route('product.update',['id'=> encrypt($product->id)]) }}" enctype="multipart/form-data">
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3"
                              data-kt-image-input="true" style="background-image: url({{asset(config('constant.IMG_DIR.MAIN_IMAGE').'/'.$product->main_image)}})">
                                <!--begin::Preview existing Image-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change Image">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="main_image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Cancel Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="text-muted fs-7">
                                Set the category thumbnail image. Only *.png,
                                *.jpg and *.jpeg image files are accepted
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>High Resolution Images</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3"
                              data-kt-image-input="true" style="background-image: url({{asset(config('constant.IMG_DIR.MAIN_IMAGE').'/'.$product->hri)}})">
                                <!--begin::Preview existing Image-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change Image">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="hri" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Cancel Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Remove Image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="text-muted fs-7">
                                Set High Resolution Images. Only *.png,
                                *.jpg and *.jpeg image files are accepted
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4" data-select2-id="select2-data-132-lw5f">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Product Category</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0" data-select2-id="select2-data-131-gw1q">
                            <select class="form-select mb-2 select2-hidden-accessible" name="category_id" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option"
                                id="kt_ecommerce_add_product_store_template"
                                data-select2-id="select2-data-kt_ecommerce_add_product_store_template" tabindex="-1"
                                aria-hidden="true">
                                <option data-select2-id="select2-data-134-k0fo"></option>
                                @foreach ($CategoryData as $item)
                                    <option value="{{ encrypt($item->id) }}" @if ($product->category_id == $item->id)
                                        selected
                                    @else
                                        
                                    @endif
                                        data-select2-id="select2-data-135-{{ $item->cat_name }}">{{ $item->cat_name }}
                                    </option>
                                @endforeach

                            </select>
                            <div class="text-muted fs-7">Select a product
                                template</div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                           <div class="form-check form-switch">
                                    <input class="form-check-input " type="checkbox" role="switch" name="status" @if ($product->status ==1)
                                        checked                                      
                                    @endif
                                        id="flexSwitchCheckDefault" />
                                </div>
                            <div class="text-muted fs-7 mt-4">
                                Set the category status.
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Add Our Top Medicine</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                           <div class="form-check form-switch">
                                    <input class="form-check-input " type="checkbox" role="switch" name="otm" @if ($product->otm ==1)
                                        checked                                      
                                    @endif
                                        id="flexSwitchCheckDefault" />
                                </div>
                            <div class="text-muted fs-7 mt-4">
                               Add product to (Our Top Medicine) section
                            </div>
                        </div>
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Product Title <small>(Name)</small></label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control mb-2"
                                    placeholder="Product name" value="{{$product->title}}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">
                                    A category name is required and recommended
                                    to be unique.
                                </div>
                                <!--end::Description-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-10 fv-row fv-plugins-icon-container row">
                                <div class="col-md-4">
                                    <!--begin::Label-->
                                    <label class="required form-label">Other image</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file" name="other_images[]" class="form-control mb-2"
                                        placeholder="Product name" multiple  value="{{$product->other_images}}"/>
                                </div>

                            <div class="col-md-12">
                                <div class="row">
                                    @if (!empty($product->other_images))
                                         @foreach (json_decode($product->other_images, true) as $item)
                                    <div class="col-md-4 mb-4" id="image-{{$loop->index}}">
                                        <a class="d-block overlay" data-fslightbox="lightbox-basic" href="#">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" 
                                                style="background-image:url({{asset(config('constant.IMG_DIR.OTHER_IMAGE').'/'.$item)}});background-size:100% ;"> 
                                            </div> 
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                <i class="bi bi-trash-fill text-danger fs-3x delete-image" data-image="{{$item}}" data-index="{{$loop->index}}" data-id="{{$product->id}}"></i>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                   
                                </div>
                            </div>

                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">
                                    A category name is required and recommended
                                    to be unique.
                                </div>

                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Description</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea id="kt_docs_tinymce_basic" name="description" class="tox-target">
                                    {!!$product->description!!}
                            </textarea>
                                <div class="text-muted fs-7">
                                    Set a description to the category for better
                                    visibility.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('product.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
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
