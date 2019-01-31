
    function roleSelect() {
    	var x = document.getElementById("roleselect").value;

        var w = document.getElementById("role-sysad");
        var y = document.getElementById("role-editr");
        var z = document.getElementById("role-autr");

        if (x == "System Admin") {
            
            w.style.display = 'block';
            y.style.display = 'none';
            z.style.display = 'none';
                                       
        } else if (x == "Editor") {

            y.style.display = 'block';
            w.style.display = 'none';
            z.style.display = 'none';

    	} else if (x == "Author / Writer") {

            z.style.display = 'block';
            w.style.display = 'none';
            y.style.display = 'none';
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


    