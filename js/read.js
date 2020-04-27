// READ records
$(function readRecords() {
    $.get("getData.php", {}, function (data, status) {
	//alert(data);
		
       $(".records_content").html(data);
});
});