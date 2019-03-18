
//preview image before upload
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

function preview_imageaddwebpage(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output1 = document.getElementById('output_image');
  var output2 = document.getElementById('pagetitlejumboimage');
  output1.src = reader.result;
  output2.style.backgroundImage = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);

}


//preview featured image and publish show and hide

function hdeshwftimg()
{
  var x = document.getElementById("featimg-down");
  var y = document.getElementById("featimg-up");
  var z = document.getElementById("featimg-body");

  if(x.style.display == "none"){
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";

  } else {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "block";
  }  
}

function hdeshwpblsh()
{
  var x = document.getElementById("pblsh-down");
  var y = document.getElementById("pblsh-up");
  var z = document.getElementById("pblsh-body");

  if(x.style.display == "none"){
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";

  } else {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "block";
  }
  
}

//On Slide editor


//preview image before upload on slide1
function preview_imageslide1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image-slide1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

//preview image before upload on slide2
function preview_imageslide2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image-slide2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

//preview image before upload on slide3
function preview_imageslide3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image-slide3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

//show & hide Edit | View | Delete
function showpgelnks(id) {
	x = id;
    document.getElementById(x).style.visibility = "visible";
}

function hidepgelnks(id) {
	x = id;
    document.getElementById(x).style.visibility = "hidden";
}

//show View Details
function showvwdetails(id) {
  x = id;
    document.getElementById(x).style.visibility = "visible";
}

function hidevwdetails(id) {
  x = id;
    document.getElementById(x).style.visibility = "hidden";
}

//activate side nav item

function activePageAtSideNav(id) {
    x = id;
    document.getElementById(x).style.color = "#fff";
    document.getElementById(x).style.backgroundColor = "#6e7884";

}