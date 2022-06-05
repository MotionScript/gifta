//confirm order
$(function(){
    $(document).on('click', '#confirm', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Confirm This Order!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Confirm Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Confirmed!',
        'Order Confirmed.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });


//process order
$(function(){
    $(document).on('click', '#processing', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Process This Order!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Process Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Processed!',
        'Order Processed.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });




//picked order
$(function(){
    $(document).on('click', '#picked', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Mark This Order as Picked!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Pick Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Picked!',
        'Order Marked as Picked.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });





    

//shiped order
$(function(){
    $(document).on('click', '#shipped', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Mark This Order as Shipped!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Ship Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Shipped!',
        'Order Marked as Shipped.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });



    
//picked order
$(function(){
    $(document).on('click', '#picked', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Mark This Order as Picked!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Pick Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Picked!',
        'Order Marked as Picked.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });





    

//deleivered order
$(function(){
    $(document).on('click', '#delivered', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Mark This Order as Delivered!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Deliver Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Shipped!',
        'Order Marked as Delivered.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });



    
//deleivered order
$(function(){
    $(document).on('click', '#cancel', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Cancel This Order!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Yes, Cancel Order!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Cancelled!',
        'Order Marked as Cancelled.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });




    
    
//delete
$(function(){
    $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        
Swal.fire({
    title: 'Are you sure?',
    text: "To Deleted This Data!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Yes, Delete!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Data Has Been Deleted Successfully.',
        'success'
      )
      window.location.href = link
    }
  });

    
  });
          
    });



    //withdraw
$(function(){
  $(document).on('click', '#withdraw', function(e){
      e.preventDefault();
      var link = $(this).attr("href");

      
Swal.fire({
  title: 'Error',
  text: "Something went wrong",
  icon: 'error',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'back',
  confirmButtonText: 'Continue!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Alright!',
      'Data Has Been Deleted Successfully.',
      'success'
    )
    window.location.href = link
  }
});

  
});
        
  });







//credit user
$(function(){
  $(document).on('click', '#credit', function(e){
      e.preventDefault();
      var link = $(this).attr("href");

      
Swal.fire({
  title: 'Are you sure?',
  text: "To Credit This User!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'No',
  confirmButtonText: 'Yes, Credit!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Credited!',
      'User Has Been Credited Successfully.',
      'success'
    )
    window.location.href = link
  }
});

  
});
        
  });











  //toastr notification
window.addEventListener('alert', event => { 
  toastr[event.detail.type](event.detail.message, 
  event.detail.title ?? ''), toastr.options = {
     "closeButton": true,
     "progressBar": true,
   }
 });