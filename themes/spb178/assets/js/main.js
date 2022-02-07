'use strict';

jQuery(function () {
    var timer;
    jQuery('.menu > li').hover(
        function () {
            var jQuerythat = jQuery(this);
            timer = setTimeout(function () {
                jQuerythat.addClass("active");
                jQuerythat.find('ul').finish().slideDown(1);
            }, 500);
        },
        function () {
            clearTimeout(timer);
            jQuery(this).removeClass("active");
            jQuery(this).find('ul').finish().slideUp(1);
        }
    );
});


var icon = document.getElementById("icon");
var icon1 = document.getElementById("a");
var icon2 = document.getElementById("b");
var icon3 = document.getElementById("c");
var nav = document.getElementById('nav');
var blue = document.getElementById("blue");

icon.addEventListener('click', function () {
    icon1.classList.toggle('a');
    icon2.classList.toggle('c');
    icon3.classList.toggle('b');
    nav.classList.toggle('show');
    blue.classList.toggle('slide');
});

blue.addEventListener('touchstart', function () {
    icon1.classList.toggle('a');
    icon2.classList.toggle('c');
    icon3.classList.toggle('b');
    nav.classList.toggle('show');
    blue.classList.toggle('slide');
});

if (document.documentElement.clientWidth > 879) {
    /* Show Submenu */
    setTimeout(function () {
            jQuery('#subnav').show(2000);
            jQuery('.menu-item-has-children > a').css('color', '#f2c900');
            jQuery('.mr-22').css('color', '#f88f3b');
        }, 19000
    );
}

jQuery('#blue, html, body, .dark-blue.slide').click(function () {
    hideMenu();
});

function hideMenu() {
    jQuery('.sub-menu').slideUp(400);
}

function showMenu() {
    jQuery('.sub-menu').slideDown(400);
}

jQuery(document).ready(function () {
    jQuery(".menu-item-has-children > a").on("mouseover", showMenu);
    jQuery(".menu").on("mouseleave", hideMenu);
});


if (window.innerWidth < 878) {
    jQuery('.menu-item-has-children > a').one("click", false);
    jQuery(document).ready(function () {
        jQuery('.menu-item-has-children > a').on('touchstart', function (e) {
            showMenu();
        });
    });
}


jQuery(".menu-item-has-children > a").hover(function () {
        jQuery("#subnav").hide();
    }, function () {
        jQuery("#subnav").delay(19000).show(1000);
    }
);

/* Modal close */
jQuery(".close, .mask").on("click", function () {
    jQuery(".mask").removeClass("show");
    jQuery('#submit').attr('disabled', true).removeClass('activeSubmit');
    jQuery('#uAgree').removeClass('activeLink');
    jQuery("form").trigger("reset");
});

/* Close modal on Esc */
jQuery(document).keyup(function (e) {
    if (e.keyCode == 27) {
        closeModal();
    }
});

jQuery('#customCheck').on('change', function () {
    if (jQuery('#customCheck').prop('checked')) {
        jQuery('#submit').attr('disabled', false).addClass('activeSubmit');
        jQuery('#uAgree').addClass('activeLink');
    } else {
        jQuery('#submit').attr('disabled', true).removeClass('activeSubmit');
        jQuery('#uAgree').removeClass('activeLink');
    }
});


jQuery(function () {
    jQuery('#ceo-message__btn').click(function () {
        jQuery('.ceo-message').addClass('ceo-message_active');
    });

    jQuery('.ceo-message__close-btn').click(function () {
        jQuery('.ceo-message').removeClass('ceo-message_active');
    });
});


let mask = document.querySelector(".mask");
let modalW = document.querySelector("#modalW");
let modalWClose = document.querySelector("#close, .close");
let vacancyModal = document.querySelector("#contacts-right-column");
let vacancyBtn = document.querySelector("#vacancy-btn");





if (modalWClose) {
    modalWClose.addEventListener("click", () => {

        mask.classList.remove("active");
        mask.classList.remove("show")
        modalW.classList.remove("active");

    });
}


let showModal = document.querySelector('#showModal, .modalShow');

if (showModal) {
    showModal.addEventListener("click", function () {
        mask.classList.add("active");
        modalW.classList.add("active");
    });
}


