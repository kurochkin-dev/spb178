var mySwiper = new Swiper(".swiper-container", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }, pagination: {el: ".swiper-pagination", clickable: !0}, slidesPerView: 1, speed: 800, loop: !0
});

let headerBtn = document.getElementById("header-btn"), modalW = document.getElementById("modalW"),
    header = document.querySelector(".header"), html = document.getElementsByTagName("html")[0];
headerBtn.addEventListener("click", function () {
    headerBtn.classList.toggle("active"), modalW.classList.toggle("active"), header.classList.toggle("active"), html.classList.toggle("overflowY")
}), jQuery("img.svg").each(function () {
    var e = jQuery(this), t = e.attr("id"), n = e.attr("class"), a = e.attr("src");
    jQuery.get(a, function (a) {
        var l = jQuery(a).find("svg");
        void 0 !== t && (l = l.attr("id", t)), void 0 !== n && (l = l.attr("class", n + " r-svg")), l = l.removeAttr("xmlns:a"), e.replaceWith(l)
    }, "xml")
}), jQuery(".connect-to-team").on("click", "#connect-to-team-btn", function () {
    var e, t = jQuery(this).closest(".forma");
    btn = jQuery(this), p_btn = btn.find("p"), name = t.find('input[name="name"]').val(), mail = t.find('input[name="mail"]').val(), phone_el = t.find('input[name="phone"]'), e = phone_el.val(), ch = "Ценральная форма\n", e.length < 18 ? (phone_el.addClass("invalid_phone"), e = phone_el.val(), phone_el.val("Введите номер корректно"), phone_el.css("color", "red"), console.log(e), btn.prop("disabled", !0), setTimeout(function () {
        phone_el.removeClass("invalid_phone"), phone_el.val(e), phone_el.css("color", "black"), btn.prop("disabled", !1)
    }, 2e3)) : jQuery.ajax({
        url: "/api/new.php",
        type: "post",
        dataType: "json",
        data: {name: name, phone: e, mail: mail, ch: ch},
        beforeSend: function () {
            p_btn.html("Идёт отправка...")
        },
        success: function () {
            setTimeout(function () {
                p_btn.text("Отправлено! :)"), btn.prop("disabled", !1), t.find('input[name="name"]').val(""), t.find('input[name="phone"]').val(""), t.find('input[name="mail"]').val(""), setTimeout(function () {
                    p_btn.html("Присоединиться к команде")
                }, 1200)
            }, 1200)
        }
    })
}), jQuery(document).on("ready", function () {
    [].forEach.call(document.querySelectorAll('input[name="phone"]'), function (e) {
        var t;

        function n(e) {
            e.keyCode && (t = e.keyCode), this.selectionStart < 3 && e.preventDefault();
            var n = "+7 (___) ___-__-__", a = 0, l = n.replace(/\D/g, ""), i = this.value.replace(/\D/g, ""),
                o = n.replace(/[_\d]/g, function (e) {
                    return a < i.length ? i.charAt(a++) || l.charAt(a) : e
                });
            -1 != (a = o.indexOf("_")) && (a < 5 && (a = 3), o = o.slice(0, a));
            var s = n.substr(0, this.value.length).replace(/_+/g, function (e) {
                return "\\d{1," + e.length + "}"
            }).replace(/[+()]/g, "\\jQuery&");
            (!(s = new RegExp("^" + s + "jQuery")).test(this.value) || this.value.length < 5 || t > 47 && t < 58) && (this.value = o), "blur" == e.type && this.value.length < 5 && (this.value = "")
        }

        e.addEventListener("input", n, !1), e.addEventListener("focus", n, !1), e.addEventListener("blur", n, !1)
    })
});
//# sourceMappingURL=m_main.js.map
