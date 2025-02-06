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
                <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="card-tab" data-bs-toggle="tab" data-bs-target="#card"
                                type="button" role="tab">Card
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab"
                                data-bs-target="#transfer"
                                type="button" role="tab">Transfer
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ussd-tab" data-bs-toggle="tab" data-bs-target="#ussd" type="button"
                                role="tab">USSD
                        </button>
                    </li>
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank" type="button"--}}
{{--                                role="tab">Bank--}}
{{--                        </button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto"--}}
{{--                                type="button" role="tab">Crypto--}}
{{--                        </button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="wallet-tab" data-bs-toggle="tab" data-bs-target="#wallet"--}}
{{--                                type="button" role="tab">Wallet--}}
{{--                        </button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="qr-tab" data-bs-toggle="tab" data-bs-target="#qr" type="button"--}}
{{--                                role="tab">QR Code--}}
{{--                        </button>--}}
{{--                    </li>--}}
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
                </div>
            </div>
        </div>
    </div>
</div>


<script>
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





