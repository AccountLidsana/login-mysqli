


<?php

include "connect.php";

?>




    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <!-- link fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&family=Noto+Sans+Lao+Looped:wght@400&display=swap" rel="stylesheet">
            <!-- bootstrap 5 css -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <!-- bootstrap 5 script  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

            <style>
            body {
                /* font-family: 'Noto Sans Lao', sans-serif; */
                font-family: 'Noto Sans Lao Looped', sans-serif;
            }

            .btn,.card{
                border-radius: 30px !important;
            }
            </style>
        </head>

        <body>

                <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
                    <div class="card" style="width:30rem">
                        <div class="card-body">
                            <h2 class="text-center">ເຂົ້າສູ່ລະບົບ</h2>
                            <form action="chklogin.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">ຊື່ຜູ້ໃຊ້ງານ</label>
                                    <input type="text" name="username" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ງານ">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ລະຫັດຜ່ານ</label>
                                    <input type="password" name="password" class="form-control" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ">
                                </div>
                                <button class="btn btn-primary w-100" name="submit">login</button>
                            </form>
                        </div>
                    </div>
                </div>

        </body>
        </html>