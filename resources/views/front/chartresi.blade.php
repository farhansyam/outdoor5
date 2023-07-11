@extends('layouts.frontend_master')
@section('kontent')
<style>
    .warning {
  background-color: #ffc107; /* Warna latar belakang warning */
  padding: 10px;
  border: 1px solid #f0ad4e; /* Warna border warning */
  color: #721c24; /* Warna teks warning */
}
    .primary {
  background-color: #07b0ff; /* Warna latar belakang warning */
  padding: 10px;
  border: 1px solid #4ebaf0; /* Warna border warning */
  color: #0084ff; /* Warna teks warning */
}
    .success {
  background-color: #59ffaf; /* Warna latar belakang warning */
  padding: 10px;
  border: 1px solid #59ffaf; /* Warna border warning */
  color: #076f3d; /* Warna teks warning */
}
</style>
<h3>Booking</h1>
    <div class="mb-1">
        <button class="btn btn-primary btn-sm w-" onclick="window.print()">print</button>
    </div>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Harga / Hari</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($charts as $chart)
            @php
                 $product = App\Models\Product::where('product_id',$chart->id_barang)->first();
            
            @endphp
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $product->product_name }}</td>
                <td>Rp.{{ $product->product_price }}</td>
                <td>{{ $chart->jumlah }}</td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
        <td>Total : Rp. {{$totalHarga}}</td><tr></tr>
        <td>Kode Resi :{{$resi->resi}}</td>
        <tr></tr>

        @php
            if($resi->status == 0)
            {
                echo '<td class="warning">Status : Belum dibayar</td>';
            }else if($resi->status == 1){
                echo '<td class="primary">Status : Dibayar - Belum dikembalikan</td>';
            }else{
                echo '<td class="success">Status : Selesai - Dikembalikan</td>';
            }
            @endphp
            
        <tr></tr>
        <td class="warning">Segera Tukarkan Resi ini ke toko offline kami sebelum <b>{{$expiry_time}}</b>
                <p id="countdown-timer"></p>
        </td>
    </table>
</div>
 <script>
        // Mendapatkan waktu sekarang di sisi klien (browser)
        var currentTime = new Date();

        // Mendapatkan waktu kadaluarsa (created_at + 24 jam) dari Laravel
        var expirationTime = new Date("{{ $resi->created_at->addDay() }}");

        // Hitungan mundur waktu yang tersisa dalam detik
        var remainingTime = Math.floor((expirationTime - currentTime) / 1000);

        // Fungsi untuk mengupdate hitungan mundur setiap detik
        function updateCountdown() {
            var hours = Math.floor(remainingTime / 3600);
            var minutes = Math.floor((remainingTime % 3600) / 60);
            var seconds = remainingTime % 60;

            // Format waktu menjadi HH:MM:SS
            var formattedTime = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);

            // Menampilkan waktu pada elemen dengan id "countdown-timer"
            document.getElementById("countdown-timer").innerHTML = formattedTime;

            // Mengurangi waktu mundur setiap detik
            remainingTime--;

            // Menghentikan hitungan mundur jika waktu sudah habis
            if (remainingTime < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown-timer").innerHTML = "Waktu telah habis!";
            }
        }

        // Memanggil fungsi updateCountdown setiap 1 detik
        var countdownInterval = setInterval(updateCountdown, 1000);
    </script>

@endsection