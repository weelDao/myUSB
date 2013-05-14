    <html>  
    <head>  
    <script type="text/javascript" src="googleapis.js"></script>  
    <title>Insert title here</title>  
    <script>  
	
	$(document).ready(function(){

	$('#close').click(function(){
	$('#displaybox').hide();
	});	

	});


    function clicker()  
    {  
        var thediv=document.getElementById('displaybox');  
        if(thediv.style.display == "none"){  
            thediv.style.display = "block";  
        }else{  
            thediv.style.display = "none";  
        }  
        return false;  
    }  
    </script>

	<style type="text/css" rel="stylesheet">

	    #displaybox  
    {  
        z-index: 10000; /* to lock the background layout. If set to -1 the background is no locked. If positive, it is locked */  
        filter: alpha(opacity=50); /*older IE*/  
        filter:progid:DXImageTransform.Microsoft.Alpha(opacity=50); /* IE */  
        -moz-opacity: .50; /*older Mozilla*/  
        -khtml-opacity: 0.5;   /*older Safari*/  
        opacity: 0.5;   /*supported by current Mozilla, Safari, and Opera*/  
        background-color:#000000; /* background color of the layout when it appears*/  
        position: fixed; top:0px; left:0px; width:100%; height:100%; color:#FFFFFF; text-align:center; vertical-align:middle;  
    }  

	</style>
  
    </head>  
    <body>  
    <input type=button class=button1 value='Send code' onclick='return clicker();' />  
    <div id="displaybox" style="display: none;">  
        <table >  <!--the table background color is also becoming transparent where I was expecting a solid background -->  
            <tr><td>welcome</td></tr>  
            <tr><td><input type=text name=code /> <!-- this one is also becoming transparent -->  
	    <button id="close">close</button>      
	</table>
    </div>  
    </body>  
    </html>  
