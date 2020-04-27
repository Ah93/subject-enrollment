 $('#selectType').change(function(){
        $.ajax({
        type:'get',
        url:'sensorDashboard.php',
        data: 'id='+ $('#selectType').val(),                
        success: function(reply_data){
            console.log(reply_data);
            $('#loadDiv').val(reply_data);
          }
        });
     });