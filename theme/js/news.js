$(document).ready(function(){



function add_news(){
  var file_data = $('#sortpicture').prop('files')[0];
  var form_data = new FormData();
  form_data.append('image', file_data);
  form_data.append('add_news', "add_news");
  form_data.append('title', $("#title").val().trim());
  form_data.append('text', $("#text").val().trim());
  form_data.append('email', $("#email__").val().trim());
$.ajax({
  url:"fetch_data.php",
  method:"post",
  cache: false,
  contentType: false,
  processData: false,
  data:form_data,
  success:function(){

  }
})
}


})
