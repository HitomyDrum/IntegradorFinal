window.onload = function() {
    var dateField = document.getElementById("myDate");
    var today = new Date();
    var year = today.getFullYear();
    var maxDate = year + "-12-31";
    
    dateField.setAttribute("min", today.toISOString().split("T")[0]);
    dateField.setAttribute("max", maxDate);
};