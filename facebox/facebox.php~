<!DOCTYPE html> 
<html>
<head>
<title>Facebox on load</title>
<script language="javascript" src="/js/jquery-1.3.2.min.js"></script>
<script language="javascript" src="/facebox/facebox.js"></script>
<link rel="stylesheet" type="text/css" href="/facebox/facebox.css"  />
<script language="Javascript">
$(document).ready(function() {
    $.facebox.settings.opacity = 0.2
});


/////////////////////////////////////////////

$(document).ready(function() {
    $('#mylink').facebox();
})

//////////////////////////////////////////////



function example_login_facebox() {
    $.facebox(function() {
        $.ajax({
            data: { 'login' : $('#login').val(), 'password' : $('#password').val() },
            error: function() {
                $.facebox('There was an error when attempting to log you in. Please try again shortly.');
            },
            success: function(data) {
                $.facebox(data);
            },
            type: 'post',
            url: '/path/to/remote/script'
        });
    });
}



</script>

</head>
<body>

</body>
</html>
