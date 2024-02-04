<!DOCTYPE html>
<html lang="en">

<head>
    <title>500</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 150px;
            background-color: #C4CCD9;
        }

        .error-main {
            background-color: #fff;
            /* box-shadow: 0px 10px 10px -10px #5D6572; */
        }

        .error-main h1 {
            font-weight: bold;
            color: #3453c2;
            font-size: 150px;
            text-shadow: 2px 4px 5px #6E6E6E;
        }

        .error-main h6 {
            color: #42494F;
            font-size: 20px;
        }

        .error-main p {
            color: #9897A0;
            font-size: 15px;
        }

        .home {
            color: #fff;
        }

        .home:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    @include('layouts.navBar')

    <div class="container mt-5">
        <div class="row text-center" style="margin-top:120px ; background-color: #fafeff;">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main" style="background-color: #fafeff">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1 d-flex justify-content-center flex-column align-items-center">
                        <!-- <h1 class="m-0">500</h1> -->
                        <img src="/img/worng.png" class="" alt="">
                        <span class="d-flex mt-3 justify-content-between align-items-center">
                            <x-typ-warning style="width: 25px;height: 25px;" />
                            <h2 class="text-nowrap fw-bold ms-2">Oops! Something Went Wrong!</h2>
                        </span>
                        <p class="text-nowrap">There is a problem or you do not have permission to view this page</p>
                        <a class="btn text-white  mt-4 home" href="/" style="font-size: 13px;background-color: #3453c2;">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>