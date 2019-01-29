
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

    //On Slide editor

    //file upload via anchor tag
    $("#fileupload1").click(function(){
        $("#upload-file1").click();
    });

    $("#fileupload2").click(function(){
        $("#upload-file2").click();
    });

    $("#fileupload3").click(function(){
        $("#upload-file3").click();
    });


    