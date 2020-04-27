$("#searchBtn2").click(function() {
    // SearchBy sensor
   var deviceName = $("#deviceName").val();
   var sensorName = $("#sensorName").val();
   var dateFrom = $("#dateFrom").val();
   var dateTo = $("#dateTo").val();
 
    // Add record
    $.get("searchSensor.php", {
		deviceName: deviceName,
		sensorName: sensorName,
        dateFrom: dateFrom,
        dateTo: dateTo
    }, function (data, status) {
        // close the popup
        $(".Table").html(data);
		console.error(data);
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        //$("#s1").val("");
        //$("#s2").val("");
    });
});
 

