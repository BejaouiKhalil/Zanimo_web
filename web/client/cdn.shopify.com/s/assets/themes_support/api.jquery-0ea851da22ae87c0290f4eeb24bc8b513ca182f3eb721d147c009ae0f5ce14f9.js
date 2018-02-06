function floatToString(t, r) {
    var e = t.toFixed(r).toString();
    return e.match(/^\.\d+/) ? "0" + e : e
}

function attributeToString(t) {
    return "string" != typeof t && "undefined" === (t += "") && (t = ""), jQuery.trim(t)
}

"undefined" == typeof window.Shopify && (window.Shopify = {}), Shopify.money_format = "${{amount}}", Shopify.onError = function (t, r) {
    var e = eval("(" + t.responseText + ")");
    e.message ? alert(e.message + "(" + e.status + "): " + e.description) : alert("Error : " + Shopify.fullMessagesFromErrors(e).join("; ") + ".")
}, Shopify.fullMessagesFromErrors = function (t) {
    var r = [];
    return jQuery.each(t, function (t, e) {
        jQuery.each(e, function (e, a) {
            r.push(t + " " + a)
        })
    }), r
}, Shopify.onCartUpdate = function (t) {
    alert("There are now " + t.item_count + " items in the cart.")
}, Shopify.onCartShippingRatesUpdate = function (t, r) {
    var e = "";
    r.zip && (e += r.zip + ", "), r.province && (e += r.province + ", "), e += r.country, alert("There are " + t.length + " shipping rates available for " + e + ", starting at " + Shopify.formatMoney(t[0].price) + ".")
}, Shopify.onItemAdded = function (t) {
    alert(t.title + " was added to your shopping cart.")
}, Shopify.onProduct = function (t) {
    alert("Received everything we ever wanted to know about " + t.title)
}, Shopify.formatMoney = function (t, r) {
    function e(t, r) {
        return void 0 === t ? r : t
    }

    function a(t, r, a, o) {
        if (r = e(r, 2), a = e(a, ","), o = e(o, "."), isNaN(t) || null == t) return 0;
        t = (t / 100).toFixed(r);
        var n = t.split(".");
        return n[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + a) + (n[1] ? o + n[1] : "")
    }

    "string" == typeof t && (t = t.replace(".", ""));
    var o = "", n = /\{\{\s*(\w+)\s*\}\}/, i = r || this.money_format;
    switch (i.match(n)[1]) {
        case"amount":
            o = a(t, 2);
            break;
        case"amount_no_decimals":
            o = a(t, 0);
            break;
        case"amount_with_comma_separator":
            o = a(t, 2, ".", ",");
            break;
        case"amount_with_space_separator":
            o = a(t, 2, " ", ",");
            break;
        case"amount_with_period_and_space_separator":
            o = a(t, 2, " ", ".");
            break;
        case"amount_no_decimals_with_comma_separator":
            o = a(t, 0, ".", ",");
            break;
        case"amount_no_decimals_with_space_separator":
            o = a(t, 0, ".", "");
            break;
        case"amount_with_space_separator":
            o = a(t, 2, ",", "");
            break;
        case"amount_with_apostrophe_separator":
            o = a(t, 2, "'", ".")
    }
    return i.replace(n, o)
}, Shopify.resizeImage = function (t, r) {
    try {
        if ("original" == r) return t;
        var e = t.match(/(.*\/[\w\-\_\.]+)\.(\w{2,4})/);
        return e[1] + "_" + r + "." + e[2]
    } catch (r) {
        return t
    }
}, Shopify.addItem = function (t, r, e) {
    var r = r || 1, a = {
        type: "POST",
        url: "/cart/add.js",
        data: "quantity=" + r + "&id=" + t,
        dataType: "json",
        success: function (t) {
            "function" == typeof e ? e(t) : Shopify.onItemAdded(t)
        },
        error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(a)
}, Shopify.addItemFromForm = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/add.js",
        data: jQuery("#" + t).serialize(),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Shopify.onItemAdded(t)
        },
        error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Shopify.getCart = function (t) {
    jQuery.getJSON("/cart.js", function (r) {
        "function" == typeof t ? t(r) : Shopify.onCartUpdate(r)
    })
}, Shopify.pollForCartShippingRatesForDestination = function (t, r, e) {
    e = e || Shopify.onError;
    var a = function () {
        jQuery.ajax("/cart/async_shipping_rates", {
            dataType: "json", success: function (e, o, n) {
                200 === n.status ? "function" == typeof r ? r(e.shipping_rates, t) : Shopify.onCartShippingRatesUpdate(e.shipping_rates, t) : setTimeout(a, 500)
            }, error: e
        })
    };
    return a
}, Shopify.getCartShippingRatesForDestination = function (t, r, e) {
    e = e || Shopify.onError;
    var a = {
        type: "POST",
        url: "/cart/prepare_shipping_rates",
        data: Shopify.param({shipping_address: t}),
        success: Shopify.pollForCartShippingRatesForDestination(t, r, e),
        error: e
    };
    jQuery.ajax(a)
}, Shopify.getProduct = function (t, r) {
    jQuery.getJSON("/products/" + t + ".js", function (t) {
        "function" == typeof r ? r(t) : Shopify.onProduct(t)
    })
}, Shopify.changeItem = function (t, r, e) {
    var a = {
        type: "POST",
        url: "/cart/change.js",
        data: "quantity=" + r + "&id=" + t,
        dataType: "json",
        success: function (t) {
            "function" == typeof e ? e(t) : Shopify.onCartUpdate(t)
        },
        error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(a)
}, Shopify.removeItem = function (t, r) {
    var e = {
        type: "POST", url: "/cart/change.js", data: "quantity=0&id=" + t, dataType: "json", success: function (t) {
            "function" == typeof r ? r(t) : Shopify.onCartUpdate(t)
        }, error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Shopify.clear = function (t) {
    var r = {
        type: "POST", url: "/cart/clear.js", data: "", dataType: "json", success: function (r) {
            "function" == typeof t ? t(r) : Shopify.onCartUpdate(r)
        }, error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(r)
}, Shopify.updateCartFromForm = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/update.js",
        data: jQuery("#" + t).serialize(),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Shopify.onCartUpdate(t)
        },
        error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Shopify.updateCartAttributes = function (t, r) {
    var e = "";
    jQuery.isArray(t) ? jQuery.each(t, function (t, r) {
        var a = attributeToString(r.key);
        "" !== a && (e += "attributes[" + a + "]=" + attributeToString(r.value) + "&")
    }) : "object" == typeof t && null !== t && jQuery.each(t, function (t, r) {
        e += "attributes[" + attributeToString(t) + "]=" + attributeToString(r) + "&"
    });
    var a = {
        type: "POST", url: "/cart/update.js", data: e, dataType: "json", success: function (t) {
            "function" == typeof r ? r(t) : Shopify.onCartUpdate(t)
        }, error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(a)
}, Shopify.updateCartNote = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/update.js",
        data: "note=" + attributeToString(t),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Shopify.onCartUpdate(t)
        },
        error: function (t, r) {
            Shopify.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, jQuery.fn.jquery >= "1.4" ? Shopify.param = jQuery.param : (Shopify.param = function (t) {
    var r = [], e = function (t, e) {
        e = jQuery.isFunction(e) ? e() : e, r[r.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
    };
    if (jQuery.isArray(t) || t.jquery) jQuery.each(t, function () {
        e(this.name, this.value)
    }); else for (var a in t) Shopify.buildParams(a, t[a], e);
    return r.join("&").replace(/%20/g, "+")
}, Shopify.buildParams = function (t, r, e) {
    jQuery.isArray(r) && r.length ? jQuery.each(r, function (r, a) {
        rbracket.test(t) ? e(t, a) : Shopify.buildParams(t + "[" + ("object" == typeof a || jQuery.isArray(a) ? r : "") + "]", a, e)
    }) : null != r && "object" == typeof r ? Shopify.isEmptyObject(r) ? e(t, "") : jQuery.each(r, function (r, a) {
        Shopify.buildParams(t + "[" + r + "]", a, e)
    }) : e(t, r)
}, Shopify.isEmptyObject = function (t) {
    for (var r in t) return !1;
    return !0
});