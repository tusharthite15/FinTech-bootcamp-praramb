<?php session_start();       // Start the session ?>    
<?php
include './backend/config.php'; // Adjust the path to your config file

if (!isset($_SESSION['email'])) {
    header('location: ./login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTech</title>
    <link rel="stylesheet" href="./dashboard.css">
</head>
<body>
    <div class="dashboard-div1">
        <div class="sidebar">
            <div class="website-name">FinTech</div>
            <div>
                <div class="dashboard-navs">
                    <a href="">
                        <img src="./assets/images/dashboard.png" class="sidebar-icons" alt="dashboard">
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </div>
                <div class="dashboard-navs">
                    <a href="">
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

            <div class="dashboard-section-1">
                <div class="section-h"><?php echo $_SESSION['email']; ?> </div>
                <div class="section-subh">Welcome to FinTech Dashboard</div>
            </div>

            <div class="dashboard-section-2">
                <div class="dash-card-1">
                    <div>
                        <img class="dash-img" src="./assets/images/send_money.png" alt="">
                    </div>
                    <div class="dash-div2">
                        <div class="dash-card-t1">Total Transaction Amount</div>
                        <div class="dash-card-t2">₹500</div>
                    </div>
                </div>
                <div class="dash-card-1">
                    <div>
                        <img class="dash-img" src="./assets/images/successful.png" alt="">
                    </div>
                    <div class="dash-div2">
                        <div class="dash-card-t1">Successful Transactions</div>
                        <div class="dash-card-t2">10</div>
                    </div>
                </div>
                <div class="dash-card-1">
                    <div>
                        <img class="dash-img" src="./assets/images/failed.png" alt="">
                    </div>
                    <div class="dash-div2">
                        <div class="dash-card-t1">Failed Transactions</div>
                        <div class="dash-card-t2">3</div>
                    </div>
                </div>
            </div>


            <div class="dashboard-section-3">
                <div class="dash-heading-div">
                    <img class="dash-img1" src="./assets/images/recent.png" alt="">
                    <div class="dash-h">Recent Transactions</div>
                </div>
                <div class="table-1">
                    <div>
                        <div class="t-head">Transaction ID</div>
                        <div class="t-data">TN123</div>
                        <div class="t-data">TN345</div>
                        <div class="t-data">TN891</div>
                    </div>
                    <div>
                        <div class="t-head">Name</div>
                        <div class="t-data">Soham Tamhane</div>
                        <div class="t-data">Dhiraj Kadam</div>
                        <div class="t-data">Abhijit Abdagire</div>
                    </div>
                    <div>
                        <div class="t-head">Date</div>
                        <div class="t-data">18/04/2024</div>
                        <div class="t-data">18/04/2024</div>
                        <div class="t-data">18/04/2024</div>
                    </div>
                    <div>
                        <div class="t-head">Amount</div>
                        <div class="t-data">+₹500</div>
                        <div class="t-data">-₹100</div>
                        <div class="t-data">+₹50</div>
                    </div>
                    <div>
                        <div class="t-head">Status</div>
                        <div class="t-btn">Success</div>
                        <div class="t-btn t-failed">Failed</div>
                        <div class="t-btn">Success</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>