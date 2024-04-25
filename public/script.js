function fetchData(url, outputElement = "#root", params = {}, callback = {}) {
    if (!url) return;

    $.ajax({
        url: url,
        method: "POST",
        data: params,
        async: true,
        dataType: "html",
        beforeSend: function (xhr) {
            xhr.overrideMimeType("text/plain; charset=UTF-8");
        },
        success(data) {
            if (outputElement) {
                $(outputElement).html(data);
            }

            if (typeof callback.success == "function") {
                callback.success(data);
            }
        },
        error(err) {
            if (typeof callback.success == "function") {
                callback.error(err);
            }
            else {
                alert("Sayfa Bulunamadı");
            }
        }
    });
}