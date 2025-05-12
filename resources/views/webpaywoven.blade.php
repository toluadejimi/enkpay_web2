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
    if($payable_amount > 11000){
         $f_amount = $payable_amount + 300;
     }else{
       $f_amount = $payable_amount + 100;
     }

@endphp


<style>
    /* Modal overlay */
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

    /* Modal box */
    .modal-box {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        width: 90%;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        font-family: Arial, sans-serif;
    }

    .modal-box h2 {
        margin-bottom: 10px;
    }

    .modal-box button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .modal-box button:hover {
        background-color: #0056b3;
    }
</style>


<div id="paymentModal" class="modal-overlay">
    <div class="modal-box">
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
        <button onclick="closeModal()" style="
        padding: 10px 25px;
        background-color: #e74c3c;
        border: none;
        color: white;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    ">
            I Understand
        </button>
    </div>
</div>

<script>
    // Close modal function
    function closeModal() {
        document.getElementById("paymentModal").style.display = "none";
    }

    // Show modal on page load
    window.onload = function() {
        document.getElementById("paymentModal").style.display = "flex";
    };
</script>





<div class="background">
    <div class="theme-toggle">
        <div class="toggle-circle"></div>
    </div>
    <div class="payment-card">
        <div class="card-header">
            Instant Payment
            <span class="status"><a href="{{ $marchant_url }}?amount={{ $amount }}&trans_id={{ $trans_id }}&status=failure">
        <svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="9" cy="9" r="9" fill="#FF4F4F"/>
