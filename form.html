
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="dashboard.css">
        <title>Send Money</title>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    </head>

        <style>

.container {
    background-color: #fff;
    padding: 20px;
    max-width: 450px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: auto;
}

.title {
    text-align: center;
    margin-bottom: 20px;
}

.labels {
    margin-bottom: 15px;
}

.labels label {
    display: block;
    margin-bottom: 5px;
}



/* Button styles */
.submit-btn {
    width: 100%;
    background-color: #007bff;
    border: none;
    padding: 12px 0;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}
.sec-2{
    margin-top: 100px;
}
input.form-control{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

    </style>
    <body>

        <div class="dashboard-div1">

        <div class="sidebar">
            <div class="website-name">FinTech</div>
            <div>
                <div class="dashboard-navs">
                    <a href="./dashboard.php">
                        <img src="./assets/images/dashboard.png" class="sidebar-icons" alt="dashboard">
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </div>
                <div class="dashboard-navs">
                    <a href="./send_money.html">
                        <img src="./assets/images/send_money.png" class="sidebar-icons" alt="dashboard">
                        <span class="sidebar-text">Send Money</span>
                    </a>
                </div>
                <div class="dashboard-navs">
                    <a href="">
                        <img src="./assets/images/transactions.png" class="sidebar-icons" alt="dashboard">
                        <span class="sidebar-text">Transactions</span>
                    </a>
                </div>
                <div class="dashboard-navs">
                    <a href="">
                        <img src="./assets/images/settings.png" class="sidebar-icons" alt="dashboard">
                        <span class="sidebar-text">Settings</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-page-div">
            <div class="nav-bar1">
                <div class="search-bar">
                    <input type="text" placeholder="Find Transactions or People">
                    <img src="./assets/images/search.png" alt="search">
                </div>
                <div class="account-img-div">
                    <img class="user-img" src="./assets/images/user.png" alt="">
                    <img class="down-arrow-img" src="./assets/images/down_arrow.png" alt="">
                </div>
            </div>
            <div class="sec-2">
                <div class="container">
                    <div class="title"><h2>Payment Details</h2></div>
            
                    <form action="./backend/payment gateway/index.php" method="post">
                        <div class="labels">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="billing_name" id="billing_name" placeholder="Enter name" required="" autofocus="">
                        </div>
                        <div class="labels">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="billing_email" id="billing_email" placeholder="Enter email" required="">
                        </div>
                        <div class="labels">
                            <label for="mobile">Mobile Number</label>
                            <input type="number" class="form-control" name="billing_mobile" id="billing_mobile" min-length="10" max-length="10" placeholder="Enter Mobile Number" required="" autofocus="">
                        </div>
                        <div class="labels">
                            <label for="amount">Enter Amount</label>
                            <input type="text" class="form-control" name="payAmount" id="payAmount" placeholder="Enter Amount" required="" autofocus="">
                        </div>
                        <div class="labels">
                            <button id="payNow" class="submit-btn" name="submit" type="button">Send Money</button>
                        </div>
                    </form>
                </div>
        </div>
                 </div>
        
        </div>
    </body>
    </html>
    <script>
        jQuery(document).ready(function($){

jQuery('#payNow').click(function(e){

    var paymentOption = '';
    let billing_name = $('#billing_name').val();
    let billing_mobile = $('#billing_mobile').val();
    let billing_email = $('#billing_email').val();
    var shipping_name = $('#billing_name').val();
    var shipping_mobile = $('#billing_mobile').val();
    var shipping_email = $('#billing_email').val();
    var paymentOption = "netbanking";
    var payAmount = $('#payAmount').val();

    var request_url = "./backend/payment gateway/submitpayment.php";
    var formData = {
        billing_name: billing_name,
        billing_mobile: billing_mobile,
        billing_email: billing_email,
        shipping_name: shipping_name,
        shipping_mobile: shipping_mobile,
        shipping_email: shipping_email,
        paymentOption: paymentOption,
        payAmount: payAmount,
        action: 'payOrder'
    }

    $.ajax({
        type: 'POST',
        url: request_url,
        data: formData,
        dataType: 'json',
    }).done(function(data) {

        if (data.res == 'success') {
            var orderID = data.order_number;
            var orderNumber = data.order_number;
            var options = {
                "key": data.razorpay_key,
                "amount": data.userData.amount,
                "currency": "INR",
                "name": "PRARAMB DEVELOPEMENT CELL",
                "description": data.userData.description,
                "order_id": data.userData.rpay_order_id,
                "handler": function(response) {
                    window.location.replace("./backend/payment gateway/payment-success.php?oid=" + orderID + "&rp_payment_id=" + response.razorpay_payment_id + "&rp_signature=" + response.razorpay_signature);
                },
                "modal": {
                    "ondismiss": function() {
                        window.location.replace("./backend/payment gateway/payment-success.php?oid=" + orderID);
                    }
                },
                "prefill": {
                    "name": data.userData.name,
                    "email": data.userData.email,
                    "contact": data.userData.mobile
                },
                "notes": {
                    "address": "FINTECH"
                },
                "config": {
                    "display": {
                        "blocks": {
                            "banks": {
                                "name": 'Pay using ' + paymentOption,
                                "instruments": [{
                                    "method": paymentOption
                                }],
                            },
                        },
                        "sequence": ['block.banks'],
                        "preferences": {
                            "show_default_blocks": true,
                        },
                    },
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            
            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function(response) {
                window.location.replace("./backend/payment gateway/payment-failed.php?oid=" + orderID + "&reason=" + response.error.description + "&paymentid=" + response.error.metadata.payment_id);
            });
            rzp1.open();
            e.preventDefault();
        }

    });
});
});

    </script>
    
    
