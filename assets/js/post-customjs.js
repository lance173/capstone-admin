
    var newMenuDropdownPages = [],
    existingMenuDropdownPages = []

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

        $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/MenuController.php?function=getMenuByItem',
            data: {
                id: idKey
            },
            dataType: 'json',
            success: function (response) {
                console.log(response.data);
                $('#_editID').val(response.data.MenuItemID);
               $('#__page-title').text(response.data.ItemName);
               $('#__editPosition').val(response.data.Position);
               $('#sttcordrpdwnA').val(response.data.Type);
               staticordropdownA();
               ifcustomlinkA1();
               ifcustomlinkA2();
               staticordropdownB();
               ifcustomlinkB1();
               ifcustomlinkB2();
               $('#edit_displaynameA').val(response.data.ItemName);
               $('#edit_displaynameB').val(response.data.ItemName);


               if(response.data.Type === 'Static' && response.data.WebPageID == 0){
                //static and custom
                $('#pageorcustomlinkA1').val('__custom_link__').trigger('change');
                $('#edit_url1').val(response.data.PageLink);
               } else if(response.data.Type === 'Static' && response.data.WebPageID != 0){
                    //static and web page
                    $('#pageorcustomlinkA1').val(response.data.WebPageID)
                    $('#chosencustomlinkA1').css({
                        display: 'none'
                    })
               } else if(response.data.Type === 'Dropdown') {
                    existingMenuDropdownPages = response.data.DropdownItems
                    $('#chosendropdownA').find('.list-group').html(function () {
                        var pages = '';
                        for (var x = 0; x<existingMenuDropdownPages.length; x++) {
                            pages += '<li class="list-group-item d-flex justify-content-between align-items-center border">'
                            +existingMenuDropdownPages[x].DropItemName+ '<button onclick="removeFromExistingDropdownList('+x+', this)" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></li>'
                        }
                        return pages;
                    })
               }
               
            }
        });

    }

    

    function staticordropdownA() {
        var x = document.getElementById("sttcordrpdwnA").value;

        var a = document.getElementById("chosenstaticA");
        var b = document.getElementById("chosendropdownA");

        if (x == "Static") {

            a.style.display = 'block';
            b.style.display = 'none';

        } else if (x == "Dropdown") {

            a.style.display = 'none';
            b.style.display = 'block';
        }
    }

    function ifcustomlinkA1() {
        var chosenpageA1 = document.getElementById("pageorcustomlinkA1").value;

        var w = document.getElementById("chosencustomlinkA1");

        if (chosenpageA1 == "__custom_link__"){
            w.style.display = 'block';
        } else if (chosenpageA1 != "__custom_link__") {
            w.style.display = 'none';
        }
    }

    function ifcustomlinkA2() {
        var chosenpageA2 = document.getElementById("pageorcustomlinkA2").value;

        var z = document.getElementById("chosencustomlinkA2");

        if (chosenpageA2 == "__custom_link__"){
            z.style.display = 'block';
        } else if (chosenpageA2 != "__custom_link__") {
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

        } else if (x == "Dropdown") {

            a.style.display = 'none';
            b.style.display = 'block';
        }
    }

    function ifcustomlinkB1() {
        var chosenpageB1 = document.getElementById("pageorcustomlinkB1").value;

        var w = document.getElementById("chosencustomlinkB1");

        if (chosenpageB1 == "__custom_link__"){
            w.style.display = 'block';
        } else if (chosenpageB1 != "__custom_link__") {
            w.style.display = 'none';
        }
    }

    function ifcustomlinkB2() {
        var chosenpageB2 = document.getElementById("pageorcustomlinkB2").value;

        var z = document.getElementById("chosencustomlinkB2");

        if (chosenpageB2 == "__custom_link__"){
            z.style.display = 'block';
        } else if (chosenpageB2 != "__custom_link__") {
            z.style.display = 'none';
        }
    }




    function clickAddMenuItem(){
        document.getElementById("home_mnuitmform").style.display = "none";
        document.getElementById("mnuitmform").style.display = "none";
        document.getElementById("addnew_mnuitmform").style.display = "block";   
    }

    function createMenu () {

        var position = $('[name=new_link_position]').val();
        var type = $('[name=new_link_type]').val();
        var name = '';
        var url = ''
        var webpageId = 0;

        if(type === 'Dropdown'){
             name = $('[name=new_link_type_dropdown_name]').val()
             type = 'Dropdown'
        }else if(type === 'Static'){
             if($('[name=new_link_type_static_page]').val() === '__custom_link__'){
                name = $('[name=new_link_type_static_page_custom_name]').val()
                url =   $('[name=new_link_type_static_page_custom_url]').val()
            }else{
                webpageId = $('[name=new_link_type_static_page]').val()
            }
        }
       

       var formData = {
        ItemName: name,
        Position: position,
        Type: type,
        PageLink: url,
        WebPageID: webpageId,
        DropdownItems: newMenuDropdownPages
       }

       $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/MenuController.php?function=saveMenuItem',
            data:formData,
            dataType: 'json',
            success: function (response) {
                alert('New menu has been saved');
                window.location.reload()
            }
        });
    }

    function editMenu () {

        var idToedit = $('[name=edit_link_ID]').val();
        var position = $('[name=edit_link_position]').val();
        var type = $('[name=edit_link_type]').val();
        var name = '';
        var url = ''
        var webpageId = 0;
        var successmsg = "Menu item has been edited";

        if(type === 'Dropdown'){
             name = $('[name=edit_link_type_dropdown_name]').val()
             type = 'Dropdown'
        }else if(type === 'Static'){
             if($('[name=edit_link_type_static_page]').val() === '__custom_link__'){
                name = $('[name=edit_link_type_static_page_custom_name]').val()
                url =   $('[name=edit_link_type_static_page_custom_url]').val()
            }else{
                webpageId = $('[name=edit_link_type_static_page]').val()
            }
        }
       

       var formData = {
        MenuItemID: idToedit,
        ItemName: name,
        Position: position,
        Type: type,
        PageLink: url,
        WebPageID: webpageId,
        DropdownItems: existingMenuDropdownPages
       }

       $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/MenuController.php?function=editMenuItem',
            data:formData,
            dataType: 'json',
            success: function (response) {
                // alert('Menu item has been changed');
                // window.location.reload()
                window.location='../views/menu-editor.php?success-msg='+successmsg
            }
        });
    }


    function addNewDropdownPage() {
        var name = '';
        var url = ''
        var webpageId = 0;
        var staticName = ''

        if($('[name=new_link_type_dropdown_item_page]').val() === '__custom_link__'){
            name = $('[name=new_link_type_dropdown_item_page_custom_name]').val()
            url =   $('[name=new_link_type_dropdown_item_page_custom_url]').val()
        }else{
            webpageId = $('[name=new_link_type_dropdown_item_page]').val()
            staticName =  $('[name=new_link_type_dropdown_item_page] option:selected').text()
        }

        var length = newMenuDropdownPages.push({
            DropItemName: name,
            PageLink: url,
            WebPageID: webpageId
        })
        var x = length-1;

        $('#chosendropdownB').find('.list-group').append(function () {
            return '<li class="list-group-item d-flex justify-content-between align-items-center border">'+(name || staticName)+ '<button onclick="removeFromNewDropdownList('+x+', this)" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></li>'
        })
    }

    function addEditDropdownPage() {
        var name = '';
        var url = ''
        var webpageId = 0;
        var staticName = ''

        if($('[name=edit_link_type_dropdown_item_page]').val() === '__custom_link__'){
            name = $('[name=edit_link_type_dropdown_item_page_custom_name]').val()
            url =   $('[name=edit_link_type_dropdown_item_page_custom_url]').val()
        }else{
            webpageId = $('[name=edit_link_type_dropdown_item_page]').val()
            staticName =  $('[name=edit_link_type_dropdown_item_page] option:selected').text()
        }

        var length = existingMenuDropdownPages.push({
            DropItemName: name,
            PageLink: url,
            WebPageID: webpageId
        })
        var x = length-1;

        $('#chosendropdownA').find('.list-group').append(function () {
            return '<li class="list-group-item d-flex justify-content-between align-items-center border">'+(name || staticName)+ '<button onclick="removeFromNewDropdownList('+x+', this)" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></li>'
        })
    }

    function removeFromExistingDropdownList(index, el) {
        existingMenuDropdownPages.splice(index, 1)
        $(el).closest('.list-group-item').remove()
    }
   

   function removeFromNewDropdownList(index, el) {
        newMenuDropdownPages.splice(index, 1)
        $(el).closest('.list-group-item').remove()
    }
   
   function deleteMenuItem() {
    if(!confirm('Are you sure')){
        return
    }
     var idToedit = $('[name=edit_link_ID]').val();
     $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/MenuController.php?function=deleteMenu',
            data:{
                MenuItemID: idToedit
            },
            dataType: 'json',
            success: function (response) {
                alert('Menu item has been deleted');
                window.location.reload()
            }
        });
   }
