<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <!-- Main CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!-- Main CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


</head>

<body>

    <div class="page-content container">
        <div class="page-header text-blue-d2 no-print">
            <h1 class="page-title text-secondary-d1">
                <small class="page-info">
                    Filter Bulan
                    <i class="fa fa-angle-double-right text-80"></i>
                    <input type="month" id="filter-month" name="filter-month" onchange="filterTableByMonth()">
                </small>
            </h1>

            <div class="page-tools">
                <div class="action-buttons">
                    <a id="print-btn" class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                        Print
                    </a>
                    <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                        Export
                    </a>
                </div>
            </div>
        </div>

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center text-200 fw-600">
                                <span class="text-default-d2">Laporan Donasi</span>
                            </div>
                        </div>
                    </div>
                    <hr class="row brc-default-l1 mx-n1 mb-4">
                    <div class="table-responsive mt-5">
                        <table id="donasi-table" class="table table-sm table-striped table-bordered border-0 border-b-2 brc-default-l1" style="width: 100%">
                            <thead class="bg-none bgc-default-tp1">
                                <tr class="text-white">
                                    <th class="opacity-2">#</th>
                                    <th>ID Donasi</th>
                                    <th>Informasi Bencana</th>
                                    <th>Donatur</th>
                                    <th>Tanggal Donasi</th>
                                    <th>Jumlah Donasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-95 text-secondary-d3" id="donasi-body">
                                @php
                                    $totalDonasi = 0;
                                @endphp
                                @foreach ($donasi as $index => $d)
                                @php
                                    $totalDonasi += $d->jumlah_donasi;
                                @endphp
                                    <tr data-tanggal="{{ \Carbon\Carbon::parse($d->tanggal)->format('Y-m') }}">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $d->id_donasi }}</td>
                                        <td width="440">{{ $d->informasiBencana->judul }}</td>
                                        <td>{{ $d->Donatur->nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($d->tanggal)->format('d F Y') }}</td>
                                        <td class="jumlah-donasi">Rp. {{ number_format($d->jumlah_donasi) }}</td>
                                        <td>{{ $d->status }}</td>
                                    </tr>
                                @endforeach
                                <tr class="text-center">
                                    <td colspan="5">Total Donasi </td>
                                    <td colspan="2" id="total-donasi">Rp. {{ number_format($totalDonasi) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Added signature section -->
                    <div class="signature-section mt-5">
                        <div class="row ">
                            <div class="col-9">
                            </div>
                            <div class="col-3 text-center">
                                <p>Padang, <span id="current-date">{{ date('d F Y') }}</span></p>
                                <p>Penanggung Jawab</p>
                                <p style="margin-top: 80px; border-top: 1px solid rgb(106, 100, 100); width: 150px; margin-left: 45px;">Admin</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

        <script>
            // Tombol Print
            document.getElementById("print-btn").addEventListener("click", function() {
                window.print();
            });

            // Tombol PDF
            document.getElementById("export-btn").addEventListener("click", function() {
                var table = document.getElementById("donasi-table");
                var html = table.outerHTML;
                var pdf = new jsPDF('l', 'mm', 'a4');
                pdf.addHTML(table, function() {
                    pdf.save('donasi-laporan.pdf');
                });
            });
        </script>

        <script>
            function filterTableByMonth() {
            // Mendapatkan nilai bulan dari form
            var month = document.getElementById("filter-month").value;

            // Mendapatkan tabel
            var tableBody = document.getElementById("donasi-body");
            var rows = tableBody.getElementsByTagName("tr");
            var totalDonasi = 0;
            var count = 0;

            // Menyembunyikan semua baris dan menghitung total donasi
            for (var i = 0; i < rows.length - 1; i++) { // Mengabaikan baris total
                var row = rows[i];
                var tanggal = row.getAttribute("data-tanggal");

                if (tanggal.startsWith(month)) {
                    row.style.display = ""; // Tampilkan baris
                    totalDonasi += parseFloat(row.getElementsByClassName("jumlah-donasi")[0].innerText.replace(/[^0-9]/g, ''));
                    count++;
                } else {
                    row.style.display = "none"; // Sembunyikan baris
                }
            }

            // Menampilkan total donasi
            document.getElementById("total-donasi").innerHTML = "Rp. " + totalDonasi.toLocaleString();

            // Menomori ulang tabel
            var newCount = 1;
            for (var i = 0; i < rows.length - 1; i++) { // Mengabaikan baris total
                var row = rows[i];
                var tanggal = row.getAttribute("data-tanggal");

                if (tanggal.startsWith(month)) {
                    row.children[0].innerHTML = newCount.toString();
                    newCount++;
                }
            }
        }
        </script>


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
        const filterMonthInput = document.getElementById('filter-month');
        const donasiTable = document.getElementById('donasi-table');
        const rows = donasiTable.querySelectorAll('tbody tr'); // Use querySelectorAll for better performance
        const totalDonasiCell = document.getElementById('total-donasi');
        let originalTotalDonasi = 0; // Menyimpan total donasi asli

        // Hitung total donasi asli saat pertama kali dimuat
        let totalDonasi = 0;
        const jumlahDonasiCells = donasiTable.querySelectorAll('.jumlah-donasi'); // Use querySelectorAll for better performance
        for (let cell of jumlahDonasiCells) {
            const donasiText = cell.textContent.replace('Rp. ', '').replace(/,/g, '');
            totalDonasi += parseInt(donasiText, 10);
        }
        originalTotalDonasi = totalDonasi;
        totalDonasiCell.textContent = `Rp. ${number_format(originalTotalDonasi)}`;

        function updateTotalDonasi() {
            let totalDonasi = 0;
            const visibleRows = donasiTable.querySelectorAll('tbody tr:not([style*="display: none"])'); // Use :not pseudo-class to select visible rows
            for (let row of visibleRows) {
            const jumlahDonasiCell = row.querySelector('.jumlah-donasi');
            if (jumlahDonasiCell) {
                const donasiText = jumlahDonasiCell.textContent.replace('Rp. ', '').replace(/,/g, '');
                totalDonasi += parseInt(donasiText, 10);
            }
            }
            totalDonasiCell.textContent = `Rp. ${number_format(totalDonasi)}`;
        }

        function number_format(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }

        filterMonthInput.addEventListener('change', function() {
            const selectedMonth = filterMonthInput.value;
            const [selectedYear, selectedMonthNumber] = selectedMonth.split('-');

            let newRowNumber = 1;
            let hasData = false;

            for (let row of rows) {
            const tanggalCell = row.cells[4]; // Use cells property instead of getElementsByTagName
            if (tanggalCell) {
                const tanggalText = tanggalCell.textContent.trim();
                const [day, month, year] = tanggalText.split(' ');

                const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                const monthNumber = monthNames.indexOf(month) + 1;

                if (selectedMonth === '') {
                row.style.display = '';
                row.cells[0].textContent = newRowNumber++;
                } else if (year === selectedYear && monthNumber === parseInt(selectedMonthNumber, 10)) {
                row.style.display = '';
                row.cells[0].textContent = newRowNumber++;
                hasData = true;
                } else {
                row.style.display = 'none';
                }
            } else {
                console.log(`No tanggal cell found for row ${row}`);
            }
            }

            const noDataRow = donasiTable.querySelector('tr td[colspan]');
            if (noDataRow) {
            noDataRow.parentNode.remove();
            }

            if (!hasData && selectedMonth!== '') {
            const noDataRow = document.createElement('tr');
            const noDataCell = document.createElement('td');
            noDataCell.colSpan = rows[0].cells.length;
            noDataCell.textContent = 'Tidak ada data';
            noDataCell.style.textAlign = 'center';
            noDataRow.appendChild(noDataCell);
            donasiTable.tBodies[0].appendChild(noDataRow);
            }

            // Perbarui total donasi
            updateTotalDonasi();
        });
        });
      </script> --}}

</body>

</html>
