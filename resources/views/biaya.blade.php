<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bu'e </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet"href="{{ asset('asset/css/dashboard/style.css') }}">
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
                    <a href="{{ url('/biaya') }}">
                        <span class="icon">
                            <ion-icon name="swap-horizontal-outline"></ion-icon>
                        </span>
                        <span class="title">Biaya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/product') }}">
                        <span class="icon">
                            <ion-icon name="pricetags-outline"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/category') }}">
                        <span class="icon">
                            <ion-icon name="copy-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Account</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/cart') }}">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Cart</span>
                    </a>
                </li> 
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
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
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        onClick="toggleUserInfo()">
                        <div class="user"> <!-- Menggunakan div sebagai gantinya -->
                            <img src="{{ asset('asset/image/defaultProfile.png') }}" alt="Customer Image">
                        </div>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('admin')->username }}</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('admin')->email }}</span>
                        </a>
                    </div>
                </div>
            </div>
            {{--main containner --}}
            <div class="main-container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tombol Insert -->
                        <button class="insert-button" onclick="window.location.href='{{ route('biaya.create') }}'">
                            <ion-icon name="add-circle-outline"></ion-icon> Insert
                        </button>
                        <!-- Tombol Download All -->
                        <button class="download-button" onclick="window.location.href='{{ route('download.all.pdf') }}'">
                            Download All
                        </button>
                        <!-- Filter Section -->
                        <div class="filter-section">
                            <input type="date" id="startDate" class="filter">
                            <input type="date" id="endDate" class="filter">
                            <button class="filter-button" onclick="filterByDate()">Filter</button>
                            <button class="download-button" onclick="downloadFiltered()">Download Filtered</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="custom-table">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>no</th>
                                        <th>Tanggal Produksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Product</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data Biaya -->
                                    @php
                                        $totalPemasukan = 0;
                                        $totalPengeluaran = 0;
                                    @endphp
                                    @foreach($biaya as $key => $item)
                                    <tr class="custom-alert" role="alert">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->end_date }}</td>
                                        <td>{{ $item->name_product }}</td>
                                        <td>{{ $item->type == 'income' ? 'Rp'.number_format($item->amount, 0, ',', '.') : '0' }}</td>
                                        <td>{{ $item->type == 'expense' ? 'Rp'.number_format($item->amount, 0, ',', '.') : '0' }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            @php
                                                if ($item->type == 'income') {
                                                    $totalPemasukan += $item->amount;
                                                } else if ($item->type == 'expense') {
                                                    $totalPengeluaran += $item->amount;
                                                }
                                            @endphp
                                        </td>
                                        <td>
                                            <!-- Tombol Download untuk setiap entri biaya -->
                                            <div class="button-group">
                                                <button class="download-button" onclick="window.location.href='{{ route('download.pdf', ['id' => $item->id]) }}'">
                                                    <ion-icon name="download-outline"></ion-icon>
                                                </button>
                                            </div>
                                            {{-- tombol untuk edit datanya --}}
                                            <div class="button-group">
                                                <button class="edit-button" onclick="window.location.href='{{ route('biaya.edit', ['id' => $item->id]) }}'">
                                                    <ion-icon name="create-outline"></ion-icon>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td><strong>Total Pemasukan:</strong> Rp{{ number_format($totalPemasukan, 0, ',', '.') }}</td>
                                        <td><strong>Total Pengeluaran:</strong> Rp{{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
                                        <td colspan="5"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="custom-footer">
                <div class="custom-container">
                    <p>&copy; 2024 Bu'e Cookies and pastry. All rights reserved.</p>
                </div>
            </footer>

            <script>
                function filterByDate() {
                    var startDate = document.getElementById('startDate').value;
                    var endDate = document.getElementById('endDate').value;
                    // Redirect to the route with query parameters
                    window.location.href = "{{ route('index') }}?startDate=" + startDate + "&endDate=" + endDate;
                }
                function downloadFiltered() {
        var startDate = document.getElementById('startDate').value;
        var endDate = document.getElementById('endDate').value;
        // Redirect to the route for downloading filtered data
        window.location.href = "{{ route('download.filtered.pdf') }}?startDate=" + startDate + "&endDate=" + endDate;
    }
    function toggleUserInfo() {
    var userInfo = document.querySelector(".dropdown-menu");
    userInfo.classList.toggle("show");
}

// Menambahkan event listener untuk menutup dropdown saat klik di luar dropdown
window.addEventListener("click", function(event) {
    var dropdownMenu = document.querySelector(".dropdown-menu");
    var userDropdown = document.querySelector(".dropdown-toggle");
    if (!userDropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove("show");
    }
});

// Fungsi untuk menutup dropdown saat modal signout ditutup
$('#logoutModal').on('hidden.bs.modal', function (e) {
    var dropdownMenu = document.querySelector(".dropdown-menu");
    dropdownMenu.classList.remove("show");
});

            </script>


    <!-- =========== Scripts =========  -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