<path d="M6.529 6.44765L6.57593 6.3895C6.65756 6.30156 6.76579 6.2481 6.88093 6.23882C6.99607 6.22955 7.11048 6.26508 7.20336 6.33896L7.25736 6.3895L9.16664 8.44496L11.0759 6.38881C11.1204 6.33924 11.1736 6.29971 11.2325 6.27253C11.2913 6.24534 11.3546 6.23105 11.4186 6.23049C11.4826 6.22992 11.5461 6.24309 11.6053 6.26923C11.6646 6.29536 11.7184 6.33395 11.7637 6.38272C11.8089 6.4315 11.8447 6.48949 11.8689 6.55331C11.8931 6.61713 11.9053 6.68551 11.9047 6.75445C11.9041 6.8234 11.8908 6.89152 11.8655 6.95486C11.8402 7.01819 11.8034 7.07547 11.7574 7.12334L9.84871 9.1795L11.758 11.2357C11.8396 11.3237 11.8891 11.4403 11.8976 11.5642C11.9061 11.6882 11.873 11.8114 11.8043 11.9113L11.7574 11.9695C11.6757 12.0574 11.5675 12.1109 11.4524 12.1202C11.3372 12.1294 11.2228 12.0939 11.1299 12.02L11.0759 11.9695L9.16664 9.91404L7.25736 11.9702C7.21286 12.0198 7.15964 12.0593 7.1008 12.0865C7.04197 12.1137 6.9787 12.1279 6.91468 12.1285C6.85066 12.1291 6.78718 12.1159 6.72793 12.0898C6.66869 12.0636 6.61488 12.025 6.56963 11.9763C6.52438 11.9275 6.48861 11.8695 6.46439 11.8057C6.44018 11.7419 6.42801 11.6735 6.42859 11.6045C6.42918 11.5356 6.44251 11.4675 6.46781 11.4041C6.4931 11.3408 6.52986 11.2835 6.57593 11.2357L8.48457 9.1795L6.57528 7.12334C6.49373 7.03534 6.4442 6.91874 6.4357 6.79475C6.42721 6.67075 6.46031 6.54759 6.529 6.44765Z" fill="white"/>
</svg>

    </a></span>
        </div>
        <div class="amount-section">
            <span style="color: #333333" class="label">{{$bname ?? "Name"}}</span>
            <span style="color: #333333" class="amount">NGN {{number_format($f_amount)}}</span>
        </div>
        <div class="currency-section">
            <div class="currency-section">
                <h4>Choose How You’d Like to Pay</h4>
                <p style="font-size: 11px" class="instructions">To complete your payment, please select one of the options below that works best for you
                </p>
                <div id="paymentMethodsSection" class="currency-grid">
                    @if($set->web_transfer == 1)
                        <a style="color: #596dfc" class="currency-link" href="#" onclick="loadContent('bank')">
                            <div class="currency-item bank">
                                <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M17.2048 8.52539C16.9689 8.52503 16.7375 8.5895 16.537 8.71149L10.3117 12.7125C9.86925 12.9989 9.73442 13.492 9.90506 13.9128C10.0694 14.3181 10.4844 14.5921 10.9795 14.5921H23.4302C23.9252 14.5921 24.3403 14.3181 24.5046 13.9128C24.6752 13.492 24.5404 12.9989 24.099 12.7135L24.098 12.7125L17.8727 8.71149C17.6721 8.5895 17.4408 8.52503 17.2048 8.52539ZM9.83133 20.7363C9.83133 20.1159 10.4338 19.8172 10.8847 19.8172H10.9426L10.9395 19.7613V16.4416C10.9395 16.3045 10.9949 16.173 11.0937 16.0761C11.1925 15.9792 11.3265 15.9247 11.4661 15.9247H13.2189C13.3586 15.9247 13.4926 15.9792 13.5913 16.0761C13.6901 16.173 13.7456 16.3045 13.7456 16.4416V19.7613L13.7424 19.8172H15.8049L15.8018 19.7613V16.4416C15.8018 16.3045 15.8572 16.173 15.956 16.0761C16.0548 15.9792 16.1887 15.9247 16.3284 15.9247H18.0812C18.1504 15.9247 18.2189 15.9381 18.2828 15.964C18.3467 15.99 18.4047 16.0281 18.4536 16.0761C18.5025 16.1241 18.5413 16.1811 18.5678 16.2438C18.5943 16.3065 18.6079 16.3737 18.6079 16.4416V19.7613L18.6047 19.8172H20.6672L20.664 19.7613V16.4416C20.664 16.3045 20.7195 16.173 20.8183 16.0761C20.9171 15.9792 21.051 15.9247 21.1907 15.9247H22.9435C23.0832 15.9247 23.2172 15.9792 23.3159 16.0761C23.4147 16.173 23.4702 16.3045 23.4702 16.4416V19.7613L23.467 19.8172H23.525C23.9758 19.8172 24.5783 20.1159 24.5783 20.7373V21.9438C24.5783 22.5641 23.9758 22.8629 23.525 22.8629H10.8847C10.4338 22.8629 9.83133 22.5641 9.83133 21.9428V20.7363Z"
                                          fill="white"/>
                                </svg>
                                <strong style="text-align: start">Bank Transfer<br/><small>Pay with Bank Transfer</small></strong>
                            </div>
                        </a>
                    @endif
                    @if($set->crypto == 1)
                        <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('usdt')">
                            <div class="currency-item bank">
                                <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                                    <path d="M17 24.4L8 15.52L11.433 10H22.567L26 15.52L17 24.4ZM17.9 16.3V15.202C19.52 15.282 21.032 15.598 21.5 16.007C20.956 16.484 19.007 16.831 17 16.831C14.993 16.831 13.044 16.484 12.5 16.007C12.963 15.597 14.48 15.287 16.1 15.197V16.3H17.9ZM12.5 16.003V16.664C12.963 17.074 14.475 17.384 16.1 17.474V19.9H17.9V17.47C19.52 17.389 21.036 17.074 21.5 16.664V15.346C21.036 14.936 19.52 14.621 17.9 14.536V13.6H20.6V12.25H13.4V13.6H16.1V14.536C14.475 14.621 12.963 14.936 12.5 15.346V16.003Z" fill="white"/>
                                </svg>
                                <strong style="text-align: start">USDT<br/><small>Pay with USDT Coins</small></strong>
                            </div>
                        </a>
                        <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('btc');">
                            <div class="currency-item bank">
                                <svg width="34" height="31" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="14.5" cy="14" rx="14.5" ry="14" fill="#5B65EA"/>
                                    <g clip-path="url(#clip0_6252_3799)">
                                        <path d="M15 23C19.9706 23 24 18.9706 24 14C24 9.02944 19.9706 5 15 5C10.0294 5 6 9.02944 6 14C6 18.9706 10.0294 23 15 23Z" fill="#F7931A"/>
                                        <path d="M19.0438 12.8863C19.2204 11.7073 18.3221 11.0733 17.0948 10.6503L17.493 9.05281L16.521 8.81094L16.1329 10.3662C15.8775 10.3021 15.6154 10.2425 15.3538 10.1829L15.7448 8.61744L14.7728 8.375L14.3745 9.97194C14.1626 9.92431 13.9556 9.87556 13.7535 9.82569L13.7546 9.82062L12.4136 9.48594L12.1549 10.5243C12.1549 10.5243 12.8766 10.6897 12.8614 10.6998C13.2551 10.7983 13.326 11.0587 13.3142 11.2657L12.8608 13.0854C12.8882 13.0917 12.9219 13.1024 12.9621 13.1174L12.8591 13.0921L12.2235 15.6414C12.1751 15.7606 12.0531 15.9401 11.7774 15.872C11.7876 15.8861 11.0709 15.6959 11.0709 15.6959L10.5883 16.8086L11.8539 17.1241C12.0891 17.1832 12.3197 17.2451 12.5464 17.303L12.1442 18.9185L13.1156 19.1604L13.5139 17.5629C13.779 17.6341 14.0374 17.7011 14.289 17.7637L13.8919 19.3544L14.8639 19.5963L15.2661 17.9842C16.9243 18.2981 18.1708 18.1715 18.6956 16.6719C19.1186 15.4648 18.6748 14.7678 17.8024 14.3139C18.438 14.1676 18.9161 13.7497 19.0438 12.8863ZM16.8219 16.0014C16.5221 17.2091 14.4887 16.556 13.8294 16.3923L14.3638 14.252C15.0231 14.4168 17.1364 14.7425 16.8219 16.0014ZM17.1229 12.8688C16.8489 13.9674 15.1569 13.4088 14.6085 13.2721L15.0923 11.3315C15.6407 11.4682 17.4086 11.723 17.1229 12.8688Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6252_3799">
                                            <rect width="18" height="18" fill="white" transform="translate(6 5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <strong style="text-align: start">BTC<br/><small>Pay with BTC Coins</small></strong>
                            </div>
                        </a>
                    @endif

                </div>
            </div>
            <div class="footer">
                <a href="#">❓ Need Support?</a>
                <span class="language-select">🇬🇧 EN</span>
            </div>
        </div>
    </div>
    <script>
        const toggle = document.querySelector('.theme-toggle');
        const body = document.body;
        body.classList.add('dark');
        toggle.addEventListener('click', () => {
            if (body.classList.contains('dark')) {
                body.classList.remove('dark');
                body.classList.add('light');
            } else {
                body.classList.remove('light');
                body.classList.add('dark');
            }
        });
    </script>


    <script>

        function loadContent(currency) {
            let content = '';

            if (currency === 'bank') {
                content = `

            <div id="bankTransferSection">
            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                <h4 >Pay With Bank Transfer</h4>
                <span style="font-size: 10px; margin-bottom: 0px">Make sure you send exact amount to avoid delays</span>

                <div style="color: #596dfc; margin: 10px" class="currency-link">
                    <div class="currency-item bank">
                        <span  onclick="copyAccountNumber()" style="text-align: start">Account No <br/><small id="accountNumber">{{ $account_no }}
                </small><svg  width="12" height="12" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M6.61348 0H6.77316C7.56658 0 8.07187 1.26892e-07 8.50123 0.11496C9.07297 0.267981 9.59435 0.568832 10.0129 0.987261C10.4315 1.40569 10.7325 1.92695 10.8857 2.49861C11 2.92794 11 3.4332 11 4.22657V5.37901C11 5.75866 11 6.07445 10.9787 6.33346C10.9574 6.60312 10.9092 6.85575 10.7871 7.0949C10.6002 7.46206 10.3018 7.76065 9.93477 7.94787C9.6949 8.06993 9.44226 8.11819 9.17258 8.13948C8.91355 8.16076 8.59774 8.16076 8.21877 8.16076H7.03929C6.66032 8.16076 6.34381 8.16076 6.08548 8.13948C5.81581 8.11819 5.56316 8.06993 5.324 7.94787C4.95681 7.76095 4.65821 7.46262 4.47097 7.09561C4.3489 6.85575 4.30064 6.60312 4.27935 6.33346C4.25806 6.07445 4.25806 5.75866 4.25806 5.37901V2.35598C4.25806 1.98413 4.25806 1.69673 4.32477 1.44765C4.41336 1.11675 4.58749 0.814997 4.82966 0.572716C5.07183 0.330435 5.37351 0.156162 5.70439 0.0674149C5.95419 -1.48041e-07 6.24161 0 6.61348 0ZM6.68303 1.06516C6.20826 1.06516 6.07555 1.06942 5.98045 1.09567C5.8301 1.1359 5.69298 1.21499 5.58286 1.32497C5.47274 1.43496 5.3935 1.57198 5.3531 1.72228C5.32684 1.81808 5.32258 1.95078 5.32258 2.42481V5.35772C5.32258 5.76363 5.32258 6.03684 5.34032 6.24618C5.35664 6.45055 5.38645 6.54777 5.4191 6.61235C5.50426 6.77911 5.63981 6.91465 5.80729 6.99981C5.87116 7.03245 5.96839 7.06225 6.17277 7.07858C6.38213 7.09561 6.65535 7.09632 7.06129 7.09632H8.19677C8.60271 7.09632 8.87594 7.09632 9.08529 7.07858C9.28968 7.06225 9.3869 7.03245 9.45077 6.99981C9.61785 6.9149 9.75375 6.77926 9.83897 6.61235C9.87161 6.54777 9.90142 6.45055 9.91774 6.24689C9.93477 6.03684 9.93548 5.76434 9.93548 5.35772V4.31669C9.93548 4.00019 9.93548 3.7504 9.93123 3.54816H8.69355C8.36417 3.54816 8.04827 3.41732 7.81537 3.18443C7.58246 2.95153 7.45161 2.63566 7.45161 2.3063V1.06871C7.19544 1.06505 6.93923 1.06434 6.68303 1.06516ZM8.51613 1.24186V2.3063C8.51613 2.40423 8.59561 2.48371 8.69355 2.48371H9.75806C9.52343 1.92261 9.07726 1.47648 8.51613 1.24186ZM3.01329 2.83853H3.01613C3.15729 2.83853 3.29267 2.8946 3.39249 2.99441C3.49231 3.09422 3.54839 3.2296 3.54839 3.37075C3.54839 3.51191 3.49231 3.64728 3.39249 3.74709C3.29267 3.8469 3.15729 3.90297 3.01613 3.90297C2.83871 3.90297 2.50019 3.90297 2.17161 3.92142C2.02393 3.92857 1.87665 3.9423 1.73019 3.96258C1.66913 3.97094 1.60868 3.98327 1.54923 3.99948C1.38204 4.08457 1.24613 4.22047 1.16103 4.38765C1.12839 4.45152 1.09858 4.54874 1.08226 4.75311C1.06523 4.96245 1.06452 5.23566 1.06452 5.64157V8.19625C1.06452 8.60216 1.06452 8.87536 1.08226 9.0847C1.09858 9.28908 1.12839 9.3863 1.16103 9.45016C1.24619 9.61764 1.38174 9.75318 1.54923 9.83833C1.6131 9.87098 1.71032 9.90078 1.914 9.9171C2.12406 9.93413 2.39658 9.93484 2.80323 9.93484H3.93871C4.34465 9.93484 4.61787 9.93484 4.82723 9.9171C5.03161 9.90078 5.12884 9.87098 5.19342 9.83833C5.36034 9.75312 5.49599 9.61724 5.5809 9.45016C5.62348 9.36572 5.65045 9.26424 5.66465 9.17341C5.67076 9.13175 5.67503 9.08984 5.67742 9.0478V9.04497C5.67789 8.90381 5.73442 8.76862 5.83457 8.66915C5.93472 8.56967 6.07029 8.51405 6.21145 8.51452C6.35261 8.51499 6.48781 8.57151 6.5873 8.67166C6.68678 8.7718 6.74241 8.90736 6.74194 9.04851V9.07974L6.73839 9.14148C6.73337 9.20771 6.72603 9.27374 6.71639 9.33946C6.69155 9.49487 6.64116 9.71557 6.52903 9.93413C6.3421 10.3013 6.04374 10.5999 5.67671 10.7871C5.43684 10.9092 5.18419 10.9574 4.91452 10.9787C4.65548 11 4.33968 11 3.96 11H2.78194C2.40226 11 2.08645 11 1.82742 10.9787C1.55774 10.9574 1.3051 10.9092 1.06594 10.7871C0.698747 10.6002 0.400145 10.3019 0.212903 9.93484C0.0908388 9.69499 0.0425808 9.44236 0.0212905 9.1727C1.49372e-07 8.91368 0 8.5979 0 8.21824V5.62099C0 5.24134 1.49372e-07 4.92555 0.0212905 4.66654C0.0425808 4.39688 0.0908388 4.14425 0.212903 3.9051C0.399904 3.53757 0.698531 3.23871 1.06594 3.05142C1.2249 2.96981 1.42219 2.9322 1.57406 2.90949C1.74368 2.88465 1.93245 2.86904 2.11271 2.8584C2.47252 2.83853 2.83516 2.83853 3.01329 2.83853Z" fill="#5B65EA"/>
    </svg>
    </span>
            </div>
        </div>

        <div style="color: #596dfc; margin: 10px" class="currency-link">
            <div class="currency-item bank">
                <span style="text-align: start">Account Name <br/><small>{{ $account_name }}</small></span>
                    </div>
                </div>

                <div style="color: #596dfc; margin: 10px" class="currency-link">
                    <div class="currency-item bank">
                        <span style="text-align: start">Bank Name <br/><small>{{ $bank_name }}</small></span>
                    </div>
                </div>


                <span style="font-size: 10px; color: red">This account number expires in a day.<br>A wrong transfer may take up to 72hrs
                  to be refunded.</span>

              <div style="margin: 10px; display: flex; justify-content: center; align-items: center; flex-direction: column;">

                   @if($account_name == "Try again later")
                <button class="btn btn-secondary w-100" onclick="reloadPage()">Retry Again</button>
@else
                <button class="button-10" role="button" id="transferBtn" onclick="initiateTransferCheck()">
                    I have made the transfer
                </button>
@endif

                </div>

                </div>


`;
            }else if (currency === 'usdt') {
                content = `

            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                <h4 >Pay With USDT</h4>
                <span style="font-size: 10px; margin-bottom: 0px">Select the same USDT Network for your USDT Coin</span>


                @if($usdtAmount < 5)
                <a style="color: #596dfc; margin: 10px" class="currency-link" id="getWalletBtn" href="#" onclick="loadContent('getusdtonwalllet'); getUsdtwalletton()">
     <div class="currency-item bank">
         <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <ellipse cx="14.5" cy="15" rx="14.5" ry="15" fill="#1B8EFA"/>
    <rect x="6" y="5" width="18" height="20" fill="url(#pattern0_6242_3788)"/>
    <defs>
    <pattern id="pattern0_6242_3788" patternContentUnits="objectBoundingBox" width="1" height="1">
    <use xlink:href="#image0_6242_3788" transform="matrix(0.0154321 0 0 0.0138889 -0.00925926 0)"/>
    </pattern>
    <image id="image0_6242_3788" width="66" height="72" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
    </defs>
    </svg>

         <strong style="text-align: start">USDT TON<br/><button class="button-10" role="button" id="transferBtn" >Get USDT TON Wallet</button></strong>
     </div>
    </a>

@else


                <a style="color: #596dfc; margin: 10px" class="currency-link" id="getWalletBtn" href="#" onclick="loadContent('getusdtonwalllet'); getUsdtwalletton()">
     <div class="currency-item bank">
         <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <ellipse cx="14.5" cy="15" rx="14.5" ry="15" fill="#1B8EFA"/>
    <rect x="6" y="5" width="18" height="20" fill="url(#pattern0_6242_3788)"/>
    <defs>
    <pattern id="pattern0_6242_3788" patternContentUnits="objectBoundingBox" width="1" height="1">
    <use xlink:href="#image0_6242_3788" transform="matrix(0.0154321 0 0 0.0138889 -0.00925926 0)"/>
    </pattern>
    <image id="image0_6242_3788" width="66" height="72" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
    </defs>
    </svg>

         <strong style="text-align: start">USDT TON<br/><button class="button-10" role="button" id="transferBtn" >Get USDT TON Wallet</button></strong>
     </div>
    </a>







                <a style="color: #596dfc; margin: 10px" class="currency-link" id="getWalletBtnbep" href="#" onclick="loadContent('getusdtonwalllettrx'); getUsdtwallettrx()">
                 <div class="currency-item bank">
                     <svg width="30" height="29" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
    <ellipse cx="14.5" cy="14" rx="14.5" ry="14" fill="#5B65EA"/>
    <path d="M15 22.4L6 13.52L9.433 8H20.567L24 13.52L15 22.4ZM15.9 14.3V13.202C17.52 13.282 19.032 13.598 19.5 14.007C18.956 14.484 17.007 14.831 15 14.831C12.993 14.831 11.044 14.484 10.5 14.007C10.963 13.597 12.48 13.287 14.1 13.197V14.3H15.9ZM10.5 14.003V14.664C10.963 15.074 12.475 15.384 14.1 15.474V17.9H15.9V15.47C17.52 15.389 19.036 15.074 19.5 14.664V13.346C19.036 12.936 17.52 12.621 15.9 12.536V11.6H18.6V10.25H11.4V11.6H14.1V12.536C12.475 12.621 10.963 12.936 10.5 13.346V14.003Z" fill="#CDFFFF"/>
    <circle cx="18" cy="22" r="3" fill="white"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0376 20.0412C16.0553 20.0245 16.0779 20.0123 16.1031 20.0056C16.1282 19.999 16.1549 19.9982 16.1805 20.0034L19.2623 20.651C19.2808 20.6545 19.2982 20.6615 19.3133 20.6714L19.9403 21.0641C19.9708 21.0833 19.9915 21.112 19.9979 21.144C20.0043 21.176 19.996 21.209 19.9747 21.2359L17.8177 23.945C17.8025 23.9642 17.7815 23.9794 17.7568 23.989C17.7322 23.9985 17.7049 24.0019 17.6781 23.999C17.6513 23.996 17.626 23.9866 17.605 23.972C17.584 23.9573 17.5682 23.938 17.5593 23.9161L16.0081 20.1672C15.9995 20.1459 15.9977 20.123 16.0029 20.1009C16.0081 20.0787 16.0201 20.058 16.0376 20.0412ZM16.5458 20.7176L17.6227 23.3203L17.7998 21.9716L16.5458 20.7176ZM18.0882 22.015L17.9083 23.3872L19.4316 21.4739L18.0882 22.015ZM19.569 21.1416L18.5871 21.5372L19.2452 20.9392L19.569 21.1416ZM18.9488 20.8432L16.5528 20.3401L17.9575 21.7441L18.9488 20.8432Z" fill="#C4342B"/>
    </svg>


                     <strong style="text-align: start">USDT TRX<br/><button class="button-10" role="button" id="transferBtn" >Get USDT TRX Wallet</button></strong>
                 </div>
             </a>
@endif









                `;
            }

            else if (currency === 'btc') {
                content = `

            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                <h4 >Pay With BTC</h4>
                <span style="font-size: 10px; margin-bottom: 0px">Select the same USDT Network for your USDT Coin</span>



            <a style="color: #596dfc; margin: 10px" class="currency-link" id="getWalletBtn" href="#" onclick="loadContent('getbtcwallet'); getbtcwalletbtc()">
 <div class="currency-item bank">
     <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<ellipse cx="14.5" cy="15" rx="14.5" ry="15" fill="#1B8EFA"/>
<rect x="6" y="5" width="18" height="20" fill="url(#pattern0_6242_3788)"/>
<defs>
<pattern id="pattern0_6242_3788" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_6242_3788" transform="matrix(0.0154321 0 0 0.0138889 -0.00925926 0)"/>
</pattern>
<image id="image0_6242_3788" width="66" height="72" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
</defs>
</svg>

     <strong style="text-align: start">BTC<br/><button class="button-10" role="button" id="transferBtn" >Get BTC Wallet</button></strong>
 </div>
</a>



            `;
            }

            else if (currency === 'usdtton') {
                content = `
            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                <h4 >USDT TON Network Selected</h4>
                <span style="font-size: 10px; margin-bottom: 0px">Make sure you send exact amount to avoid delays</span>
                            <div id="walletdetails" style="display: none;">

                                            <p class="center">
                                                Please proceed to transfer <br>
                                                the <strong class="text-danger">exact USDT Amount</strong> below:
                                            </p>


                                            <hr>
                                            <p class="justify-content-center">


                                                <strong>USDT Amount</strong><br>
                                                <span id="usdtamount"></span> USDT

                                            </p>
                                            <hr>

                                            <p class="justify-content-center">
                                                <strong>QR CODE</strong><br>
                                                <img id="usdt_qr_image" alt="USDT QR Code"/>
                                            </p>
                                            <hr>


                                            <button id="transferBtn" class="btn btn-primary w-100"
                                                    onclick="initiateTransferCheckusdt()">
                                                I have made the transfer
                                            </button>
                                        </div>

                                       <div id="btnusdtwallet">




                                        <button id="getWalletBtnusdttrc" class="btn btn-outline-primary w-100"
                                                onclick="getUsdtwalletbep()">Get Wallet Address for USDT TRC-20
                                        </button>
                                        <hr>

                                        <button id="getWalletBtnusdterc" class="btn btn-outline-primary w-100"
                                                onclick="getUsdtwalletbep()">Get Wallet Address for USDT ERC-20
                                        </button>
                                       </div>


                                    </div>
                                </div>







            `;
            } else if (currency === 'menu') {
                content = `
             <div class="currency-section">
                <h4>Choose How You’d Like to Pay</h4>
                <p style="font-size: 11px" class="instructions">To complete your payment, please select one of the options below that works best for you
                </p>
            <div id="paymentMethodsSection" class="currency-grid">
                @if($set->web_transfer == 1)
                <a style="color: #596dfc" class="currency-link" href="#" onclick="loadContent('bank')">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M17.2048 8.52539C16.9689 8.52503 16.7375 8.5895 16.537 8.71149L10.3117 12.7125C9.86925 12.9989 9.73442 13.492 9.90506 13.9128C10.0694 14.3181 10.4844 14.5921 10.9795 14.5921H23.4302C23.9252 14.5921 24.3403 14.3181 24.5046 13.9128C24.6752 13.492 24.5404 12.9989 24.099 12.7135L24.098 12.7125L17.8727 8.71149C17.6721 8.5895 17.4408 8.52503 17.2048 8.52539ZM9.83133 20.7363C9.83133 20.1159 10.4338 19.8172 10.8847 19.8172H10.9426L10.9395 19.7613V16.4416C10.9395 16.3045 10.9949 16.173 11.0937 16.0761C11.1925 15.9792 11.3265 15.9247 11.4661 15.9247H13.2189C13.3586 15.9247 13.4926 15.9792 13.5913 16.0761C13.6901 16.173 13.7456 16.3045 13.7456 16.4416V19.7613L13.7424 19.8172H15.8049L15.8018 19.7613V16.4416C15.8018 16.3045 15.8572 16.173 15.956 16.0761C16.0548 15.9792 16.1887 15.9247 16.3284 15.9247H18.0812C18.1504 15.9247 18.2189 15.9381 18.2828 15.964C18.3467 15.99 18.4047 16.0281 18.4536 16.0761C18.5025 16.1241 18.5413 16.1811 18.5678 16.2438C18.5943 16.3065 18.6079 16.3737 18.6079 16.4416V19.7613L18.6047 19.8172H20.6672L20.664 19.7613V16.4416C20.664 16.3045 20.7195 16.173 20.8183 16.0761C20.9171 15.9792 21.051 15.9247 21.1907 15.9247H22.9435C23.0832 15.9247 23.2172 15.9792 23.3159 16.0761C23.4147 16.173 23.4702 16.3045 23.4702 16.4416V19.7613L23.467 19.8172H23.525C23.9758 19.8172 24.5783 20.1159 24.5783 20.7373V21.9438C24.5783 22.5641 23.9758 22.8629 23.525 22.8629H10.8847C10.4338 22.8629 9.83133 22.5641 9.83133 21.9428V20.7363Z"
                                  fill="white"/>
                        </svg>
                        <strong style="text-align: start">Bank Transfer<br/><small>Pay with Bank Transfer</small></strong>
                    </div>
                </a>
@endif
                @if($set->crypto == 1)
                <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('usdt')">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                            <path d="M17 24.4L8 15.52L11.433 10H22.567L26 15.52L17 24.4ZM17.9 16.3V15.202C19.52 15.282 21.032 15.598 21.5 16.007C20.956 16.484 19.007 16.831 17 16.831C14.993 16.831 13.044 16.484 12.5 16.007C12.963 15.597 14.48 15.287 16.1 15.197V16.3H17.9ZM12.5 16.003V16.664C12.963 17.074 14.475 17.384 16.1 17.474V19.9H17.9V17.47C19.52 17.389 21.036 17.074 21.5 16.664V15.346C21.036 14.936 19.52 14.621 17.9 14.536V13.6H20.6V12.25H13.4V13.6H16.1V14.536C14.475 14.621 12.963 14.936 12.5 15.346V16.003Z" fill="white"/>
                        </svg>
                        <strong style="text-align: start">USDT<br/><small>Pay with USDT Coins</small></strong>
                    </div>
                </a>
                <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('btc');">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="14.5" cy="14" rx="14.5" ry="14" fill="#5B65EA"/>
                            <g clip-path="url(#clip0_6252_3799)">
                                <path d="M15 23C19.9706 23 24 18.9706 24 14C24 9.02944 19.9706 5 15 5C10.0294 5 6 9.02944 6 14C6 18.9706 10.0294 23 15 23Z" fill="#F7931A"/>
                                <path d="M19.0438 12.8863C19.2204 11.7073 18.3221 11.0733 17.0948 10.6503L17.493 9.05281L16.521 8.81094L16.1329 10.3662C15.8775 10.3021 15.6154 10.2425 15.3538 10.1829L15.7448 8.61744L14.7728 8.375L14.3745 9.97194C14.1626 9.92431 13.9556 9.87556 13.7535 9.82569L13.7546 9.82062L12.4136 9.48594L12.1549 10.5243C12.1549 10.5243 12.8766 10.6897 12.8614 10.6998C13.2551 10.7983 13.326 11.0587 13.3142 11.2657L12.8608 13.0854C12.8882 13.0917 12.9219 13.1024 12.9621 13.1174L12.8591 13.0921L12.2235 15.6414C12.1751 15.7606 12.0531 15.9401 11.7774 15.872C11.7876 15.8861 11.0709 15.6959 11.0709 15.6959L10.5883 16.8086L11.8539 17.1241C12.0891 17.1832 12.3197 17.2451 12.5464 17.303L12.1442 18.9185L13.1156 19.1604L13.5139 17.5629C13.779 17.6341 14.0374 17.7011 14.289 17.7637L13.8919 19.3544L14.8639 19.5963L15.2661 17.9842C16.9243 18.2981 18.1708 18.1715 18.6956 16.6719C19.1186 15.4648 18.6748 14.7678 17.8024 14.3139C18.438 14.1676 18.9161 13.7497 19.0438 12.8863ZM16.8219 16.0014C16.5221 17.2091 14.4887 16.556 13.8294 16.3923L14.3638 14.252C15.0231 14.4168 17.1364 14.7425 16.8219 16.0014ZM17.1229 12.8688C16.8489 13.9674 15.1569 13.4088 14.6085 13.2721L15.0923 11.3315C15.6407 11.4682 17.4086 11.723 17.1229 12.8688Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_6252_3799">
                                    <rect width="18" height="18" fill="white" transform="translate(6 5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <strong style="text-align: start">BTC<br/><small>Pay with BTC Coins</small></strong>
                    </div>
                </a>
@endif

                </div>

`;
            }else if (currency === 'usdttrx') {
                content = `
            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
                <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                <span></span>
            </a>

                <h4 >USDT vvvv TRX Network Selected</h4>
                <span style="font-size: 10px; margin-bottom: 0px">Make sure you send exact amount to avoid delays</span>


             <button class="button-10" role="button" id="transferBtnctypto" onclick="checkcryptotrx()">
                I have made the transfer
            </button>
            `;
            } else if (currency === 'menu') {
                content = `
           <div class="currency-section">
                <h4>Choose How You’d Like to Pay</h4>
                <p style="font-size: 11px" class="instructions">To complete your payment, please select one of the options below that works best for you
                </p>
            <div id="paymentMethodsSection" class="currency-grid">
                @if($set->web_transfer == 1)
                <a style="color: #596dfc" class="currency-link" href="#" onclick="loadContent('bank')">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M17.2048 8.52539C16.9689 8.52503 16.7375 8.5895 16.537 8.71149L10.3117 12.7125C9.86925 12.9989 9.73442 13.492 9.90506 13.9128C10.0694 14.3181 10.4844 14.5921 10.9795 14.5921H23.4302C23.9252 14.5921 24.3403 14.3181 24.5046 13.9128C24.6752 13.492 24.5404 12.9989 24.099 12.7135L24.098 12.7125L17.8727 8.71149C17.6721 8.5895 17.4408 8.52503 17.2048 8.52539ZM9.83133 20.7363C9.83133 20.1159 10.4338 19.8172 10.8847 19.8172H10.9426L10.9395 19.7613V16.4416C10.9395 16.3045 10.9949 16.173 11.0937 16.0761C11.1925 15.9792 11.3265 15.9247 11.4661 15.9247H13.2189C13.3586 15.9247 13.4926 15.9792 13.5913 16.0761C13.6901 16.173 13.7456 16.3045 13.7456 16.4416V19.7613L13.7424 19.8172H15.8049L15.8018 19.7613V16.4416C15.8018 16.3045 15.8572 16.173 15.956 16.0761C16.0548 15.9792 16.1887 15.9247 16.3284 15.9247H18.0812C18.1504 15.9247 18.2189 15.9381 18.2828 15.964C18.3467 15.99 18.4047 16.0281 18.4536 16.0761C18.5025 16.1241 18.5413 16.1811 18.5678 16.2438C18.5943 16.3065 18.6079 16.3737 18.6079 16.4416V19.7613L18.6047 19.8172H20.6672L20.664 19.7613V16.4416C20.664 16.3045 20.7195 16.173 20.8183 16.0761C20.9171 15.9792 21.051 15.9247 21.1907 15.9247H22.9435C23.0832 15.9247 23.2172 15.9792 23.3159 16.0761C23.4147 16.173 23.4702 16.3045 23.4702 16.4416V19.7613L23.467 19.8172H23.525C23.9758 19.8172 24.5783 20.1159 24.5783 20.7373V21.9438C24.5783 22.5641 23.9758 22.8629 23.525 22.8629H10.8847C10.4338 22.8629 9.83133 22.5641 9.83133 21.9428V20.7363Z"
                                  fill="white"/>
                        </svg>
                        <strong style="text-align: start">Bank Transfer<br/><small>Pay with Bank Transfer</small></strong>
                    </div>
                </a>
@endif
                @if($set->crypto == 1)
                <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('usdt')">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="17" cy="15.5" rx="17" ry="15.5" fill="#5B65EA"/>
                            <path d="M17 24.4L8 15.52L11.433 10H22.567L26 15.52L17 24.4ZM17.9 16.3V15.202C19.52 15.282 21.032 15.598 21.5 16.007C20.956 16.484 19.007 16.831 17 16.831C14.993 16.831 13.044 16.484 12.5 16.007C12.963 15.597 14.48 15.287 16.1 15.197V16.3H17.9ZM12.5 16.003V16.664C12.963 17.074 14.475 17.384 16.1 17.474V19.9H17.9V17.47C19.52 17.389 21.036 17.074 21.5 16.664V15.346C21.036 14.936 19.52 14.621 17.9 14.536V13.6H20.6V12.25H13.4V13.6H16.1V14.536C14.475 14.621 12.963 14.936 12.5 15.346V16.003Z" fill="white"/>
                        </svg>
                        <strong style="text-align: start">USDT<br/><small>Pay with USDT Coins</small></strong>
                    </div>
                </a>
                <a style="color: #596dfc" class="currency-link" href="#"  onclick="loadContent('btc');">
                    <div class="currency-item bank">
                        <svg width="34" height="31" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="14.5" cy="14" rx="14.5" ry="14" fill="#5B65EA"/>
                            <g clip-path="url(#clip0_6252_3799)">
                                <path d="M15 23C19.9706 23 24 18.9706 24 14C24 9.02944 19.9706 5 15 5C10.0294 5 6 9.02944 6 14C6 18.9706 10.0294 23 15 23Z" fill="#F7931A"/>
                                <path d="M19.0438 12.8863C19.2204 11.7073 18.3221 11.0733 17.0948 10.6503L17.493 9.05281L16.521 8.81094L16.1329 10.3662C15.8775 10.3021 15.6154 10.2425 15.3538 10.1829L15.7448 8.61744L14.7728 8.375L14.3745 9.97194C14.1626 9.92431 13.9556 9.87556 13.7535 9.82569L13.7546 9.82062L12.4136 9.48594L12.1549 10.5243C12.1549 10.5243 12.8766 10.6897 12.8614 10.6998C13.2551 10.7983 13.326 11.0587 13.3142 11.2657L12.8608 13.0854C12.8882 13.0917 12.9219 13.1024 12.9621 13.1174L12.8591 13.0921L12.2235 15.6414C12.1751 15.7606 12.0531 15.9401 11.7774 15.872C11.7876 15.8861 11.0709 15.6959 11.0709 15.6959L10.5883 16.8086L11.8539 17.1241C12.0891 17.1832 12.3197 17.2451 12.5464 17.303L12.1442 18.9185L13.1156 19.1604L13.5139 17.5629C13.779 17.6341 14.0374 17.7011 14.289 17.7637L13.8919 19.3544L14.8639 19.5963L15.2661 17.9842C16.9243 18.2981 18.1708 18.1715 18.6956 16.6719C19.1186 15.4648 18.6748 14.7678 17.8024 14.3139C18.438 14.1676 18.9161 13.7497 19.0438 12.8863ZM16.8219 16.0014C16.5221 17.2091 14.4887 16.556 13.8294 16.3923L14.3638 14.252C15.0231 14.4168 17.1364 14.7425 16.8219 16.0014ZM17.1229 12.8688C16.8489 13.9674 15.1569 13.4088 14.6085 13.2721L15.0923 11.3315C15.6407 11.4682 17.4086 11.723 17.1229 12.8688Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_6252_3799">
                                    <rect width="18" height="18" fill="white" transform="translate(6 5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <strong style="text-align: start">BTC<br/><small>Pay with BTC Coins</small></strong>
                    </div>
                </a>
@endif

                </div>

`;
            }

            else if (currency === 'getusdtonwalllet') {
                content = `

                        <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('usdt')"">
                            <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span></span>
                        </a>

                          <p class="center">
                             Please proceed to transfer <br>
                              the <strong class="text-danger">exact USDT Amount</strong> below:
                          </p>

                        <img style="margin: 10px;" id="usdt_qr_image" alt="USDT QR Code"/>

                        <div style="color: #596dfc; margin: 10px; width: auto" class="currency-link">
                            <div class="currency-item usdt">
                                <span style="text-align: start">Wallet Address <br/><small> <span onclick="copyusdtwalletaddress()" id="usdtwalletaddress"></span> </small></span>
                            </div>
                        </div>

                        <div style="color: #596dfc; margin: 10px" class="currency-link">
                            <div class="currency-item bank">
                                <span style="text-align: start">Network <br/><small> TON NETWORK </small></span>
                            </div>
                        </div>

                        <div style="color: #596dfc; margin: 10px" class="currency-link">
                            <div class="currency-item bank">
                                <span style="text-align: start">USDT Amount <br/><small> <span id="usdtamount"></span> </small></span>
                            </div>
                        </div>




                        <div id="countdown"  style="color: red; font-size: 10px; align-content: center;  margin: 10px;">
                            Order will expire in <span id="seconds">00</span> seconds...
                        </div>

                       <div style="display: flex; justify-content: center; align-items: center;">
                            <button class="button-10" role="button" id="transferBtnctypto" onclick="checkcryptotrx()">
                                I have made the transfer
                            </button>
                        </div>
            `;
            }

            else if (currency === 'getusdtonwalllettrx') {
                content = `

<a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('usdt')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                                    <p class="center">
                                    Please proceed to transfer <br>
                                                the <strong class="text-danger">exact USDT Amount</strong> below:
                                            </p>

                <img style="margin: 10px;" id="usdttrx_qr_image" alt="USDT QR Code"/>

                <div style="color: #596dfc; margin: 10px; width: auto" class="currency-link">
                    <div class="currency-item usdt">
                        <span style="text-align: start">Wallet Address <br/><small> <span onclick="copyusdtwalletaddress()" id="usdttrxwalletaddress"></span> </small></span>
                    </div>
                </div>

                <div style="color: #596dfc; margin: 10px" class="currency-link">
                    <div class="currency-item bank">
                        <span style="text-align: start">Network <br/><small> TRON NETWORK </small></span>
                    </div>
                </div>

                <div style="color: #596dfc; margin: 10px" class="currency-link">
                    <div class="currency-item bank">
                        <span style="text-align: start">USDT Amount <br/><small> <span id="usdttrxamount"></span> </small></span>
                    </div>
                </div>


                        <div id="countdown"  style="color: red; font-size: 10px; align-content: center;  margin: 10px;">
                            Order will expire in <span id="seconds">00</span> seconds...
                        </div>

                          <div style="display: flex; justify-content: center; align-items: center;">
                            <button class="button-10" role="button" id="transferBtnctypto" onclick="checkcryptotrx()">
                                I have made the transfer
                            </button>
                        </div>
            `;
            }

            else if (currency === 'getbtcwallet') {
                content = `

<a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('menu')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>

                                    <p class="center">
                                    Please proceed to transfer <br>
                                                the <strong class="text-danger">exact BTC Amount</strong> below:
                                            </p>

                <img style="margin: 10px;" id="btc_qr_image" alt="USDT QR Code"/>

                <div style="color: #596dfc; margin: 10px; width: auto" class="currency-link">
                    <div class="currency-item usdt">
                        <span style="text-align: start">Wallet Address <br/><small> <span onclick="copybtcwalletaddress()" id="btcwalletaddress"></span> </small></span>
                    </div>
                </div>

                <div style="color: #596dfc; margin: 10px" class="currency-link">
                    <div class="currency-item bank">
                        <span style="text-align: start">BTC Amount <br/><small> <span id="btcamount"></span> </small></span>
                    </div>
                </div>


                        <div id="countdown"  style="color: red; font-size: 10px; align-content: center;  margin: 10px;">
                            Order will expire in <span id="seconds">00</span> seconds...
                        </div>

                        <div style="display: flex; justify-content: center; align-items: center;">
                            <button class="button-10" role="button" id="transferBtnctypto" onclick="checkcryptotrx()">
                                I have made the transfer
                            </button>
                        </div>
            `;
            }

            else if (currency === 'timeout') {
                content = `

            <a class="go-back" style="margin-bottom: 15px; cursor: pointer; display: flex; align-items: center; color: #596dfc;" href="#" onclick="loadContent('usdt')"">
    <svg style="margin-right: 8px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M12.5 15L7.5 10L12.5 5" stroke="#596dfc" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg>
    <span></span>
</a>


<svg style="align-content: center; margin: 10px" width="50" height="49" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="14.5" cy="14" rx="14.5" ry="14" fill="#1B8EFA"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0833 12.9167V11.3333L19.0483 11.3332C18.0469 9.89762 16.3831 8.95835 14.5 8.95835C11.4394 8.95835 8.95835 11.4394 8.95835 14.5C8.95835 17.5606 11.4394 20.0417 14.5 20.0417C17.3278 20.0417 19.6609 17.9237 19.9994 15.1875L21.5707 15.3839C21.1354 18.9018 18.1358 21.625 14.5 21.625C10.565 21.625 7.375 18.435 7.375 14.5C7.375 10.565 10.565 7.375 14.5 7.375C16.7383 7.375 18.7355 8.40712 20.0417 10.0214L20.0417 7.375H21.625V12.9167H16.0833Z" fill="white"/>
</svg>

<h2>Order Expire</h2>
<p style="font-size: 12px">Please go back to the site and make a new one</p>

      <a style="color: #596dfc; margin: 10px;" class="currency-link" id="getWalletBtn" href="#" onclick="loadContent('usdt')">
          <p style="align-content: center">Go Back</p>
       </a>





            `;
            }

            else if (currency === 'success') {
                content = `

<svg style="margin: 10px;" width="100" height="98" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="14" cy="13" rx="14" ry="13" fill="#4FFF6B"/>
<g clip-path="url(#clip0_6267_3822)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.4646 5.76826L16.5758 6.71325C16.818 6.91915 17.1187 7.04374 17.4355 7.06939L18.8895 7.18689C19.6302 7.24675 20.2182 7.83475 20.278 8.57544L20.3955 10.0294C20.4212 10.3462 20.5458 10.6469 20.7517 10.8891L21.6966 12.0003C22.178 12.5663 22.178 13.3979 21.6966 13.964L20.7517 15.0752C20.5458 15.3173 20.4212 15.6181 20.3955 15.9349L20.278 17.3888C20.2182 18.1295 19.6301 18.7175 18.8895 18.7774L17.4355 18.8949C17.1187 18.9206 16.818 19.0451 16.5758 19.251L15.4646 20.196C14.8985 20.6774 14.067 20.6774 13.5009 20.196L12.3897 19.251C12.1476 19.0451 11.8468 18.9205 11.53 18.8949L10.0761 18.7774C9.33538 18.7175 8.74738 18.1295 8.68751 17.3888L8.56998 15.9349C8.54433 15.6181 8.41974 15.3173 8.21384 15.0752L7.26888 13.964C6.78751 13.3979 6.78751 12.5663 7.26888 12.0003L8.21388 10.8891C8.41978 10.6469 8.54436 10.3462 8.57002 10.0294L8.68751 8.57544C8.74738 7.83475 9.33538 7.24675 10.0761 7.18689L11.53 7.06936C11.8468 7.0437 12.1476 6.91912 12.3897 6.71322L13.5009 5.76826C14.067 5.28688 14.8985 5.28688 15.4646 5.76826ZM17.3323 10.2728L13.7223 13.9024L11.9854 12.1656L10.9143 13.2367L13.7223 16.0447L18.4035 11.344L17.3323 10.2728Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_6267_3822">
<rect width="17.0436" height="17.0436" fill="white" transform="translate(5.96098 5.40723)"/>
</clipPath>
</defs>
</svg>


<h2>Payment Successful</h2>
<p style="font-size: 12px; margin: 10px">Your transaction is successful</p>



<div style="display: flex; margin: 5px; justify-content: center; align-items: center;">
    <a href="{{ $marchant_url }}?amount={{ $amount }}&trans_id={{ $trans_id }}&status=success" class="button-10" role="button">
        Back to site
    </a>
</div>





            `;
            }

            document.querySelector('.currency-section').innerHTML = content;
        }
    </script>


    <script>
        function reloadPage() {
            location.reload();
        }
    </script>


    <script>
        function goBackToPaymentOptions() {
            document.getElementById('bankTransferSection').style.display = 'none';
            document.getElementById('paymentMethodsSection').style.display = 'block';

            // document.getElementById('usdtSection').style.display = 'none';
        }
    </script>


    <script>
        function getUsdtwalletton() {
            const amountSpan = document.getElementById('usdtamount');
            const addressSpan = document.getElementById('usdtwalletaddress');
            const trx = '{{$trx}}';
            const useremail = '{{$email}}';
            const famountElement = '{{$f_amount}}';
            const qrImage = document.getElementById('usdt_qr_image');
            const type = "ton";


            fetch(`/api/get-usdt-wallet?amount=${famountElement}&email=${useremail}&trx=${trx}&type=${type}`)
                .then(response => response.json())
                .then(data => {
                    amountSpan.innerText = data.amount;
                    addressSpan.innerText = data.wallet_address;
                    qrImage.src = data.qr_code;
                    startTimeoutTimer()
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
    </script>


    <script>
        function getbtcwalletbtc() {
            const amountSpan = document.getElementById('btcamount');
            const addressSpan = document.getElementById('btcwalletaddress');
            const trx = '{{$trx}}';
            const useremail = '{{$email}}';
            const famountElement = '{{$f_amount}}';
            const qrImage = document.getElementById('btc_qr_image');
            const type = "btc";


            fetch(`/api/get-usdt-wallet?amount=${famountElement}&email=${useremail}&trx=${trx}&type=${type}`)
                .then(response => response.json())
                .then(data => {
                    amountSpan.innerText = data.amount;
                    addressSpan.innerText = data.wallet_address;
                    qrImage.src = data.qr_code;
                    startTimeoutTimer()
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
    </script>


    <script>
        function getUsdtwallettrx() {
            const amountSpantrx = document.getElementById('usdttrxamount');
            const addressSpantrx = document.getElementById('usdttrxwalletaddress');
            const trx = '{{$trx}}';
            const useremail = '{{$email}}';
            const famountElement = '{{$f_amount}}';
            const qrImagetrx = document.getElementById('usdttrx_qr_image');
            const type = "trx";

            fetch(`/api/get-usdt-wallet?amount=${famountElement}&email=${useremail}&trx=${trx}&type=${type}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    amountSpantrx.innerText = data.amount;
                    addressSpantrx.innerText = data.wallet_address;
                    qrImagetrx.src = data.qr_code;
                    startTimeoutTimer()
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
    </script>

    <script>
        function getUsdtwalletbep() {
            const getWalletBtnusdt = document.getElementById('getWalletBtnusdt');
            const walletDetails = document.getElementById('walletdetails');
            const amountSpan = document.getElementById('usdtamount');
            const addressSpan = document.getElementById('usdtwalletaddress');
            const trx = '{{$trx}}';
            const useremail = document.getElementById('emailuser').textContent.trim();
            const famountElement = document.getElementById('famount').textContent.trim();
            const qrImage = document.getElementById('usdt_qr_image');
            const network = document.getElementById('currency');


            console.log(famountElement);
            if (!getWalletBtn || !walletDetails || !amountSpan || !addressSpan) {
                console.error("One or more DOM elements not found!");
                return;
            }


            fetch(`/api/get-usdt-wallet?amount=${famountElement}&email=${useremail}&trx=${trx}`)
                .then(response => response.json())
                .then(data => {
                    amountSpan.innerText = data.amount;
                    addressSpan.innerText = data.wallet_address;
                    qrImage.src = data.qr_code;
                    network.innerText = data.currency;

                    getWalletBtnusdtton.style.display = 'none';
                    getWalletBtnusdtbep.style.display = 'none';
                    usdttitlebtn.style.display = 'none';

                    walletDetails.style.display = 'block';


                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
    </script>


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
                            loadContent('success');
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

    <script>
        function checkcryptotrx() {
            let transferBtnctypto = document.getElementById("transferBtnctypto");
            let ref = "{{ $ref }}"; // Blade variable is still fine in JavaScript



            // Disable button & add loader
            transferBtnctypto.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Checking...';
            transferBtnctypto.disabled = true;

            let repeatRequest = true;

            function makeRequest() {
                if (!repeatRequest) {
                    return;
                }

                // Construct dynamic URL with actual values
                const url = `{{ url('') }}/verifycryptocheck?ref=${encodeURIComponent(ref)}`;
                var audio = new Audio('{{url('')}}/public/assets/sound.wav');

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);

                        if (data.status === 'pending') {
                            setTimeout(makeRequest, 5000); // Retry after 3 seconds
                        } else if (data.status === 'success' || data.status === 'paid') {
                            audio.play();
                            loadContent('success');
                        }else if (data.status === 'expired') {
                            loadContent('timeout');
                        } else {
                            alert("Transaction not found. Please ensure the correct amount and address.");
                            transferBtnctypto.innerHTML = "I have made the transfer";
                            transferBtnctypto.disabled = false;
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
        $(document).ready(function () {
            $("#getWalletBtn").on("click", function () {
                $.ajax({
                    url: "/get-btc-wallet?amount={{$f_amount}}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
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
                    error: function () {
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

        function fallbackCopy(text) {
            var textarea = document.createElement("textarea");
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
            alert("Account number copied!");
        }


        function copyusdtwalletaddress() {
            var usdtwalletaddress = document.getElementById("usdtwalletaddress").innerText;

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(usdtwalletaddress).then(() => {
                    alert("Amount copied!");
                }).catch(err => {
                    console.error("Clipboard copy failed:", err);
                    fallbackCopybtc(usdtwalletaddress);
                });
            } else {
                fallbackCopybtc(usdtwalletaddress);
            }
        }

        function copyusdtamount() {

            var usdtamount = document.getElementById("usdtamount").innerText;

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(usdtamount).then(() => {
                    alert("Amount copied!");
                }).catch(err => {
                    console.error("Clipboard copy failed:", err);
                    fallbackCopyusdt(usdtamount);
                });
            } else {
                fallbackCopyusdt(usdtamount);
            }

        }

        function fallbackCopyusdt(text) {
            var textarea = document.createElement("textarea");
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
            alert("Amount copied!");
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

                const url = "{{ url('') }}/verifypaypoint?account_no={{$account_no}}&amount={{$amount}}&ref={{$ref}}";
                var audio = new Audio('{{url('')}}/public/assets/sound.wav');

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);

                        if (data.status === 'pending') {
                            setTimeout(makeRequest, 3000);
                        } else if (data.status === 'success' || data.status === 'paid') {
                            audio.play();
                            loadContent('success');

                            {{--let redirectUrl = data.status === 'success' ? "{{ url('') }}/success?trans_id={{$ref}}" : "{{ url('') }}/paid-success?trans_id={{$ref}}";--}}
                            {{--window.location.href = redirectUrl;--}}
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        transferBtn.innerHTML = "I have made the transfer";
                        transferBtn.disabled = false;
                    });
            }

            makeRequest();
        }


    </script>


    <script>
        function startTimeoutTimer() {
            var secondsLeft = 1801; // or whatever duration
            var countdownEl = document.getElementById('seconds');

            var timer = setInterval(function () {
                secondsLeft--;
                countdownEl.textContent = secondsLeft;

                if (secondsLeft <= 0) {
                    clearInterval(timer);
                    loadContent('timeout');
                }
            }, 1000);
        }

    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

