<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Pay</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{url('')}}/public/assets/assets/images/logo.png"/>
    <link rel="apple-touch-icon-precomposed" href="{{url('')}}/public/assets/assets/images/logo.png"/>
    <!-- Font -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/fonts/fonts.css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/fonts/icons-alipay.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/public/assets/assets/styles/styles.css"/>
    <link rel="manifest" href="{{url('')}}/public/assets/assets/manifest.json"
          data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{url('')}}/public/assets/assets/app/icons/icon-192x192.png">

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }


        @keyframes pulseAnim {
            0% {
                transform: scale(1);
                opacity: 0.7
            }
            50% {
                transform: scale(1.2);
                opacity: 0.4
            }
            100% {
                transform: scale(1);
                opacity: 0.7
            }
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #6610f2;

            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            /*  box-shadow: 2px 2px 3px #999; */
            z-index: 100;


        }

        .pulse {
            z-index: 0;
            position: fixed;
            content: '';
            bottom: 35px;
            right: 35px;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            background-color: #6610f2;
            animation-name: pulseAnim;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }

        .my-float {
            margin-top: 16px;

        }


        /* Styles for lazy loader */
        .loader2 {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }


        .loaderpsb {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }

        .loaderwema {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }


    </style>


</head>

<body class="bg_surface_color">

<!-- preloade -->
<div class="preload preload-container">
    <div class="preload-logo">
        <div class="spinner"></div>
    </div>
</div>



<div class="app-header st1">
    <div class="tf-container">
        <div class="tf-topbar d-flex justify-content-center align-items-center">
            <a href="#" class="back-btn"><i class="icon-left white_color"></i></a>
            <h3 class="white_color">Confirmation Code</h3>
        </div>
    </div>
</div>

<div class="card-secton transfer-section">
    <div class="tf-container">
        <div class="tf-balance-box transfer-amount">
            <div class="top mt-1">


                <p> An OTP code has been sent your registered no or email </p>
                <div class="tf-container">
                    <form action="verify-card-otp" class="tf-form mt-5" id="cardForm">
                        @csrf
                        <label>Enter OTP Code</label>
                        <div class="group-input" style="display: flex; align-items: center;">
                            <input
                                type="number"
                                name="code"
                                placeholder="0123345"
                                required
                                style="flex: 1; padding-right: 40px;"
                            >
                            <div style="position: relative; margin-left: -35px; display: flex; align-items: center;">
                                <span class="input-group-append"><i class="icon-wlet"></i></span>
                            </div>

                            <input name="payment_id" value="{{$payment_id}}" hidden>

                        </div>



                        <button type="submit" class="tf-btn accent large my-3" id="submitButton">
                            Verify <span id="loader" style="display:none;">...</span>
                        </button>


                        <p>Didn't get otp? <a href="{{url('')}}/resend-otp-code?payment_id={{$payment_id}}&ref={{$ref}}"> Resend otp</a> </p>
                    </form>
                </div>





            </div>


        </div>

    </div>
</div>