mask.addEventListener("click", function () {
    mask.classList.remove("active");
    if (vacancyModal) {
        vacancyModal.classList.remove("active");
    }
    if (vacancyBtn) {
        vacancyBtn.classList.remove("active");
    }

    modalW.classList.remove("active");
});

if (vacancyBtn) {
    vacancyBtn.addEventListener("click", function () {
        mask.classList.remove("active");
        vacancyBtn.classList.remove("active");
        vacancyModal.classList.remove("active");
    });
}


let round = document.querySelectorAll(".round");
let vacancySlide = document.querySelectorAll('.vacancy-slide');
let rightColumn = document.querySelector(".contacts-right-column");

function closeModal() {
    if (rightColumn) {
        rightColumn.classList.remove("active");
    }

    mask.classList.remove("active");
    if (vacancyModal) {
        vacancyModal.classList.remove("active");
    }
    if (vacancyBtn) {
        vacancyBtn.classList.remove("active");
    }

    modalW.classList.remove("active");
}

vacancySlide.forEach(e => e.addEventListener("click", function (e) {
    e.stopPropagation();
    mask.classList.add("active");
    vacancyModal.classList.add("active");
    vacancyBtn.classList.add("active");
}));


round.forEach(e => e.addEventListener("click", function (e) {
    e.stopPropagation();
    mask.classList.add("active");
    vacancyModal.classList.add("active");
    vacancyBtn.classList.add("active");
}));

document.addEventListener( 'wpcf7submit', function( event ) {
    // jQuery('#modalW').removeClass('active');
    jQuery('.mask').removeClass('active, show');

}, false );

jQuery("#customCheck").on("change", function () {
    jQuery("#customCheck").prop("checked") ? jQuery("#submit").attr("disabled", !1).addClass("active") : jQuery("#submit").attr("disabled", !0).removeClass("active")
});
jQuery(document).keyup(function (e) {
    27 == e.keyCode && closeModal()
});
jQuery("img.svg").each(function () {
    var e = jQuery(this),
        t = e.attr("id"),
        a = e.attr("class"),
        n = e.attr("src");

    jQuery.get(n, function (n) {
        var c = jQuery(n).find("svg");
        void 0 !== t && (c = c.attr("id", t)),
        void 0 !== a && (c = c.attr("class", a + " r-svg")),
            c = c.removeAttr("xmlns:a"), e.replaceWith(c)
    }, "xml")
});

// jQuery("#modalW").on("click", "#submit", function () {
//     var e, t = jQuery(this).closest(".forma");
//     var btn = jQuery(this),
//         p_btn = btn.find("p"),
//         name = t.find('input[name="name"]').val(),
//         mail = t.find('input[name="mail"]').val(),
//         phone_el = t.find('input[name="phone"]'),
//         e = phone_el.val(),
//         textarea = t.find("textarea").val();
//     console.log(name, mail, e, textarea),
//         ch = "Форма в шапке\n",
//         e.length < 18 ? (phone_el.addClass("invalid-phone"),
//             e = phone_el.val(),
//             phone_el.val("Введите номер корректно"),
//             phone_el.css("color", "red"),
//             console.log(e),
//             btn.prop("disabled", !0),
//             setTimeout(function () {
//                 phone_el.removeClass("invalid-phone"),
//                     phone_el.val(e),
//                     phone_el.css("color", "black"),
//                     btn.prop("disabled", !1)
//             }, 2e3)) : jQuery.ajax({
//             url: "/wp-content/themes/spb178/api/new.php",
//             type: "post",
//             dataType: "json",
//             data: {name: name, phone: e, mail: mail, ch: ch, textarea: textarea},
//             beforeSend: function () {
//                 p_btn.html("Идёт отправка...")
//             },
//             success: function () {
//                 setTimeout(function () {
//                     p_btn.text("Отправлено! :)"), btn.prop("disabled", !1), t.find('input[name="name"]').val(""), t.find('input[name="phone"]').val(""), t.find('input[name="mail"]').val(""), t.find("textarea").val(""), setTimeout(function () {
//                         p_btn.html("Оставить заявку")
//                     }, 1200)
//                 }, 1200)
//             }
//         })
// });

