 $( document ).ready(function() {
 // Add record
    $.get("getName.php", {
    }, function (data, status) {
        // close the popup
        $(".selectName").html(data);
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        //$("#s1").val("");
        //$("#s2").val("");
    });

 });

