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
                <span class="text-danger">{{$bname ?? "Name"}}</span>
                <button type="button" class="btn-close" aria-label="Close"></button>
                <script>function redirectToWithDelay(url, delay) {
                        setTimeout(function() {
                            window.location.href = url;
                        }, delay);
                    }</script>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab"
                                data-bs-target="#transfer"
                                type="button" role="tab">Transfer
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btc-tab" data-bs-toggle="tab" data-bs-target="#btc" type="button"
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
                            <p class="justify-between">
                                <strong>Account Number:</strong>
                                <span class="" onclick="copyAccountNumber()"  id="accountNumber">{{$account_no}}</span>

                            </p>                            <hr>
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





