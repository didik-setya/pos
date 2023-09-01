<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="pagestyle" href="<?= base_url('assets/package') ?>/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <link href="<?= base_url('assets/package') ?>/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/package') ?>/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url('assets/package') ?>/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets/package') ?>/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/swal/dist/sweetalert2.all.min.js') ?>"></script>


    <title>Login</title>
</head>
<body style="background: #f0f0f0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5>Login Page</h5>
                        <hr>
                        <form action="" method="post">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" id="csrf-hash">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control mb-3">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">

                            <button class="btn btn-danger mt-3 w-100" id="btn-submit" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            
        })


        function success_alert(msg){
            Swal.fire({
                icon: 'success',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        }

        function error_alert(msg){
            Swal.fire({
                icon: 'error',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        }
    </script>
</body>
</html>