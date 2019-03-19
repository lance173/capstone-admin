
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

    function staticordropdown() {
        var x = document.getElementById("sttcordrpdwn").value;

        var a = document.getElementById("chosenstatic");
        var b = document.getElementById("chosendropdown");

        if (x == "Static") {

            a.style.display = 'block';
            b.style.display = 'none';

        } else if (x == "Drop-down") {

            a.style.display = 'none';
            b.style.display = 'block';
        }
    }

    function ifcustomlink1() {
        var chosenpage1 = document.getElementById("pageorcustomlink1").value;

        var w = document.getElementById("chosencustomlink1");

        if (chosenpage1 == "Custom Link"){
            w.style.display = 'block';
        } else if (chosenpage1 != "Custom Link") {
            w.style.display = 'none';
        }
    }

    function ifcustomlink2() {
        var chosenpage2 = document.getElementById("pageorcustomlink2").value;

        var z = document.getElementById("chosencustomlink2");

        if (chosenpage2 == "Custom Link"){
            z.style.display = 'block';
        } else if (chosenpage2 != "Custom Link") {
            z.style.display = 'none';
        }
    }

    function loadApproveArticle(article_id){
        if (confirm('Approve Article?')){
            window.location='../controllers/ArticleController.php?approveID='+article_id;
        }else{
            return false;
        }
    }

    function loadDeleteArticle(article_id){
        if (confirm('Do you want to delete this Article?')){
            window.location='../controllers/ArticleController.php?deleteID='+article_id;
        }else{
            return false;
        }
    }

    function loadEditArticle(article_id){
        window.location='edit-article.php?editID='+article_id;        
    }

	//file upload via anchor tag
	$("#fileupload").click(function(){
		$("#upload-file").click();
	});

    //On add webpage

    $('.input-title').keyup(function(event) {
        newText = event.target.value;
    $('.display-4').text(newText);
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
