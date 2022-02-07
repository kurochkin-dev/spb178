jQuery(".prices").on("click", ".right__btn", function () {
    var e = jQuery(".forma");
    btn = jQuery(this), p_btn = btn.find("p"), button = jQuery(".right__btn"), name = e.find('input[name="name"]').val(), phone_el = e.find('input[name="phone"]'), phone = phone_el.val(), ch = "Форма в центре\n", console.log(phone_el), phone.length < 18 ? (phone_el.addClass("invalid_phone"), phone_el.prop("placeholder", "Введите номер телефона"), button.prop("disabled", !0), setTimeout(function () {
        phone_el.removeClass("invalid_phone"), phone_el.prop("placeholder", "+7(___) ___-__-__"), button.prop("disabled", !1)
    }, 2e3)) : (console.log(ch), jQuery.ajax({
        url: "/api/mail.php",
        type: "post",
        dataType: "json",
        data: {phone: phone, name: name, message: ch},
        beforeSend: function () {
            p_btn.html("Идёт отправка...")
        },
        success: function () {
            setTimeout(function () {
                p_btn.text("Отправлено! :)"), phone_el.prop("placeholder", "Телефон"), button.prop("disabled", !1), e.find('input[name="name"]').val(""), e.find('input[name="phone"]').val("")
            }, 1200)
        }
    }))
}), jQuery(document).ready(function () {
    [].forEach.call(document.querySelectorAll('input[name="phone"]'), function (e) {
        var i;

        function n(e) {
            e.keyCode && (i = e.keyCode), this.selectionStart < 3 && e.preventDefault();
            var n = "+7 (___) ___-__-__", t = 0, o = n.replace(/\D/g, ""), a = this.value.replace(/\D/g, ""),
                l = n.replace(/[_\d]/g, function (e) {
                    return t < a.length ? a.charAt(t++) || o.charAt(t) : e
                });
            -1 != (t = l.indexOf("_")) && (t < 5 && (t = 3), l = l.slice(0, t));
            var p = n.substr(0, this.value.length).replace(/_+/g, function (e) {
                return "\\d{1," + e.length + "}"
            }).replace(/[+()]/g, "\\jQuery&");
            (!(p = new RegExp("^" + p + "jQuery")).test(this.value) || this.value.length < 5 || 47 < i && i < 58) && (this.value = l),
            "blur" == e.type && this.value.length < 5 && (this.value = "")
        }

        e.addEventListener("input", n, !1), e.addEventListener("focus", n, !1), e.addEventListener("blur", n, !1)
    })
});
//# sourceMappingURL=main.js.map
