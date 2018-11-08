
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