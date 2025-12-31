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
        let $button = $(this);
        let $input = $button.siblings("input");
        let productId = $input.data("id");
        let oldValue = parseInt($input.val());
        let maxStock = parseInt($input.data("max"));
        let newValue = oldValue;

        // 1. Cập nhật con số hiển thị (Dùng chung cho cả 2 trang)
        if ($button.hasClass("inc")) {
            if (oldValue < maxStock) {
                newValue = oldValue + 1;
            } else {
                toastr.warning("Đã đạt giới hạn tồn kho.");
                return;
            }
        } else if ($button.hasClass("dec")) {
            if (oldValue > 1) {
                newValue = oldValue - 1;
            }
        }

        $input.val(newValue); // Đưa số mới vào ô input

        // 2. ĐIỀU KIỆN QUAN TRỌNG: Chỉ gọi Ajax nếu đang ở trang Giỏ hàng
        // Kiểm tra nếu trên trang có bảng giỏ hàng (class .shoping-cart-inner)
        if ($(".shoping-cart-inner").length > 0) {
            if (typeof updateCart === "function") {
                updateCart(productId, newValue, $input);
            }
        } else {
            // Ở trang Chi tiết sản phẩm: Không làm gì cả,
            // để người dùng bấm nút "THÊM VÀO GIỎ HÀNG" sau.
            console.log("Đã chọn số lượng: " + newValue);
        }
    });

    $(document).on("click", ".add-to-cart-btn", function (e) {
        e.preventDefault();

        // Ép tìm lên thẻ cha gần nhất có class .add-to-cart-btn
        var target = $(e.target).closest(".add-to-cart-btn");
        var productId = target.attr("data-id") || target.data("id");

        // Tìm ô input số lượng nằm trong cùng khu vực với nút bấm
        var quantityInput = $(".cart-plus-minus-box");
        var quantity = 1;

        // Nếu tìm thấy ô input số lượng (thường ở trang Chi tiết), lấy giá trị của nó
        if (quantityInput.length > 0) {
            quantity = parseInt(quantityInput.val());
        }

        if (!productId || productId === "undefined") {
            alert("Lỗi chưa có id sản phẩm.");
            return;
        }
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
                // Hiện Modal thành công
                var modalId = "#add_to_cart_modal-" + productId;
                if ($(modalId).length) {
                    $(modalId).modal("show");
                }
                // Cập nhật số lượng trên icon giỏ hàng header
                $("#cart-count").text(response.cartCount);
                toastr.success("Đã thêm vào giỏ hàng!");
            },
            error: function (xhr) {
                alert("Lỗi server: " + xhr.status);
            },
        });
    });

    /*************************************
     *  MINI CART
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

    /*************************************
     *  PAGES CART
     *************************************/

    function updateCart(productId, quantity, $inputField) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/cart/update", // Đường dẫn phải khớp với Route::post trong web.php
            method: "POST",
            data: {
                product_id: productId,
                quantity: quantity,
            },
            success: function (response) {
                if (response.status === false) {
                    toastr.error(response.message);
                    // Nếu lỗi (vượt tồn kho), reload để reset lại số cũ
                    setTimeout(() => location.reload(), 1000);
                    return;
                }

                // --- CẬP NHẬT GIAO DIỆN TẠI ĐÂY ---

                // 1. Cập nhật Thành tiền của dòng hiện tại
                // Tìm đến thẻ <tr> chứa cái input đang bấm, rồi tìm class subtotal
                $inputField
                    .closest("tr")
                    .find(".cart-product-subtotal")
                    .text(response.subtotal + " đ");

                // 2. Cập nhật Tổng tiền (Total cost) ở dưới bảng
                $(".cart-total").text(response.total + " VNĐ");

                // 3. Cập nhật Tổng đơn hàng (Total orders) đã cộng phí ship
                $(".cart-grand-total").text(response.grandTotal + " VNĐ");

                console.log("Cập nhật thành công!", response);
            },
            error: function (xhr) {
                console.error("Lỗi Ajax:", xhr.responseText);
                toastr.error("Không thể cập nhật giỏ hàng.");
            },
        });
    }

    $(".remove-from-cart").on("click", function (e) {
        let productId = $(this).data("id");
        let row = $(this).closest("tr");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/cart/remove-cart",
            type: "POST",
            data: {
                product_id: productId,
            },
            success: function (response) {
                row.remove();

                // Cập nhật lại tổng tiền sau khi xóa
                $(".cart-total").text(response.total + " VNĐ");
                $(".cart-grand-total").text(response.grandTotal + " VNĐ");
                if ($(".cart-product-remove").length == 0) {
                    location.reload();
                }
            },
            error: function (xhr) {
                toastr.error("Không thể cập nhật giỏ hàng.");
            },
        });
    });

    /*************************************
     *  SEARCH VOICE INPUT
     *************************************/
    // Check browser support?
    if ("SpeechRecognition" in window || "webkitSpeechRecognition" in window) {
        var recognition = new (window.SpeechRecognition ||
            window.webkitSpeechRecognition)();
        recognition.lang = "vi-VN";
        recognition.continuous = true;
        recognition.interimResults = true;

        var isRecognizing = false;

        $("#voice-search").on("click", function () {
            if (isRecognizing) {
                recognition.stop();
                $(this)
                    .removeClass("fa-microphone-slash")
                    .addClass("fa-microphone");
            } else {
                recognition.start();
                $(this)
                    .removeClass("fa-microphone")
                    .addClass("fa-microphone-slash");
            }
        });

        recognition.onstart = function () {
            console.log("Speech recognition started");
            isRecognizing = true;
            $("#voice-search")
                .removeClass("fa-microphone")
                .addClass("fa-microphone-slash");
        };

        recognition.onresult = function (event) {
            var transcript = event.results[0][0].transcript;
            if (event.results[0].isFinal) {
                $("input[name='keyword']").val(transcript);
            } else {
                $("input[name='keyword']").val(transcript);
            }
        };

        recognition.onerror = function (event) {
            console.error("Speech recognition error", event.error);
            toastr.error("Lỗi nhận dạng giọng nói: " + event.error);
        };

        recognition.onend = function (event) {
            console.log("Speech recognition ended");
            $(this)
                .removeClass("fa-microphone-slash")
                .addClass("fa-microphone");
            isRecognizing = false;
        };
    } else {
        alert("Trình duyệt không hỗ trợ Speech Recognition");
        toastr.error("Trình duyệt không hỗ trợ nhận dạng giọng nói.");
    }

    $(document).ready(function() {
    // 1. Mở/Đóng Chatbox
    $('#open-chat-btn').click(() => $('#ai-chatbox').toggleClass('chatbox-open chatbox-closed'));
    $('#close-chat').click(() => $('#ai-chatbox').addClass('chatbox-closed').removeClass('chatbox-open'));

    // 2. Cấu hình Nhận diện giọng nói (Speech Recognition)
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (SpeechRecognition) {
        const recognition = new SpeechRecognition();
        recognition.lang = 'vi-VN';
        let isRecognizing = false;

        $('#voice-btn').click(function() {
            if (isRecognizing) {
                recognition.stop();
            } else {
                recognition.start();
                $(this).find('i').removeClass('fa-microphone').addClass('fa-microphone-slash');
            }
        });

        recognition.onstart = () => { isRecognizing = true; };
        recognition.onend = () => { 
            isRecognizing = false; 
            $('#voice-btn').find('i').removeClass('fa-microphone-slash').addClass('fa-microphone');
        };

        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            $('#user-input').val(transcript);
            sendMessage(transcript);
        };

        recognition.onerror = (event) => {
            toastr.error('Có lỗi xảy ra khi nhận diện giọng nói: ' + event.error);
        };
    } else {
        $('#voice-btn').hide();
        console.log("Trình duyệt không hỗ trợ nhận diện giọng nói.");
    }

    // 3. Hàm gửi tin nhắn
    function sendMessage(text) {
        if (!text.trim()) return;
        
        $('#chat-content').append(`<div class="message user-message">${text}</div>`);
        $('#user-input').val('');

        // Gửi Ajax lên server (Bạn cần tạo Route và Controller xử lý AI)
        $.ajax({
            url: '/ai/chat',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                message: text
            },
            success: function(response) {
    // Thêm tin nhắn của AI vào khung chat
    $('#chat-content').append('<div class="message ai-message">' + response.reply + '</div>');
    // Tự động cuộn xuống dưới cùng
    var chatContent = document.getElementById("chat-content");
    chatContent.scrollTop = chatContent.scrollHeight;
}
        });
    }

    $('#send-btn').click(() => sendMessage($('#user-input').val()));
});
});
