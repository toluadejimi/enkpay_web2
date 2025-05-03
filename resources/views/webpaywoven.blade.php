<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint Pay Payment Modal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #333;
        }

        .modal-content {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-body {
            text-align: center;
        }


        .amount-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
        }

        .note {
            font-size: 12px;
            color: red;
        }

        .justify-between {
            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>

@php
    if($payable_amount > 11000){
        $f_amount = $payable_amount + 300;
    }else{
      $f_amount = $payable_amount + 100;
    }

@endphp

<div style="background: rgba(0,0,0,0.53)" class="modal show d-block" tabindex="-1">
    <div class="modal-dialog-centered">
        <div style="background: rgb(247,248,255)" class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title"><span class="text-danger">Instant</span> Payment</h5>
                <button type="button" class="btn-close" aria-label="Close"></button>
                <script>function redirectToWithDelay(url, delay) {
                        setTimeout(function() {
                            window.location.href = url;
                        }, delay);
                    }</script>
            </div>



            <div class="modal-body">

                <h6 class="text-secondary my-3">Pay to {{$bname ?? "Name"}}</h6>


                <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab"
                                data-bs-target="#transfer"
                                type="button" role="tab">Transfer
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btc" data-bs-toggle="tab" data-bs-target="#btc" type="button"
                                role="tab">BTC
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="usdt-tab" data-bs-toggle="tab" data-bs-target="#usdt" type="button"
                                role="tab">USDT
                        </button>
                    </li>


                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ussd-tab" data-bs-toggle="tab" data-bs-target="#ussd" type="button"
                                role="tab">USSD
                        </button>
                    </li>

                </ul>


                <div class="tab-content mt-3">
                    <div class="tab-pane fade" id="card" role="tabpanel">On Maintenance</div>
                    <div class="tab-pane fade show active" id="transfer" role="tabpanel">
                        <div class="amount-box">



                            <p class="center">Please proceed to transfer <br> the <strong class="text-danger">exact
                                    amount</strong> below:
                            </p>


                            <strong>Amount to pay</strong> <h4 class="strong">NGN {{number_format($f_amount)}}</h4>


                            <hr>
                            <p class="justify-between"><strong>Bank:</strong> <span>{{$bank_name}}</span></p>
                            <hr>
                            <div class="flex items-center justify-between py-2">
                                <strong class="text-sm">Acct No:</strong>
                                <div class="flex items-center space-x-2 cursor-pointer" onclick="copyAccountNumber()">
                                    <span id="accountNumber" class="text-sm font-mono select-none">{{$account_no}}</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.569 4.25H13.794C14.912 4.25 15.624 4.25 16.229 4.412C17.0346 4.62763 17.7693 5.05159 18.3591 5.64123C18.949 6.23087 19.3731 6.96542 19.589 7.771C19.75 8.376 19.75 9.088 19.75 10.206V11.83C19.75 12.365 19.75 12.81 19.72 13.175C19.69 13.555 19.622 13.911 19.45 14.248C19.1866 14.7654 18.7662 15.1862 18.249 15.45C17.911 15.622 17.555 15.69 17.175 15.72C16.81 15.75 16.365 15.75 15.831 15.75H14.169C13.635 15.75 13.189 15.75 12.825 15.72C12.445 15.69 12.089 15.622 11.752 15.45C11.2346 15.1866 10.8138 14.7662 10.55 14.249C10.378 13.911 10.31 13.555 10.28 13.175C10.25 12.81 10.25 12.365 10.25 11.83V7.57C10.25 7.046 10.25 6.641 10.344 6.29C10.4688 5.8237 10.7142 5.39848 11.0554 5.05706C11.3967 4.71564 11.8218 4.47006 12.288 4.345C12.64 4.25 13.045 4.25 13.569 4.25ZM13.667 5.751C12.998 5.751 12.811 5.757 12.677 5.794C12.4651 5.8507 12.2719 5.96213 12.1168 6.11713C11.9616 6.27212 11.8499 6.4652 11.793 6.677C11.756 6.812 11.75 6.999 11.75 7.667V11.8C11.75 12.372 11.75 12.757 11.775 13.052C11.798 13.34 11.84 13.477 11.886 13.568C12.006 13.803 12.197 13.994 12.433 14.114C12.523 14.16 12.66 14.202 12.948 14.225C13.243 14.249 13.628 14.25 14.2 14.25H15.8C16.372 14.25 16.757 14.25 17.052 14.225C17.34 14.202 17.477 14.16 17.567 14.114C17.8024 13.9944 17.9939 13.8032 18.114 13.568C18.16 13.477 18.202 13.34 18.225 13.053C18.249 12.757 18.25 12.373 18.25 11.8V10.333C18.25 9.887 18.25 9.535 18.244 9.25H16.5C16.0359 9.25 15.5908 9.06563 15.2626 8.73744C14.9344 8.40925 14.75 7.96413 14.75 7.5V5.756C14.389 5.75085 14.028 5.74985 13.667 5.751ZM16.25 6V7.5C16.25 7.638 16.362 7.75 16.5 7.75H18C17.6694 6.95931 17.0407 6.33063 16.25 6ZM8.496 8.25H8.5C8.69891 8.25 8.88968 8.32902 9.03033 8.46967C9.17098 8.61032 9.25 8.80109 9.25 9C9.25 9.19891 9.17098 9.38968 9.03033 9.53033C8.88968 9.67098 8.69891 9.75 8.5 9.75C8.25 9.75 7.773 9.75 7.31 9.776C7.10191 9.78607 6.89437 9.80542 6.688 9.834C6.60196 9.84578 6.51678 9.86315 6.433 9.886C6.19741 10.0059 6.00591 10.1974 5.886 10.433C5.84 10.523 5.798 10.66 5.775 10.948C5.751 11.243 5.75 11.628 5.75 12.2V15.8C5.75 16.372 5.75 16.757 5.775 17.052C5.798 17.34 5.84 17.477 5.886 17.567C6.006 17.803 6.197 17.994 6.433 18.114C6.523 18.16 6.66 18.202 6.947 18.225C7.243 18.249 7.627 18.25 8.2 18.25H9.8C10.372 18.25 10.757 18.25 11.052 18.225C11.34 18.202 11.477 18.16 11.568 18.114C11.8032 17.9939 11.9944 17.8024 12.114 17.567C12.174 17.448 12.212 17.305 12.232 17.177C12.2406 17.1183 12.2466 17.0592 12.25 17V16.996C12.2507 16.7971 12.3303 16.6066 12.4714 16.4664C12.6126 16.3262 12.8036 16.2478 13.0025 16.2485C13.2014 16.2492 13.3919 16.3288 13.5321 16.4699C13.6723 16.6111 13.7507 16.8021 13.75 17.001V17.045L13.745 17.132C13.7379 17.2253 13.7276 17.3184 13.714 17.411C13.679 17.63 13.608 17.941 13.45 18.249C13.1866 18.7664 12.7662 19.1872 12.249 19.451C11.911 19.623 11.555 19.691 11.175 19.721C10.81 19.751 10.365 19.751 9.83 19.751H8.17C7.635 19.751 7.19 19.751 6.825 19.721C6.445 19.691 6.089 19.623 5.752 19.451C5.2346 19.1876 4.81384 18.7672 4.55 18.25C4.378 17.912 4.31 17.556 4.28 17.176C4.25 16.811 4.25 16.366 4.25 15.831V12.171C4.25 11.636 4.25 11.191 4.28 10.826C4.31 10.446 4.378 10.09 4.55 9.753C4.8135 9.23507 5.23429 8.81393 5.752 8.55C5.976 8.435 6.254 8.382 6.468 8.35C6.707 8.315 6.973 8.293 7.227 8.278C7.734 8.25 8.245 8.25 8.496 8.25Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <hr>
                            <p class="justify-between"><strong>Account Name:</strong> {{$account_name}}</p>
                            <hr>
                        </div>
                        <p class="note">This account number expires in a day.<br>A wrong transfer may take up to 72hrs
                            to be refunded.</p>
                        @if($account_name == "Try again later")
                            <button class="btn btn-secondary w-100" onclick="reloadPage()">Retry Again</button>

                            <script>
                                function reloadPage() {
                                    location.reload();
                                }
                            </script>
                        @else
                            <button id="transferBtn" class="btn btn-primary w-100" onclick="initiateTransferCheck()">
                                I have made the transfer
                            </button>
                        @endif


                    </div>

                    <div class="tab-pane fade" id="ussd" role="tabpanel">On Maintenance</div>

                    <div class="tab-pane fade" id="bank" role="tabpanel">On Maintenance</div>
                    <div class="tab-pane fade" id="crypto" role="tabpanel">On Maintenance</div>
                    <div class="tab-pane fade" id="wallet" role="tabpanel">On Maintenance</div>
                    <div class="tab-pane fade" id="qr" role="tabpanel">On Maintenance</div>




                    <div class="tab-pane fade" id="btc" role="tabpanel">
                        <div class="amount-box">

                            <p class="center">
                                Please proceed to transfer <br> the
                                <strong class="text-danger">exact BTC Amount</strong> below:
                            </p>

                            <div id="wallet-details" style="display: none;">
                                <h4 class="strong">
                                    <svg width="60" height="60" viewBox="0 0 138 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5635_3519)">
                                            <path d="M69 138C107.108 138 138 107.108 138 69C138 30.8924 107.108 0 69 0C30.8924 0 0 30.8924 0 69C0 107.108 30.8924 138 69 138Z" fill="#F7931A"/>
                                            <path d="M100.003 60.4613C101.357 51.4223 94.4698 46.5621 85.0599 43.3191L88.1132 31.0716L80.6612 29.2172L77.6856 41.1412C75.7277 40.6496 73.7181 40.1925 71.7127 39.7354L74.7099 27.7337L67.2579 25.875L64.2047 38.1182C62.5803 37.7531 60.9933 37.3793 59.4437 36.9969L59.4523 36.9581L49.1713 34.3922L47.1876 42.3531C47.1876 42.3531 52.7205 43.6209 52.6041 43.6986C55.6228 44.4533 56.1662 46.4499 56.0756 48.0369L52.5997 61.9879C52.8096 62.0367 53.0684 62.1187 53.376 62.2337L52.5868 62.0396L47.7137 81.5839C47.3428 82.4981 46.407 83.8738 44.2939 83.352C44.3715 83.4598 38.8774 82.0022 38.8774 82.0022L35.1772 90.5323L44.8804 92.9516C46.683 93.4044 48.4511 93.8788 50.1891 94.323L47.1056 106.708L54.5533 108.563L57.6066 96.3154C59.6392 96.8616 61.6201 97.3748 63.5492 97.8549L60.5046 110.051L67.9566 111.905L71.04 99.5454C83.7532 101.952 93.3097 100.981 97.3333 89.4844C100.576 80.2298 97.1737 74.8866 90.4851 71.4064C95.3582 70.2851 99.0238 67.0809 100.003 60.4613ZM82.9684 84.3439C80.6698 93.6028 65.0801 88.596 60.0259 87.3411L64.1227 70.932C69.177 72.1956 85.3791 74.6925 82.9684 84.3439ZM85.2756 60.3276C83.1754 68.7499 70.2034 64.4676 65.9987 63.4196L69.7074 48.5415C73.9121 49.5894 87.4663 51.543 85.2756 60.3276Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5635_3519">
                                                <rect width="138" height="138" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </h4>



                                <hr>
                                <p class="justify-content-center">
                                    <strong>BTC Amount</strong><br>
                                    <span onclick="copybtcamount()" id="btc-amount" > </span> BTC</p>
                                <hr>
                                <p class="justify-content-center">
                                    <strong>BTC Address</strong>
                                    <span class="" onclick="copybtcwalletaddress()" id="btcwalletaddress"></span>
                                </p>
                                <hr>


                                    <button id="transferBtn" class="btn btn-primary w-100" onclick="initiateTransferCheckbtc()">
                                        I have made the transfer
                                    </button>








                            </div>

                            <!-- Get Wallet Address Button -->
                            <button id="getWalletBtn" class="btn btn-outline-primary w-100">
                                Get Wallet Address
                            </button>





                        </div>
                    </div>







                </div>


            </div>
        </div>
    </div>
</div>



<script>
    function initiateTransferCheckbtc() {
        let transferBtn = document.getElementById("transferBtn");
        let btcAmount = document.getElementById("btc-amount").innerText.trim();
        let btcAddress = document.getElementById("btcwalletaddress").innerText.trim();
        let ref = "{{ $ref }}"; // Blade variable is still fine in JavaScript

        // Validate if BTC Address and Amount exist
        if (!btcAddress || !btcAmount) {
            alert("Error: Wallet details missing. Please try again.");
            return;
        }

        // Disable button & add loader
        transferBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Checking...';
        transferBtn.disabled = true;

        let repeatRequest = true;

        function makeRequest() {
            if (!repeatRequest) {
                return;
            }

            // Construct dynamic URL with actual values
            const url = `{{ url('') }}/verifybtccheck?address=${encodeURIComponent(btcAddress)}&amount=${encodeURIComponent(btcAmount)}&ref=${encodeURIComponent(ref)}`;
            var audio = new Audio('{{url('')}}/public/assets/sound.wav');

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);

                    if (data.status === 'pending') {
                        setTimeout(makeRequest, 3000); // Retry after 3 seconds
                    } else if (data.status === 'success' || data.status === 'paid') {
                        audio.play();
                        let redirectUrl = data.status === 'success'
                            ? `{{ url('') }}/success?trans_id=${encodeURIComponent(ref)}`
                            : `{{ url('') }}/paid-success?trans_id=${encodeURIComponent(ref)}`;
                        window.location.href = redirectUrl;
                    } else {
                        alert("Transaction not found. Please ensure the correct amount and address.");
                        transferBtn.innerHTML = "I have made the transfer";
                        transferBtn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("Network error. Please try again.");
                    transferBtn.innerHTML = "I have made the transfer";
                    transferBtn.disabled = false;
                });
        }

        makeRequest(); // Start checking
    }
