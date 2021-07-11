$(document).ready(function(){


$(".span_sigh_up").click(function(){

  $(".div_for_login").hide();
  $(".div_for_sign_up").show();
  $(".span_login").css("color","#adb5bd")
  $(this).css("color","black");
})

$(".span_login").click(function(){
  $(".div_for_login").show();
  $(".div_for_sign_up").hide();
  $(".span_sigh_up").css("color","#adb5bd")
  $(this).css("color","black");
})


$("#btn_sign_up").click(function(){



if (check_ipnt_for_sign_up() == 0) {
  confirm_sgn_up();
}else{

}
})


function check_ipnt_for_sign_up(){
  var result  = 0;

  if ($("#full_name").val() == "" || $("#full_name").val() == null || $("#full_name").val() == "undifined") {
    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("enter_full_name")+'</div>');
      $("#full_name").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#full_name").offset().top
      }, 1000);


    },2000);

  }else if($("#phone").val() == "" || $("#phone").val() == null || $("#phone").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("mobileCantEmpty")+'</div>');
      $("#phone").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#phone").offset().top
      }, 1000);


    },2000);


  }
  else if($("#email").val() == "" || $("#email").val() == null || $("#email").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("emailCant")+'</div>');
      $("#email").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#email").offset().top
      }, 1000);


    },2000);


  }

  else if($("#company_name").val() == "" || $("#company_name").val() == null || $("#company_name").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("company_name_cant_empty")+'</div>');
      $("#company_name").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#company_name").offset().top
      }, 1000);


    },2000);


  }

  else if($("#adress").val() == "" || $("#adress").val() == null || $("#adress").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("adressCantEmpty")+'</div>');
      $("#adress").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#adress").offset().top
      }, 1000);


    },2000);


  }

  else if($("#password").val() == "" || $("#password").val() == null || $("#password").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("passwordCant")+'</div>');
      $("#password").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#password").offset().top
      }, 1000);


    },2000);


  }
  else if($("#rep_password").val() == "" || $("#rep_password").val() == null || $("#rep_password").val() == "undifined"){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("repasswordCant")+'</div>');
      $("#rep_password").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#rep_password").offset().top
      }, 1000);


    },2000);


  }

  else if($("#rep_password").val() != $("#password").val() ){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("passNotMatch")+'</div>');
      $("#rep_password").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#rep_password").offset().top
      }, 1000);


    },2000);


  }else if(check_email($("#email").val()) != 0){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("emailexist")+'</div>');
      $("#email").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#email").offset().top
      }, 1000);


    },2000);

  }
  else if(check_phone_exi($("#phone").val()) != 0){

    result = 1;
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("mobileExist")+'</div>');
      $("#email").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#email").offset().top
      }, 1000);


    },2000);

  }


return result;
}


function mylang(word){
   var dat;
  $.ajax({
    dataType: "json",
    async:false,
    url:"config/languages/lang.php",
    method:"GET",
    data:{lang:word},
    success:function(data){
      dat =  data;
    }
    })
    return dat;
}



function confirm_sgn_up(){
  $.ajax({
    async:false,
    url:"log_client.php",
    method:"post",
    data:{sign_up:"sign_up",full_name:$("#full_name").val().trim(),phone:$("#phone").val().trim(),email:$("#email").val().trim(),company_name:$("#company_name").val().trim(),adress:$("#adress").val().trim(),password:$("#password").val().trim()},
    success:function(data){
      $('html, body').animate({
          scrollTop: $("#result_request").offset().top
      }, 1000);

      $("#result_request").html('<div class="alert alert-success text-center" role="alert">'+mylang("succfullAccomplished")+'</div>');
      setTimeout(function(){

     location.reload();

      },2000);
  },error:function(eror){


    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("operationFailed")+'</div>');
    setTimeout(function(){

   location.reload();

    },2000);

  }
    })
}


function check_email(email){

  var result;
 $.ajax({
   dataType: "json",
   async:false,
   url:"log_client.php",
   method:"post",
   data:{check_emil_exist:"check_emil_exist",email:email},
   success:function(data){
    result = data;
   }
   })
   return result;

}

function check_phone_exi(Phone){

  var result;
 $.ajax({
   dataType: "json",
   async:false,
   url:"log_client.php",
   method:"post",
   data:{check_Phone_exist:"check_Phone_exist",Phone:Phone},
   success:function(data){
    result = data;
   }
   })
   return result;

}






$("#btn_login").click(function(){
  if($("#email_login").val() == "" || $("#email_login").val() == null || $("#email_login").val() == "undifined" ){
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("mobileExist")+'</div>');
      $("#email_login").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#email_login").offset().top
      }, 1000);

    },2000);


  }else if($("#passwprd_login").val() == "" || $("#passwprd_login").val() == null || $("#passwprd_login").val() == "undifined" ){

    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-danger text-center" role="alert">'+mylang("mobileExist")+'</div>');
      $("#passwprd_login").focus();
    setTimeout(function(){

      $('html, body').animate({
          scrollTop: $("#passwprd_login").offset().top
      }, 1000);

    },2000);


  }else{

login();
  }
})



function login(){

  $.ajax({
    url:"log_client.php",
    method:"post",
    async:false,
    data:{
    login:"login",email:$("#email_login").val().trim(),passwod:$("#passwprd_login").val().trim()
  },
  success:function(suc){


    console.log(suc);
    if (suc ==1) {

      $('html, body').animate({
          scrollTop: $("#result_request").offset().top
      }, 1000);

      $("#result_request").html('<div class="alert alert-success text-center" role="alert">'+mylang("successfulPreogress")+'</div>');

      setTimeout(function(){
      $("#result_request").hide();
      window.location.href = "info_product.php?Product=prd&product_id=6&cams=1&offer=5685d";

      },3000);
      location.reload();

  }else{
    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-success text-center" role="alert">'+mylang("failedProgress")+'</div>');
    setTimeout(function(){
    $("#result_request").hide();

    },3000);
  }
  },
  error:function(erro){
  console.log(erro);

    $('html, body').animate({
        scrollTop: $("#result_request").offset().top
    }, 1000);

    $("#result_request").html('<div class="alert alert-success text-center" role="alert">'+mylang("failedProgress")+'</div>');
    setTimeout(function(){
    $("#result_request").hide();

    },3000);

  }

})

}


$("#btn_dowlaod").click(function(){

})

function exchange_money(curency){
  var result = "";
  $.ajax({
    dataType:"json",
    url:"exchange.php",
    method:"post",
    async:false,
    data:{exchange:"excange",curency_id:curency},
    success:function(data){

    for (var i = 0; i < data.length; i++) {
      result = data[i].Curenccy_Value;
    }

    },
    error:function(error){

    }

  })
  return result;
}


function initPayPalButton() {
  var price  = $("#inpu_price").val();
  var total_price = price / exchange_money(2);
  var  tl_math = Math.floor(total_price);

  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'gold',
      layout: 'vertical',
      label: 'buynow',

    },

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{"amount":{"currency_code":"EUR","value":tl_math}}]
      });
    },

    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
         success_payment();
      //  alert('Transaction completed by ' + details.payer.name.given_name + '!');
      });
    },

    onError: function(err) {
      console.log(err);
    }
  }).render('#paypal-button-container');
}
initPayPalButton();

function success_payment(){
  $.ajax({
    url:"fetch_data.php",
    method:"post",
    data:{
      set_succ_paypal:"set_succ_paypal",email:$("#client_email").val().trim(),product_id:$("#product_id_").val().trim()
    },success:function(data){
        
    }
  })
}


})