// jQuery("#contacts-right-column").on("click", "#contacts-send", function () {
//     var e, t = jQuery(this).closest(".forma");
//     var btn = jQuery(this), p_btn = btn.find("p"),
//         name = t.find('input[name="name"]').val(),
//         phone_el = t.find('input[name="phone"]'),
//         e = phone_el.val(),
//         ch = "Форма в центре\n";
//     e.length < 18 ? (phone_el.addClass("invalid-phone"),
//         e = phone_el.val(), phone_el.val("Введите номер корректно"),
//         phone_el.css("color", "red"),
//         console.log(e),
//         btn.prop("disabled", !0),
//         setTimeout(function () {
//             phone_el.removeClass("invalid-phone"),
//                 phone_el.val(e),
//                 phone_el.css("color", "black"),
//                 btn.prop("disabled", !1)
//         }, 2e3)) : jQuery.ajax({
//         url: "/wp-content/themes/spb178/api/new.php",
//         type: "post",
//         dataType: "json",
//         data: {name: name, phone: e, ch: ch},
//         beforeSend: function () {
//             p_btn.html("Идёт отправка...")
//         },
//         success: function () {
//             setTimeout(function () {
//                 p_btn.text("Отправлено! :)"), btn.prop("disabled", !1), t.find('input[name="name"]').val(""), t.find('input[name="phone"]').val(""), setTimeout(function () {
//                     p_btn.html("Присоединиться к команде")
//                 }, 1200)
//             }, 1200)
//         }
//     })
// });

//Animate effects on the service page
(function () {
    var tiltSettings = [
        {},
        {
            movement: {
                imgWrapper: {
                    translation: {x: 10, y: 10, z: 30},
                    rotation: {x: 0, y: -10, z: 0},
                    reverseAnimation: {duration: 200, easing: 'easeOutQuad'}
                },
                lines: {
                    translation: {x: 10, y: 10, z: [0, 70]},
                    rotation: {x: 0, y: 0, z: -2},
                    reverseAnimation: {duration: 2000, easing: 'easeOutExpo'}
                },
                caption: {
                    rotation: {x: 0, y: 0, z: 2},
                    reverseAnimation: {duration: 200, easing: 'easeOutQuad'}
                },
                overlay: {
                    translation: {x: 10, y: -10, z: 0},
                    rotation: {x: 0, y: 0, z: 2},
                    reverseAnimation: {duration: 2000, easing: 'easeOutExpo'}
                },
                shine: {
                    translation: {x: 100, y: 100, z: 0},
                    reverseAnimation: {duration: 200, easing: 'easeOutQuad'}
                }
            }
        },
        {
            movement: {
                imgWrapper: {
                    rotation: {x: -5, y: 10, z: 0},
                    reverseAnimation: {duration: 900, easing: 'easeOutCubic'}
                },
                caption: {
                    translation: {x: 30, y: 30, z: [0, 40]},
                    rotation: {x: [0, 15], y: 0, z: 0},
                    reverseAnimation: {duration: 1200, easing: 'easeOutExpo'}
                },
                overlay: {
                    translation: {x: 10, y: 10, z: [0, 20]},
                    reverseAnimation: {duration: 1000, easing: 'easeOutExpo'}
                },
                shine: {
                    translation: {x: 100, y: 100, z: 0},
                    reverseAnimation: {duration: 900, easing: 'easeOutCubic'}
                }
            }
        },
        {
            movement: {
                imgWrapper: {
                    rotation: {x: -5, y: 10, z: 0},
                    reverseAnimation: {duration: 50, easing: 'easeOutQuad'}
                },
                caption: {
                    translation: {x: 20, y: 20, z: 0},
                    reverseAnimation: {duration: 200, easing: 'easeOutQuad'}
                },
                overlay: {
                    translation: {x: 5, y: -5, z: 0},
                    rotation: {x: 0, y: 0, z: 6},
                    reverseAnimation: {duration: 1000, easing: 'easeOutQuad'}
                },
                shine: {
                    translation: {x: 50, y: 50, z: 0},
                    reverseAnimation: {duration: 50, easing: 'easeOutQuad'}
                }
            }
        },
        {
            movement: {
                imgWrapper: {
                    translation: {x: 0, y: -8, z: 0},
                    rotation: {x: 3, y: 3, z: 0},
                    reverseAnimation: {duration: 1200, easing: 'easeOutExpo'}
                },
                lines: {
                    translation: {x: 15, y: 15, z: [0, 15]},
                    reverseAnimation: {duration: 1200, easing: 'easeOutExpo'}
                },
                overlay: {
                    translation: {x: 0, y: 8, z: 0},
                    reverseAnimation: {duration: 600, easing: 'easeOutExpo'}
                },
                caption: {
                    translation: {x: 10, y: -15, z: 0},
                    reverseAnimation: {duration: 900, easing: 'easeOutExpo'}
                },
                shine: {
                    translation: {x: 50, y: 50, z: 0},
                    reverseAnimation: {duration: 1200, easing: 'easeOutExpo'}
                }
            }
        },
        {
            movement: {
                lines: {
                    translation: {x: -5, y: 5, z: 0},
                    reverseAnimation: {duration: 1000, easing: 'easeOutExpo'}
                },
                caption: {
                    translation: {x: 15, y: 15, z: 0},
                    rotation: {x: 0, y: 0, z: 3},
                    reverseAnimation: {duration: 1500, easing: 'easeOutElastic', elasticity: 700}
                },
                overlay: {
                    translation: {x: 15, y: -15, z: 0},
                    reverseAnimation: {duration: 500, easing: 'easeOutExpo'}
                },
                shine: {
                    translation: {x: 50, y: 50, z: 0},
                    reverseAnimation: {duration: 500, easing: 'easeOutExpo'}
                }
            }
        },
        {
            movement: {
                imgWrapper: {
                    translation: {x: 5, y: 5, z: 0},
                    reverseAnimation: {duration: 800, easing: 'easeOutQuart'}
                },
                caption: {
                    translation: {x: 10, y: 10, z: [0, 50]},
                    reverseAnimation: {duration: 1000, easing: 'easeOutQuart'}
                },
                shine: {
                    translation: {x: 50, y: 50, z: 0},
                    reverseAnimation: {duration: 800, easing: 'easeOutQuart'}
                }
            }
        },
        {
            movement: {
                lines: {
                    translation: {x: 40, y: 40, z: 0},
                    reverseAnimation: {duration: 1500, easing: 'easeOutElastic'}
                },
                caption: {
                    translation: {x: 20, y: 20, z: 0},
                    rotation: {x: 0, y: 0, z: -5},
                    reverseAnimation: {duration: 1000, easing: 'easeOutExpo'}
                },
                overlay: {
                    translation: {x: -30, y: -30, z: 0},
                    rotation: {x: 0, y: 0, z: 3},
                    reverseAnimation: {duration: 750, easing: 'easeOutExpo'}
                },
                shine: {
                    translation: {x: 100, y: 100, z: 0},
                    reverseAnimation: {duration: 750, easing: 'easeOutExpo'}
                }
            }
        }];

    function init() {
        var idx = 0;
        [].slice.call(document.querySelectorAll('a.app')).forEach(function (el, pos) {
            idx = pos % 2 === 0 ? idx + 1 : idx;
            new TiltFx(el, tiltSettings[idx - 1]);
        });
    }
    init();
})();

