<script type="text/javascript">
    $("#modal_trigger1").leanModal({top: 100, overlay: 0.6, closeButton: ".modal_close"});
    $("#viewmap1").leanModal({top: 100, overlay: 0.6, closeButton: ".modal_close"});
</script>

<script src="assets/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="assets/js/slider.min.js" type="text/javascript"></script>
<script src="assets/js/pikaday.js"></script>
<script id="scriptToReload" src="assets/js/hotel365.js"></script>
<script>
    (function ($) {
        $(window).on("load", function () {
            $("#ultilites").mCustomScrollbar({
                autoHideScrollbar: true,
                theme: "rounded-dots-dark"
            });
        });
    })(jQuery);
    var picker1 = new Pikaday(
            {
                field: document.getElementById('datepicker1'),
                firstDay: 1,
                minDate: new Date(),
                maxDate: new Date(2020, 12, 31),
                yearRange: [2000, 2020]
            });
    var picker2 = new Pikaday(
            {
                field: document.getElementById('datepicker2'),
                firstDay: 1,
                minDate: new Date(),
                maxDate: new Date(2020, 12, 31),
                yearRange: [2000, 2020]
            });
    function refrClock() {
        var d = new Date();
        var s = d.getSeconds();
        var m = d.getMinutes();
        var h = d.getHours();
        var day = d.getDay();
        var date = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        var days = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
        var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
        var am_pm;
        if (s < 10) {
            s = "0" + s
        }
        if (m < 10) {
            m = "0" + m
        }
        if (h > 12)
        {
            h -= 12;
            AM_PM = "PM"
        } else {
            AM_PM = "AM"
        }
        if (h < 10) {
            h = "0" + h
        }
        document.getElementById("clock").innerHTML = days[day] + ", Ngày " + date + "/" + months[month] + "/" + year;
        setTimeout("refrClock()", 1000);
    }
    refrClock();
    ;

    (function (w, d) {
        "use strict";

        var timeout = null,
                scriptEl = d.getElementById('scriptToReload'),
                scriptSrc = scriptEl.src,
                delay = 500;
        w.onresize = function () {
            w.clearTimeout(timeout);

            timeout = w.setTimeout(function () {
                scriptEl.parentElement.removeChild(scriptEl);
                scriptEl = d.createElement('script');
                scriptEl.type = 'text/javascript';
                scriptEl.src = scriptSrc + '?_=' + (new Date().getTime());
                d.getElementsByTagName('head')[0].appendChild(scriptEl);
            }, delay);
        };
    })(window, document);
</script>