<div class="transfer-card">



        <script src="{{ url('') }}/public/assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script>
            $(document).ready(function () {
                $("#warning").modal('show');
            });
        </script>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Support Channel</h5>

                    </div>
                    <div class="modal-body border-0">


                        <div class="card border-0">

                            <div class="card-body">
                                <div id=""
                                     class="accordion border-0 tf-card-block d-flex align-items-center justify-content-between">
                                    <div class="accordion-item border-0">
                                        <div class="inner d-flex align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V3C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.316071 17.7956 0 17 0ZM8 2H12V5.13L10.55 4.13C10.3867 4.02247 10.1955 3.96516 10 3.96516C9.8045 3.96516 9.61328 4.02247 9.45 4.13L8 5.13V2ZM18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H6V7C6.00048 7.1809 6.05003 7.35829 6.14336 7.51326C6.2367 7.66823 6.37032 7.79498 6.53 7.88C6.68637 7.96029 6.86115 7.99795 7.03671 7.98917C7.21227 7.98039 7.38242 7.92549 7.53 7.83L10 6.2L12.45 7.83C12.6004 7.92905 12.7748 7.98565 12.9547 7.99381C13.1346 8.00198 13.3133 7.96142 13.4721 7.87641C13.6308 7.7914 13.7637 7.66509 13.8566 7.51083C13.9495 7.35657 13.9991 7.18008 14 7V2H17C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V17Z"
                                                    fill="black"/>
                                            </svg>

                                            <div class="content">
                                                <h4><a href="{{$support_channel ?? "#"}}"
                                                       class="fw_6">Product or Item
                                                        Issues
                                                    </a>
                                                </h4>
                                                <p>Get support on products issues only</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="card border-0">

                            <div class="card-body">
                                <div id=""
                                     class="accordion border-0 tf-card-block d-flex align-items-center justify-content-between">
                                    <div class="accordion-item border-0">
                                        <div class="inner d-flex align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 14 14"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_111_79)">
                                                    <path fill-rule="evenodd"
                                                          clip-rule="evenodd"
                                                          d="M0 1.45C0 0.625 0.696 0 1.5 0H12.5C13.304 0 14 0.625 14 1.45V7.05C14 7.875 13.304 8.5 12.5 8.5H1.5C0.696 8.5 0 7.875 0 7.05V1.45ZM9 4.25C9 4.78043 8.78929 5.28914 8.41421 5.66421C8.03914 6.03929 7.53043 6.25 7 6.25C6.46957 6.25 5.96086 6.03929 5.58579 5.66421C5.21071 5.28914 5 4.78043 5 4.25C5 3.71957 5.21071 3.21086 5.58579 2.83579C5.96086 2.46071 6.46957 2.25 7 2.25C7.53043 2.25 8.03914 2.46071 8.41421 2.83579C8.78929 3.21086 9 3.71957 9 4.25ZM3.5 4.5C3.5 4.40151 3.4806 4.30398 3.44291 4.21299C3.40522 4.12199 3.34997 4.03931 3.28033 3.96967C3.21069 3.90003 3.12801 3.84478 3.03701 3.80709C2.94602 3.7694 2.84849 3.75 2.75 3.75C2.65151 3.75 2.55398 3.7694 2.46299 3.80709C2.37199 3.84478 2.28931 3.90003 2.21967 3.96967C2.15003 4.03931 2.09478 4.12199 2.05709 4.21299C2.0194 4.30398 2 4.40151 2 4.5C2 4.69891 2.07902 4.88968 2.21967 5.03033C2.36032 5.17098 2.55109 5.25 2.75 5.25C2.94891 5.25 3.13968 5.17098 3.28033 5.03033C3.42098 4.88968 3.5 4.69891 3.5 4.5ZM11.25 3.75C11.4489 3.75 11.6397 3.82902 11.7803 3.96967C11.921 4.11032 12 4.30109 12 4.5C12 4.69891 11.921 4.88968 11.7803 5.03033C11.6397 5.17098 11.4489 5.25 11.25 5.25C11.0511 5.25 10.8603 5.17098 10.7197 5.03033C10.579 4.88968 10.5 4.69891 10.5 4.5C10.5 4.30109 10.579 4.11032 10.7197 3.96967C10.8603 3.82902 11.0511 3.75 11.25 3.75ZM5.125 10.5C5.125 10.3342 5.05915 10.1753 4.94194 10.0581C4.82473 9.94085 4.66576 9.875 4.5 9.875C4.33424 9.875 4.17527 9.94085 4.05806 10.0581C3.94085 10.1753 3.875 10.3342 3.875 10.5V12.5C3.875 12.6658 3.94085 12.8247 4.05806 12.9419C4.17527 13.0592 4.33424 13.125 4.5 13.125C4.66576 13.125 4.82473 13.0592 4.94194 12.9419C5.05915 12.8247 5.125 12.6658 5.125 12.5V10.5ZM9.5 9.875C9.845 9.875 10.125 10.155 10.125 10.5V12.5C10.125 12.5821 10.1088 12.6633 10.0774 12.7392C10.046 12.815 9.99998 12.8839 9.94194 12.9419C9.88391 13 9.81501 13.046 9.73918 13.0774C9.66335 13.1088 9.58208 13.125 9.5 13.125C9.41792 13.125 9.33665 13.1088 9.26082 13.0774C9.18499 13.046 9.11609 13 9.05806 12.9419C9.00002 12.8839 8.95398 12.815 8.92257 12.7392C8.89117 12.6633 8.875 12.5821 8.875 12.5V10.5C8.875 10.155 9.155 9.875 9.5 9.875ZM7 10.625C7.345 10.625 7.625 10.905 7.625 11.25V13.25C7.625 13.4158 7.55915 13.5747 7.44194 13.6919C7.32473 13.8092 7.16576 13.875 7 13.875C6.83424 13.875 6.67527 13.8092 6.55806 13.6919C6.44085 13.5747 6.375 13.4158 6.375 13.25V11.25C6.375 10.905 6.655 10.625 7 10.625Z"
                                                          fill="black"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_111_79">
                                                        <rect width="14" height="14"
                                                              fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>


                                            <div class="content">
                                                <h4>
                                                    <a href=""
                                                       class="fw_6"> Instant Payment
                                                        Issues only
                                                    </a>
                                                </h4>
                                                <p>Get support on instant payment issues
                                                    channel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="float"
           target="_blank">
            <i class="fa fa-comment my-float"></i>
        </a>
        <div class="pulse"></div>


        <script type="text/javascript"
                src="{{url('')}}/public/assets/assets/javascript/jquery.min.js"></script>
        <script type="text/javascript"
                src="{{url('')}}/public/assets/assets/javascript/bootstrap.min.js"></script>
        <script type="text/javascript"
                src="{{url('')}}/public/assets/assets/javascript/main.js"></script>

        <script>
            document.getElementById("openModalBtncardpay").onclick = function () {
                document.getElementById("myModalcardpay").style.display = "block";
            };

            document.getElementById("closecardpay").onclick = function () {
                document.getElementById("myModalcardpay").style.display = "none";
            };


        </script>



    </div>






</body>

</html>

