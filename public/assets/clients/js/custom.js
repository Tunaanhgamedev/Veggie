$(document).ready(function () {
    /*************************************
     *  PAGES LOGIN AND REGISTER
     *************************************/

    // Validate register form submission
    $("#register-form").submit(function (e) {
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();
        let confirmPassword = $('input[name="confirmPassword"]').val();
        let checkbox1 = $('input[name="checkbox1"]').is(":checked");
        let checkbox2 = $('input[name="checkbox2"]').is(":checked");

        let errorMessages = "";

        if (name.length < 3) {
            errorMessages += "Họ tên phải có ít nhất 3 ký tự.\n";
        }

        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            errorMessages += "Địa chỉ email không hợp lệ.\n";
        }

        if (password.length < 6) {
            errorMessages += "Mật khẩu phải có ít nhất 6 ký tự.\n";
        }

        if (password != confirmPassword) {
            errorMessages += "Mật khẩu và xác nhận mật khẩu không khớp.\n";
        }

        if (!checkbox1 || !checkbox2) {
            errorMessages += "Bạn phải đồng ý với các điều khoản.\n";
        }

        if (errorMessages != "") {
            toastr.error(errorMessages, "Lỗi đăng ký");

            e.preventDefault();
        }
    });

    // Validate login form submission
    $("#login-form").submit(function (e) {
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();

        let errorMessages = "";

        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            errorMessages += "Địa chỉ email không hợp lệ.\n";
        }

        if (password.length < 6) {
            errorMessages += "Mật khẩu phải có ít nhất 6 ký tự.\n";
        }

        if (errorMessages != "") {
            toastr.error(errorMessages, "Lỗi đăng ký");

            e.preventDefault();
        }
    });

    // Validate reset password form submission
    $("#reset-password-form").submit(function (e) {
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();
        let confirmPassword = $('input[name="password_confirmation"]').val();

        let errorMessages = "";

        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            errorMessages += "Địa chỉ email không hợp lệ.\n";
        }

        if (password.length < 6) {
            errorMessages += "Mật khẩu phải có ít nhất 6 ký tự.\n";
        }

        if (password != confirmPassword) {
            errorMessages += "Mật khẩu và xác nhận mật khẩu không khớp.\n";
        }

        if (errorMessages != "") {
            toastr.error(errorMessages, "Lỗi đăng ký");

            e.preventDefault();
        }
    });

    /*************************************
     *  PAGES ACCOUNT
     *************************************/

    //When clicking on the image upload button, trigger the file input click
    $(".profile-pic").click(function () {
        $("#avatar").click();
    });

    $("#avatar").change(function () {
        let input = this;

        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $("#preview-image").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    });

    $("#update-account").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData(this);
        let urlUpdate = $(this).attr("action");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: urlUpdate,
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $(".btn-wrapper button")
                    .text("Đang cập nhật...")
                    .attr("disabled", true);
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.message);
                    if (response.avatar) {
                        $("#preview-image").attr("src", response.avatar);
                    }
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    toastr.error(value[0]);
                });
            },
            complete: function () {
                $(".btn-wrapper button")
                    .text("Lưu thay đổi")
                    .attr("disabled", false);
            },
        });
    });

    //Change password form validation
    $("#change-password-form").submit(function (e) {
        e.preventDefault();
        let current_password = $('input[name="current_password"]').val().trim();
        let new_password = $('input[name="new_password"]').val().trim();
        let confirm_new_password = $('input[name="confirm_new_password"]')
            .val()
            .trim();

        let errorMessages = "";

        if (current_password.length < 6) {
            errorMessages += "Mật khẩu hiện tại phải có ít nhất 6 ký tự.\n";
        }

        if (new_password.length < 6) {
            errorMessages += "Mật khẩu mới phải có ít nhất 6 ký tự.\n";
        }

        if (new_password != confirm_new_password) {
            errorMessages += "Mật khẩu và xác nhận mật khẩu không khớp.\n";
        }

        if (errorMessages != "") {
            toastr.error(errorMessages, "Lỗi đăng ký");

            return;
        }

        let formData = $(this).serialize();
        let urlUpdate = $(this).attr("action");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: urlUpdate,
            data: formData,
            beforeSend: function () {
                $(".btn-wrapper button")
                    .text("Đang cập nhật...")
                    .attr("disabled", true);
            },
            success: function (response) {
                if (response.success) {
                    toastr.success(response.message);
                    $("#change-password-form")[0].reset();
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    toastr.error(value[0]);
                });
            },
            complete: function () {
                $(".btn-wrapper button")
                    .text("Lưu thay đổi")
                    .attr("disabled", false);
            },
        });
    });

    //Validate add address form submission
    $("#addAddressForm").submit(function (e) {
        e.preventDefault();
        let isValid = true;

        $(".error-message").remove();

        let fullName = $("#full_name").val().trim();
        let phone = $("#phone").val().trim();

        if (fullName.length < 3) {
            toastr.error("Họ tên phải có ít nhất 3 ký tự.", "Lỗi thêm địa chỉ");
            isValid = false;
        }

        let phonePattern = /^[0-9]{10,15}$/;
        if (!phonePattern.test(phone)) {
            isValid = false;
            $("#phone").after(
                '<span class="text-danger">Số điện thoại không hợp lệ.</span>'
            );
        }
    });

    /*************************************
     *  PAGES PRODUCTS FILTER SLIDER
     *************************************/

    //Phân trang sản phẩm với AJAX
    let currentPage = 1;
    $(document).on("click", ".pagination-click", function (e) {
        e.preventDefault();
        let pageUrl = $(this).attr("href");
        let page = pageUrl.split("page=")[1];
        currentPage = page;
        fetchProducts();
    });

    function fetchProducts() {
        let category_id = $(".category-filter.active").data("id") || "";
        let minPrice = $(".slider-range").slider("values", 0);
        let maxPrice = $(".slider-range").slider("values", 1);
        let sort_by = $("#sort-by").val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "GET",
            url: "products/filter?page=" + currentPage,
            data: {
                category_id: category_id,
                min_price: minPrice,
                max_price: maxPrice,
                sort_by: sort_by,
            },
            beforeSend: function () {
                $("#loading-spinner").show();
                $("#liton_product_grid").hide();
            },
            success: function (response) {
                $("#liton_product_grid").html(response.products);
                $(".liton_pagination").html(response.pagination);
            },
            complete: function () {
                $("#loading-spinner").hide();
                $("#liton_product_grid").show();
            },
            error: function (xhr) {
                alert("Đã có lỗi xảy ra khi tải sản phẩm.");
            },
        });
    }

    $(".category-filter").click(function () {
        $(".category-filter").removeClass("active");
        $(this).addClass("active");
        currentPage = 1;
        fetchProducts();
    });
    $("#sort-by").change(function () {
        currentPage = 1;
        fetchProducts();
    });
    $(".slider-range").slider({
        range: true,
        min: 0,
        max: 300000,
        values: [0, 300000],
        slide: function (event, ui) {
            $(".amount").val(ui.values[0] + " - " + ui.values[1] + " vnđ");
        },
        change: function (event, ui) {
            currentPage = 1;
            fetchProducts();

            // You can add your filtering logic here based on the selected price range
        },
    });
    $(".amount").val(
        $(".slider-range").slider("values", 0) +
            " - " +
            $(".slider-range").slider("values", 1) +
            " vnđ"
    );

    /*************************************
     *  PAGES DETAIL PRODUCT ADD TO CART MODAL
     *************************************/

    $(document).on("click", ".qtybutton", function () {
        var $button = $(this);
        var $input = $button.siblings("input");
        var oldValue = parseInt($input.val());
        var maxStock = parseInt($input.data("max"));

        if ($button.hasClass("inc")) {
            if (oldValue < maxStock) $input.val(oldValue + 1);
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) $input.val(oldValue - 1);
        }
    });

    $(document).on("click", ".add-to-cart-btn", function (e) {
        e.preventDefault();
        let productId = $(this).data("id");
        let quantity = $(this)
            .closest("li")
            .prev()
            .find(".cart-plus-minus-box")
            .val();

        quantity = quantity ? quantity : 1;

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "/cart/add",
            data: {
                product_id: productId,
                quantity: quantity,
            },
            success: function (response) {
                $("#add_to_cart_modal-" + productId).modal("show");
                $("#quick_view_modal-" + productId).modal("hide");
                toastr.success("Đã thêm sản phẩm vào giỏ hàng.");
                $("#cart-count").text(response.cartCount);
            },
            error: function (xhr) {
                alert("Đã có lỗi xảy ra khi thêm vào giỏ hàng.");
            },
        });
    });

    /*************************************
     *  CART
     *************************************/
    //Mini cart
    $(".mini-cart-icon").click(function (e) {
        $.ajax({
            type: "GET",
            url: "/mini-cart",
            success: function (response) {
                if (response.status) {
                    $("#ltn__utilize-cart-menu .ltn__utilize-menu-inner").html(
                        response.html
                    );
                    $("#ltn__utilize-cart-menu").addClass("ltn__utilize-open");
                } else {
                    toastr.error("Không thể tải giỏ hàng.");
                }
            },
            error: function (xhr) {
                alert("Đã có lỗi xảy ra khi tải giỏ hàng.");
            },
        });
    });

    $(document).on("click", ".ltn__utilize-close", function () {
        $("#ltn__utilize-cart-menu").removeClass("ltn__utilize-open");
        $(".ltn__utilize-overlay").hide();
    });
    //Remove item from mini cart
    $(document).on("click", ".mini-cart-item-delete", function () {
        let productId = $(this).data("id");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "/cart/remove",
            data: {
                product_id: productId,
            },
            success: function (response) {
                if (response.status) {
                    $("#cart-count").text(response.cart_count);
                    $(".mini-cart-icon").click();
                    toastr.success("Đã xóa sản phẩm khỏi giỏ hàng.");
                } else {
                    toastr.error("Không thể xóa sản phẩm khỏi giỏ hàng.");
                }
            },
        });
    });
});
