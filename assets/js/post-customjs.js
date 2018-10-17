
    function roleSelect() {
    	var x = document.getElementById("roleselect").value;
        if (x == "System Admin") {
            
            document.getElementById("role-do").innerHTML = "System Admin can:"
                                       
        // } else {
        //     document.getElementById("role-do").innerHTML = "none";
        // }
    	}
	}


	//file upload via anchor tag
	$("#fileupload").click(function(){
		$("#upload-file").click();
	});

