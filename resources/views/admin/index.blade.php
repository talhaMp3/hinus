<x-admin-layout>



					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						{{-- <div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
									<!--begin::Separator-->
									<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
									<!--end::Separator-->
									<!--begin::Description-->
									<span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span>
									<!--end::Description--></h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->
									<div class="m-0">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Filter</a>
										<!--end::Menu toggle-->
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244763d93048">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244763d93048" data-allow-clear="true">
															<option></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
									</div>
									<!--end::Filter menu-->
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div> --}}
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
							
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-12">

							
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-12">
										<!--begin::Tables Widget 9-->
										<div class="card card-xl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
													<span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
												</h3>
												<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
													<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->New Member</a>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
														<!--begin::Table head-->
														<thead>
															<tr class="fw-bolder text-muted">
																<th class="w-25px">
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
																	</div>
																</th>
																<th class="min-w-200px">Authors</th>
																<th class="min-w-150px">Company</th>
																<th class="min-w-150px">Progress</th>
																<th class="min-w-100px text-end">Actions</th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-14.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																		</div>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
																	<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
																</td>
																<td class="text-end">
																	<div class="d-flex flex-column w-100 me-2">
																		<div class="d-flex flex-stack mb-2">
																			<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																		</div>
																		<div class="progress h-6px w-100">
																			<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																					<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																					<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-2.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
																		</div>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
																	<span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
																</td>
																<td class="text-end">
																	<div class="d-flex flex-column w-100 me-2">
																		<div class="d-flex flex-stack mb-2">
																			<span class="text-muted me-2 fs-7 fw-bold">70%</span>
																		</div>
																		<div class="progress h-6px w-100">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																					<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																					<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-5.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
																		</div>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																	<span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
																</td>
																<td class="text-end">
																	<div class="d-flex flex-column w-100 me-2">
																		<div class="d-flex flex-stack mb-2">
																			<span class="text-muted me-2 fs-7 fw-bold">60%</span>
																		</div>
																		<div class="progress h-6px w-100">
																			<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																					<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																					<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-20.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
																		</div>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">The Hill</a>
																	<span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
																</td>
																<td class="text-end">
																	<div class="d-flex flex-column w-100 me-2">
																		<div class="d-flex flex-stack mb-2">
																			<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																		</div>
																		<div class="progress h-6px w-100">
																			<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																					<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																					<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-45px me-5">
																			<img src="assets/media/avatars/300-23.jpg" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>
																			<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																		</div>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																	<span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
																</td>
																<td class="text-end">
																	<div class="d-flex flex-column w-100 me-2">
																		<div class="d-flex flex-stack mb-2">
																			<span class="text-muted me-2 fs-7 fw-bold">90%</span>
																		</div>
																		<div class="progress h-6px w-100">
																			<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex justify-content-end flex-shrink-0">
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																					<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																		<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																					<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																					<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Table container-->
											</div>
											<!--begin::Body-->
										</div>
										<!--end::Tables Widget 9-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-8">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List Widget 2-->
										<div class="card card-xl-stretch mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title fw-bolder text-dark">Authors</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 2-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mb-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Ticket</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Customer</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
															<!--begin::Menu item-->
															<a href="#" class="menu-link px-3">
																<span class="menu-title">New Group</span>
																<span class="menu-arrow"></span>
															</a>
															<!--end::Menu item-->
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mt-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
													</div>
													<!--end::Avatar-->
													<!--begin::Text-->
													<div class="flex-grow-1">
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
														<span class="text-muted d-block fw-bold">Project Manager</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img src="assets/media/avatars/300-5.jpg" class="" alt="" />
													</div>
													<!--end::Avatar-->
													<!--begin::Text-->
													<div class="flex-grow-1">
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
														<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
													</div>
													<!--end::Avatar-->
													<!--begin::Text-->
													<div class="flex-grow-1">
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
														<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
													</div>
													<!--end::Avatar-->
													<!--begin::Text-->
													<div class="flex-grow-1">
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
														<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img src="assets/media/avatars/300-23.jpg" class="" alt="" />
													</div>
													<!--end::Avatar-->
													<!--begin::Text-->
													<div class="flex-grow-1">
														<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
														<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 2-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List Widget 6-->
										<div class="card card-xl-stretch mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title fw-bolder text-dark">Notifications</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-warning me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-warning py-1">+28%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-success me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-success py-1">+50%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-danger me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
														<span class="text-muted fw-bold d-block">Due in 5 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-danger py-1">-27%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-info rounded p-5">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-info me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
														<span class="text-muted fw-bold d-block">Due in 7 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-info py-1">+8%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 6-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List Widget 4-->
										<div class="card card-xl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Trends</span>
													<span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex align-items-sm-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label">
															<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<div class="flex-grow-1 me-2">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
															<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
														</div>
														<span class="badge badge-light fw-bolder my-2">+82$</span>
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-sm-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label">
															<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<div class="flex-grow-1 me-2">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
															<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
														</div>
														<span class="badge badge-light fw-bolder my-2">+280$</span>
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-sm-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label">
															<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<div class="flex-grow-1 me-2">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
															<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
														</div>
														<span class="badge badge-light fw-bolder my-2">+4500$</span>
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-sm-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label">
															<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<div class="flex-grow-1 me-2">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
															<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
														</div>
														<span class="badge badge-light fw-bolder my-2">+686$</span>
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-sm-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label">
															<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<div class="flex-grow-1 me-2">
															<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
															<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
														</div>
														<span class="badge badge-light fw-bolder my-2">+726$</span>
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 4-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-8">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::Mixed Widget 5-->
										<div class="card card-xxl-stretch mb-xl-8">
											<!--begin::Beader-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Trends</span>
													<span class="text-muted fw-bold fs-7">Latest trends</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex flex-column">
												<!--begin::Chart-->
												<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
												<!--end::Chart-->
												<!--begin::Items-->
												<div class="mt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light">
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
																<div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light">
																	<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
																<div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light">
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="py-1">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
																<div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
														<!--end::Label-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 5-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-12">
										<!--begin::Tables Widget 5-->
										<div class="card card-xxl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
													<span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav">
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-bold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">React, HTML</td>
																		<td class="text-end">
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block">Most Successful</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Python, MySQL</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																			<span class="text-muted fw-bold d-block">Awesome Users</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																		<td class="text-end">
																			<span class="badge badge-light-primary">Success</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																			<span class="text-muted fw-bold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																			<span class="text-muted fw-bold d-block">Best Customers</span>
																		</td>
																		<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tables Widget 5-->
									</div>
									<!--end::Col-->
								</div>
								
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>


				</x-admin-layout>