</script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#getWalletBtn").on("click", function() {
            $.ajax({
                url: "/get-btc-wallet?amount={{$f_amount}}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        $("#getWalletBtn").hide();
                        $("#wallet-details").show();

                        $("#btc-amount").text(response.amount);
                        $("#btcwalletaddress").text(response.account_no);
                        $("#accountName").text(response.account_name);
                    } else {
                        alert("Error retrieving wallet address. Please try again.");
                    }
                },
                error: function() {
                    alert("An error occurred. Please try again.");
                }
            });
        });
    });
</script>




<script>



    function copybtcamount() {
        var btcamount = document.getElementById("btc-amount").innerText;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(btcamount).then(() => {
                alert("Amount copied!");
            }).catch(err => {
                console.error("Clipboard copy failed:", err);
                fallbackCopy(btcamount);
            });
        } else {
            fallbackCopy(btcamount);
        }
    }


    // Fallback method using textarea
    function fallbackCopy(text) {
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("Account number copied!");
    }













    // Function to copy account number
    function copyAccountNumber() {
        var accountNumber = document.getElementById("accountNumber").innerText;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            // Modern method (only works on HTTPS)
            navigator.clipboard.writeText(accountNumber).then(() => {
                alert("Account number copied!");
            }).catch(err => {
                console.error("Clipboard copy failed:", err);
                fallbackCopy(accountNumber);
            });
        } else {
            fallbackCopy(accountNumber);
        }
    }


    // Fallback method using textarea
    function fallbackCopy(text) {
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("Account number copied!");
    }



    function copybtcwalletaddress() {
        var btcwalletaddress = document.getElementById("btcwalletaddress").innerText;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(btcwalletaddress).then(() => {
                alert("Address copied!");
            }).catch(err => {
                console.error("Clipboard copy failed:", err);
                fallbackCopybtc(btcwalletaddress);
            });
        } else {
            fallbackCopybtc(btcwalletaddress);
        }
    }

    // Fallback method using textarea
    function fallbackCopybtc(text) {
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("Address copied!");
    }

    // Function to initiate transfer check
    function initiateTransferCheck() {
        let transferBtn = document.getElementById("transferBtn");

        // Disable button & add loader
        transferBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Checking...';
        transferBtn.disabled = true;

        let repeatRequestninepsb = true;

        function makeRequest() {
            if (!repeatRequestninepsb) {
                return;
            }

            const url = "{{ url('') }}/verifywovencheck?account_no={{$account_no}}&amount={{$amount}}&ref={{$ref}}";
            var audio = new Audio('{{url('')}}/public/assets/sound.wav');

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);

                    if (data.status === 'pending') {
                        setTimeout(makeRequest, 3000);
                    } else if (data.status === 'success' || data.status === 'paid') {
                        audio.play();
                        let redirectUrl = data.status === 'success' ? "{{ url('') }}/success?trans_id={{$ref}}" : "{{ url('') }}/paid-success?trans_id={{$ref}}";
                        window.location.href = redirectUrl;
                    }
                })
                .catch(error => {
                    console.error(error);
                    transferBtn.innerHTML = "I have made the transfer";
                    transferBtn.disabled = false;
                });
        }

        makeRequest(); // Start checking
    }





</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





