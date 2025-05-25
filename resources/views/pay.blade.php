@php use App\Models\Setting; @endphp
    <!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Sprint Pay Payment</title>
    <link href="{{url('')}}/public/assets/style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>


@php
    if($data['amount'] > 11000){
         $f_amount = $data['amount'] + 300;
     }else{
       $f_amount = $data['amount']+ 100;
     }

@endphp


<style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-box {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        width: 90%;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        font-family: 'Poppins', sans-serif;
    }

    .modal-box h2 {
        margin-bottom: 10px;
    }

    .modal-box button {
        margin-top: 15px;
        padding: 10px 25px;
        background-color: #e74c3c;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .modal-box button:hover {
        background-color: #c0392b;
    }

    /* Spinner styles */
    .spinner {
        width: 12px;
        height: 12px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #e74c3c;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 20px auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div id="paymentModal" class="modal-overlay">
    <div class="modal-box">
        <!-- Content to hide -->
        <div id="modalContent">
            <div style="font-size: 40px; color: #e74c3c; margin-bottom: 10px;">
                ⚠️
            </div>
            <h2 style="color: #333; font-weight: bold; margin-bottom: 5px;">
                Payment Required
            </h2>
            <p style="color: #444; font-size: 25px; margin-bottom: 20px;">
                <strong style="color: #e74c3c;">₦ {{ number_format($f_amount, 2) }}</strong>
            </p>
            <p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0 0 20px;">
                You are expected to pay the <strong>exact amount</strong> above.<br>
                Your transaction may be <strong>delayed or fail</strong> if you pay less or more.<br>
                <strong>Thank you for your attention.</strong>
            </p>
        </div>

        <!-- Loader section -->
        <div id="loadingContent" style="display: none;">
            <div class="spinner"></div>
            <p style="font-size: 18px; color: #333;">Getting your account details ready...</p>
        </div>

        <button id="understandBtn" onclick="closeModal()">
            <span id="btnText">I Understand</span>
            <span id="btnLoader" class="spinner" style="margin-left: 10px; display: none;"></span>
        </button>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById("modalContent").style.display = "none";
        document.getElementById("loadingContent").style.display = "block";
        document.getElementById("btnText").textContent = "Please wait";
        document.getElementById("btnLoader").style.display = "inline-block";

        const url = "{{ url('/paynow') }}?amount={{ $data['amount'] }}&key={{ $data['key'] }}&ref={{ $data['ref'] }}&email={{ $data['email'] }}";

        setTimeout(function () {
            window.location.href = url;
        }, 2000);
    }

    window.onload = function () {
        document.getElementById("paymentModal").style.display = "flex";
    };
</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

