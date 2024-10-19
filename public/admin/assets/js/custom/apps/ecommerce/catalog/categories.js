"use strict";
var KTAppEcommerceCategories = (function () {
    var t,
        e,
        n = () => {
            t.querySelectorAll(
                '[data-kt-ecommerce-category-filter="delete_row"]'
            ).forEach((t) => {
                t.addEventListener("click", function (event) {
                    event.preventDefault();
                    const row = event.target.closest("tr");
                    const categoryName = row.querySelector(
                        '[data-kt-ecommerce-category-filter="category_name"]'
                    ).innerText;
                    const deleteUrl = event.target.getAttribute("data-route"); // Get the data-route attribute

                    Swal.fire({
                        text:
                            "Are you sure you want to delete " +
                            categoryName +
                            "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton:
                                "btn fw-bold btn-active-light-primary",
                        },
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            // Redirect to the route specified in data-route
                            window.location.href = deleteUrl;
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            Swal.fire({
                                text: categoryName + " was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                },
                            });
                        }
                    });
                });
            });
        };



    return {
        init: function () {
            (t = document.querySelector("#kt_ecommerce_category_table")) &&
                ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    columnDefs: [
                        { orderable: !1, targets: 0 },
                        { orderable: !1, targets: 3 },
                    ],
                })).on("draw", function () {
                    n();
                }),
                document
                    .querySelector(
                        '[data-kt-ecommerce-category-filter="search"]'
                    )
                    .addEventListener("keyup", function (t) {
                        e.search(t.target.value).draw();
                    }),
                n());
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceCategories.init();
});
