
    var newMenuDropdownPages = [],
    existingMenuDropdownPages = []

    function roleSelect() {
        var x = document.getElementById("siteRole").value;

        var w = document.getElementById("role-sysad");
        var y = document.getElementById("role-editr");
        var z = document.getElementById("role-autr");

        if (x == "System Administrator") {
            
            w.style.display = 'block';
            y.style.display = 'none';
            z.style.display = 'none';
                                       
        } else if (x == "Editor") {

            y.style.display = 'block';
            w.style.display = 'none';
            z.style.display = 'none';

        } else if (x == "Author") {

            z.style.display = 'block';
            w.style.display = 'none';
            y.style.display = 'none';
        }
    }

//On Articles

    function loadApproveArticle(article_id, siterole){

        if(siterole == 'Author'){
            alert( "You don't have the clearance to continue this action");
            return false;
        } else {

            if (confirm('Approve Article?')){
                window.location='../controllers/ArticleController.php?approveID='+article_id;
            }else{
                return false;
            }
        }
    }

    function loadDeleteArticle(article_id, isAuthorOfArticle, siterole){
        if(isAuthorOfArticle == 'false' && siterole == 'Author'){
            alert( "You cannot delete this article. You can only delete articles you wrote.");
            return false;
        } else if(isAuthorOfArticle == 'true' && siterole == 'Author'){
            if (confirm('Do you want to delete this Article?')){
                window.location='../controllers/ArticleController.php?deleteID='+article_id;
            }else{
                return false;
            }
        } else {
            if (confirm('Do you want to delete this Article?')){
                window.location='../controllers/ArticleController.php?deleteID='+article_id;
            }else{
                return false;
            }
        }
    }

    function loadEditArticle(article_id, isAuthorOfArticle, siterole){
        if(isAuthorOfArticle == 'false' && siterole == 'Author'){
            alert("You cannot edit this article. You can only edit articles you wrote.");
            return false;
        } else if(isAuthorOfArticle == 'true' && siterole == 'Author'){
            window.location='edit-article.php?editID='+article_id;    
        } else {
            window.location='edit-article.php?editID='+article_id; 
        }    
    }

    function viewLiveArticle(article_id){
        window.location='http://localhost/capstone-user/views/ArticlePage.php?id='+article_id;
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
        if (confirm('Do you want to delete this Page permanently?')){
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

    function viewLiveWebPage(page_id){
        window.location='http://localhost/capstone-user/views/webpage.php?viewID='+page_id;
    }


    //Students 

    function loadDeleteStudent(StudentID){
        if (confirm('Delete User?')){
            window.location='../controllers/StudentUserController.php?deleteID='+StudentID;
        }else{
            return false;
        }
    }

    function loadUnblockStudents(StudentID){
        window.location='../controllers/StudentUserController.php?unblockID='+StudentID;
    }

    //Admin 

    function loadDeactAdmin(adminID, currentUser){
        if(adminID != currentUser){
            if (confirm('Deactivate User?')){
                window.location='../controllers/AdminUserController.php?deactID='+adminID;
            }else{
                return false;
            }
        } else {
            alert("You cannot deactivate yourself");
            return false;
        }
    }

    function loadReactivateAdmin(adminID, currentUser){
        if(adminID != currentUser){
            if (confirm('Reactivate User?')){
                window.location='../controllers/AdminUserController.php?reactiveID='+adminID;
            }else{
                return false;
            }
        } else {
            alert("You cannot reactivate yourself");
            return false;
        }
    }

    //Reports

    function loadViewReport(report_id){
        window.location='reported-user.php?viewID='+report_id;
    }

    function readyBlockUser(reported_userid, status)
    {
        if(status == 'BLOCKED'){
            alert("Student already blocked");
            return false;
        } else {
            window.location='../controllers/ReportController.php?blockID='+reported_userid;
        }
    }

    function readyDeleteReport(reported_userid){
        window.location='../controllers/ReportController.php?deleteID='+reported_userid;
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
        var successmsg = "Menu item has been added";

        if(type === 'Dropdown'){
             name = $('[name=new_link_type_dropdown_name]').val()
             type = 'Dropdown'
        }else if(type === 'Static'){
             if($('[name=new_link_type_static_page]').val() === '__custom_link__'){
                name = $('[name=new_link_type_static_page_custom_name]').val()
                url =   $('[name=new_link_type_static_page_custom_url]').val()
            }else{
                webpageId = $('[name=new_link_type_static_page]').val()
                url = 'http://localhost/capstone-user/views/webpage.php?viewID='+webpageId;
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
                // alert('New menu has been saved');
                // window.location.reload()
                window.location='../views/menu-editor.php?success-msg='+successmsg
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
                url = 'http://localhost/capstone-user/views/webpage.php?viewID='+webpageId
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
            name =  $('[name=new_link_type_dropdown_item_page] option:selected').text()
            url = 'http://localhost/capstone-user/views/webpage.php?viewID='+webpageId
        }

        var length = newMenuDropdownPages.push({
            DropItemName: name,
            PageLink: url,
            WebPageID: webpageId
        })
        var x = length-1;

        $('#chosendropdownB').find('.list-group').append(function () {
            return '<li class="list-group-item d-flex justify-content-between align-items-center border">'+(name)+ '<button onclick="removeFromNewDropdownList('+x+', this)" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></li>'
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
            name =  $('[name=edit_link_type_dropdown_item_page] option:selected').text()
            url = 'http://localhost/capstone-user/views/webpage.php?viewID='+webpageId
        }

        var length = existingMenuDropdownPages.push({
            DropItemName: name,
            PageLink: url,
            WebPageID: webpageId
        })
        var x = length-1;

        $('#chosendropdownA').find('.list-group').append(function () {
            return '<li class="list-group-item d-flex justify-content-between align-items-center border">'+(name)+ '<button onclick="removeFromNewDropdownList('+x+', this)" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></li>'
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

    var successmsg = "Menu item has been deleted";

    if(!confirm('Are you sure')){
        return
    }
     var idToDelete = $('[name=edit_link_ID]').val();
     $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/MenuController.php?function=deleteMenu',
            data:{
                MenuItemID: idToDelete
            },
            dataType: 'json',
            success: function (response) {
                // alert('Menu item has been deleted');
                // window.location.reload()
                window.location='../views/menu-editor.php?success-msg='+successmsg
            }
        });
   }

    function md5(d){
        result = M(V(Y(X(d),8*d.length)));return result.toLowerCase()};function M(d){for(var _,m="0123456789ABCDEF",f="",r=0;r<d.length;r++)_=d.charCodeAt(r),f+=m.charAt(_>>>4&15)+m.charAt(15&_);return f}function X(d){for(var _=Array(d.length>>2),m=0;m<_.length;m++)_[m]=0;for(m=0;m<8*d.length;m+=8)_[m>>5]|=(255&d.charCodeAt(m/8))<<m%32;return _}function V(d){for(var _="",m=0;m<32*d.length;m+=8)_+=String.fromCharCode(d[m>>5]>>>m%32&255);return _}function Y(d,_){d[_>>5]|=128<<_%32,d[14+(_+64>>>9<<4)]=_;for(var m=1732584193,f=-271733879,r=-1732584194,i=271733878,n=0;n<d.length;n+=16){var h=m,t=f,g=r,e=i;f=md5_ii(f=md5_ii(f=md5_ii(f=md5_ii(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_ff(f=md5_ff(f=md5_ff(f=md5_ff(f,r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+0],7,-680876936),f,r,d[n+1],12,-389564586),m,f,d[n+2],17,606105819),i,m,d[n+3],22,-1044525330),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+4],7,-176418897),f,r,d[n+5],12,1200080426),m,f,d[n+6],17,-1473231341),i,m,d[n+7],22,-45705983),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+8],7,1770035416),f,r,d[n+9],12,-1958414417),m,f,d[n+10],17,-42063),i,m,d[n+11],22,-1990404162),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+12],7,1804603682),f,r,d[n+13],12,-40341101),m,f,d[n+14],17,-1502002290),i,m,d[n+15],22,1236535329),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+1],5,-165796510),f,r,d[n+6],9,-1069501632),m,f,d[n+11],14,643717713),i,m,d[n+0],20,-373897302),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+5],5,-701558691),f,r,d[n+10],9,38016083),m,f,d[n+15],14,-660478335),i,m,d[n+4],20,-405537848),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+9],5,568446438),f,r,d[n+14],9,-1019803690),m,f,d[n+3],14,-187363961),i,m,d[n+8],20,1163531501),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+13],5,-1444681467),f,r,d[n+2],9,-51403784),m,f,d[n+7],14,1735328473),i,m,d[n+12],20,-1926607734),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+5],4,-378558),f,r,d[n+8],11,-2022574463),m,f,d[n+11],16,1839030562),i,m,d[n+14],23,-35309556),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+1],4,-1530992060),f,r,d[n+4],11,1272893353),m,f,d[n+7],16,-155497632),i,m,d[n+10],23,-1094730640),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+13],4,681279174),f,r,d[n+0],11,-358537222),m,f,d[n+3],16,-722521979),i,m,d[n+6],23,76029189),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+9],4,-640364487),f,r,d[n+12],11,-421815835),m,f,d[n+15],16,530742520),i,m,d[n+2],23,-995338651),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+0],6,-198630844),f,r,d[n+7],10,1126891415),m,f,d[n+14],15,-1416354905),i,m,d[n+5],21,-57434055),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+12],6,1700485571),f,r,d[n+3],10,-1894986606),m,f,d[n+10],15,-1051523),i,m,d[n+1],21,-2054922799),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+8],6,1873313359),f,r,d[n+15],10,-30611744),m,f,d[n+6],15,-1560198380),i,m,d[n+13],21,1309151649),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+4],6,-145523070),f,r,d[n+11],10,-1120210379),m,f,d[n+2],15,718787259),i,m,d[n+9],21,-343485551),m=safe_add(m,h),f=safe_add(f,t),r=safe_add(r,g),i=safe_add(i,e)}return Array(m,f,r,i)}function md5_cmn(d,_,m,f,r,i){return safe_add(bit_rol(safe_add(safe_add(_,d),safe_add(f,i)),r),m)}function md5_ff(d,_,m,f,r,i,n){return md5_cmn(_&m|~_&f,d,_,r,i,n)}function md5_gg(d,_,m,f,r,i,n){return md5_cmn(_&f|m&~f,d,_,r,i,n)}function md5_hh(d,_,m,f,r,i,n){return md5_cmn(_^m^f,d,_,r,i,n)}function md5_ii(d,_,m,f,r,i,n){return md5_cmn(m^(_|~f),d,_,r,i,n)}function safe_add(d,_){var m=(65535&d)+(65535&_);return(d>>16)+(_>>16)+(m>>16)<<16|65535&m}function bit_rol(d,_){return d<<_|d>>>32-_
    }


    //Password Error checker
    function checkPassword(form){
  
    if(md5(form.inputOldPassword.value) != form.oldPassConfirm.value) {
        alert("Error: Password does not match your current password!");
        form.inputNewPassword.focus();
        return false;
    }

    if(form.inputNewPassword.value != "" && form.inputNewPassword.value == form.inputConfPassword.value) {
      if(form.inputNewPassword.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.inputNewPassword.focus();
        return false;
      }

      if(form.inputNewPassword.value == md5(form.inputOldPassword.value) && md5(form.inputOldPassword.value) != form.oldPassConfirm.value) {
        alert("Error: Password must be different from previous password!");
        form.inputNewPassword.focus();
        return false;
      }

    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.inputNewPassword.focus();
      return false;
    }

        alert("Password successfully updated!");
        return true;
    }


    //Change Admin Role
    function readyChangeAdminRole(AdminID){
            $.ajax({
            method: 'POST',
            url: '../../../capstone-admin/controllers/AdminUserController.php?function=loadEditAdminRole',
            data: {
                id: AdminID
            },
            dataType: 'json',
            success: function (response) {
                console.log(response.data);
                $('#changerole-adminphoto').attr('src',response.data.Photo);
                $('#changerole-adminfirstname').text(response.data.FirstName);
                $('#changerole-adminlastname').text(response.data.LastName);
                $('#changerole-adminposition').text(response.data.Position);
                $('#changerole-adminID').val(response.data.AdminID);
                $('#currentRole').val(response.data.SiteRole);
                $('#siteRole').val(response.data.SiteRole).trigger('change');
            }
        }
        );
    }

    function checkChangeRole(form){

        if(form.currentUser.value == form.changeroleadminID.value){
            alert("You cannot change your own role!");
            return false;
        }
        if(form.currentRole.value == form.siteRole.value){
            alert( "Admin is already a " +form.siteRole.value);
            return false;
        } else {           
            return true;
        }
    }

