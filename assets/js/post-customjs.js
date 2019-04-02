
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

//On Articles

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

    function loadDeleteWebPage(page_id){
        if (confirm('Do you want to delete this Page?')){
            window.location='../controllers/WebPagesController.php?deleteID='+page_id;
        }else{
            return false;
        }
    }

    function loadRestoreWebPage(page_id){
        if (confirm('Restore this Page?')){
            window.location='../controllers/WebPagesController.php?restoreID='+page_id;
        }else{
            return false;
        }
    }

    function loadBinWebPage(page_id){
        if (confirm('Place Page to Bin?')){
            window.location='../controllers/WebPagesController.php?binID='+page_id;
        }else{
            return false;
        }
    }

    function loadEditWebPage(page_id){
        window.location='edit-webpage.php?editID='+page_id;        
    }


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


    //On Menu Editor
    
    function selectMenuItem(id, idKey) {

        var a = id;
        var i;
        var table = document.getElementById("menuitems-table");
        var tr = table.getElementsByTagName("tr");


        var b = "clickmnitm0";
        //split string "clickmnitm0" into "clickmitm" "0"
        var num1 = parseInt(b.match(/\d+$/));
        var pos1 = b.indexOf(num1);
        var str1 = b.slice(0,pos1);
        
        var c = "itemfromprevmenu0";
        //split string "itemfromprevmenu0" into "itemfromprevmenu" "0"
        var num2 = parseInt(c.match(/\d+$/));
        var pos2 = c.indexOf(num2);
        var str2 = c.slice(0,pos2);


        for(i = 0; i < tr.length; i++){

            num1++;
            b = str1 + num1;

            num2++;
            c = str2 + num2;

            var x = document.getElementById(b);
            var y = document.getElementById(c);

            if(a == b && num1 == num2 ) {
                x.style.backgroundColor = "#6ba3ff";
                x.style.border = "3px solid #6ba3ff";
                x.style.color = "#FFF";

                y.style.backgroundColor = "#FFB041";
                    
    
            } else {
                x.style.backgroundColor = "#FFF";
                x.style.border = "0px";
                x.style.color = "#333";

                y.style.backgroundColor = "#02A554";
            }

            if(a == "clickmnitm1"){
                document.getElementById("home_mnuitmform").style.display = "block";
                document.getElementById("mnuitmform").style.display = "none";
                document.getElementById("addnew_mnuitmform").style.display = "none";
            } else {
                document.getElementById("home_mnuitmform").style.display = "none";
                document.getElementById("mnuitmform").style.display = "block";
                document.getElementById("addnew_mnuitmform").style.display = "none";                        
            }
        }

        window.history.pushState('page2', 'Title', 'menu-editor.php?editID='+idKey)

    }
    

    function staticordropdownA() {
        var x = document.getElementById("sttcordrpdwnA").value;

        var a = document.getElementById("chosenstaticA");
        var b = document.getElementById("chosendropdownA");

        if (x == "Static") {

            a.style.display = 'block';
            b.style.display = 'none';

        } else if (x == "Drop-down") {

            a.style.display = 'none';
            b.style.display = 'block';
        }
    }

    function ifcustomlinkA1() {
        var chosenpageA1 = document.getElementById("pageorcustomlinkA1").value;

        var w = document.getElementById("chosencustomlinkA1");

        if (chosenpageA1 == "Custom Link"){
            w.style.display = 'block';
        } else if (chosenpageA1 != "Custom Link") {
            w.style.display = 'none';
        }
    }

    function ifcustomlinkA2() {
        var chosenpageA2 = document.getElementById("pageorcustomlinkA2").value;

        var z = document.getElementById("chosencustomlinkA2");

        if (chosenpageA2 == "Custom Link"){
            z.style.display = 'block';
        } else if (chosenpageA2 != "Custom Link") {
            z.style.display = 'none';
        }
    }

    function staticordropdownB() {
        var x = document.getElementById("sttcordrpdwnB").value;

        var a = document.getElementById("chosenstaticB");
        var b = document.getElementById("chosendropdownB");

        if (x == "Static") {

            a.style.display = 'block';
            b.style.display = 'none';

        } else if (x == "Drop-down") {

            a.style.display = 'none';
            b.style.display = 'block';
        }
    }

    function ifcustomlinkB1() {
        var chosenpageB1 = document.getElementById("pageorcustomlinkB1").value;

        var w = document.getElementById("chosencustomlinkB1");

        if (chosenpageB1 == "Custom Link"){
            w.style.display = 'block';
        } else if (chosenpageB1 != "Custom Link") {
            w.style.display = 'none';
        }
    }

    function ifcustomlinkB2() {
        var chosenpageB2 = document.getElementById("pageorcustomlinkB2").value;

        var z = document.getElementById("chosencustomlinkB2");

        if (chosenpageB2 == "Custom Link"){
            z.style.display = 'block';
        } else if (chosenpageB2 != "Custom Link") {
            z.style.display = 'none';
        }
    }


    function addAmenuItem(){
        document.getElementById("home_mnuitmform").style.display = "none";
        document.getElementById("mnuitmform").style.display = "none";
        document.getElementById("addnew_mnuitmform").style.display = "block";   
    }
