
$(function(){

   

 
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="/tms/home";
              });

        }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }


        else if(response == 'jobadded'){

          swal({
              title: "Success",
              text: "Job Added Successfuly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="employerdashboard";
            });

      }
        else if(response == 'employersuccess'){

          swal({
              title: "Success",
              text: "Login Successful",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="employerdashboard";
            });

      }


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
        allowOutsideClick: false,
        // onBeforeOpen: () => {
        //     Swal.showLoading()
        // },
    });
}



$('.emploerregister').submit(function(e){

    e.preventDefault();
    var staff = {
        url: 'processor/processor.php?action=emploerregister',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});
// newsletter

$('.newsletter-form').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=newsletter',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// employer login



$('.employerlogin').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=employerlogin',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

// change emplyerpassword
$('.employerchangepass').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=employerchangepass',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// employer post job

$('.newjob').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=newjob',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// edit job post

$('.editjob').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'processor/processor.php?action=editjob',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


    
})