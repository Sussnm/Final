$(document).ready(function() {
    $('#sandbox-container div').datepicker({
        weekStart: 1,
        todayBtn: "linked",
        language: "es",
        daysOfWeekDisabled: "0,6",
        todayHighlight: true
    }).on("changeDate", function(e) {
      alert("Seleccionaste " + e.date.getDate() + " de " + e.date.getMonth() + " del " + e.date.getUTCFullYear());
    });
});