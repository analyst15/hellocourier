<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>

    <button id="btn">click me</button>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      $('#btn').on('click', function(){
        Swal.fire({
        title: 'success',
        text: 'Do you want to continue',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
      })
    </script>
  </body>
</html>