jQuery(document).on("ready", function () {
    [].forEach.call(document.querySelectorAll('input[name="phone"]'), function (e) {
        var t;

        function a(e) {
            e.keyCode && (t = e.keyCode), this.selectionStart < 3 && e.preventDefault();
            var a = "+7 (___) ___-__-__", n = 0, c = a.replace(/\D/g, ""), o = this.value.replace(/\D/g, ""),
                s = a.replace(/[_\d]/g, function (e) {
                    return n < o.length ? o.charAt(n++) || c.charAt(n) : e
                });
            -1 != (n = s.indexOf("_")) && (n < 5 && (n = 3), s = s.slice(0, n));
            var l = a.substr(0, this.value.length).replace(/_+/g, function (e) {
                return "\\d{1," + e.length + "}"
            }).replace(/[+()]/g, "\\jQuery&");
            (!(l = new RegExp("^" + l + "jQuery")).test(this.value) || this.value.length < 5 || t > 47 && t < 58) && (this.value = s), "blur" == e.type && this.value.length < 5 && (this.value = "")
        }

        e.addEventListener("input", a, !1), e.addEventListener("focus", a, !1), e.addEventListener("blur", a, !1)
    })
});
//# sourceMappingURL=main.js.map


jQuery('#btn, .top-button').click(function () {
    let titlePage = jQuery(this).attr('data-page-title');
    jQuery('#hidden').val(titlePage);
    console.log(titlePage);
});

