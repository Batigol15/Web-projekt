function provjeriUsername(){

    jQuery.ajax({
        url:"../funkcije/provjera.funk.php",
        data: 'username='+$("#username").val(),
        type: "POST",

        success:function(data){
            $("#usernamespan").html(data);
        },
        error:function(){}
    });




}