$(document).ready(function(){
    $("#load").on("click",function(e){
        $.ajax({
            url : "ajax-load.php",
            type : "GET",
            success : function(data){
                console.log(data)
                $("#table").html(data)
            }
        });
    });
})