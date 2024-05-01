<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bue</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet"href="{{ asset('asset/css/dashboard/style.css') }}">
     <!-- ======= Charts Styles ====== -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">Bu'e Cookies and pastry</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard/biaya') }}">
                        <span class="icon">
                            <ion-icon name="swap-horizontal-outline"></ion-icon>
                        </span>
                        <span class="title">Biaya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard/product') }}">
                        <span class="icon">
                            <ion-icon name="pricetags-outline"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard/category') }}">
                        <span class="icon">
                            <ion-icon name="copy-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard/admin') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Account</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/dashboard/cart') }}">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Cart</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="{{ asset('asset/image/defaultProfile.png') }}" alt="Customer Image">
                </div>
            </div>

           <!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Hallo Selamat Datang Para Admin Sekalian, hari ini</h2>
        </div>
        <!-- Tambahkan div untuk menampilkan grafik di sini -->
        <canvas id="myChart"></canvas>
        <canvas id="myChart1" width="400" height="400"></canvas>
    </div>
</div>

<!-- =========== Scripts =========  -->
<script>
    // Mengambil data dari controller
    var income = @json($income);
    var expense = @json($expense);
    var labels = @json($labels);

    // Mengatur data untuk grafik
    var data = {
        labels: labels,
        datasets: [{
            label: 'Income',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: Object.values(income)
        }, {
            label: 'Expense',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            data: Object.values(expense)
        }]
    };

    // Konfigurasi opsi grafik
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Membuat grafik dengan Chart.js
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
    <!-- =========== Scripts =========  -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
