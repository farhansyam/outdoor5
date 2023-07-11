@extends('layouts.backend_master')
@section('kontent')
<canvas id="bookingChart" width="400" height="200"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var bookingData = {!! $bookingData !!};

var labels = [];
var values = [];

for (var i = 0; i < bookingData.length; i++) {
    labels.push(bookingData[i].date);
    values.push(bookingData[i].count);
}

var ctx = document.getElementById('bookingChart').getContext('2d');
var bookingChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Booking Resi',
            data: values,
            borderColor: 'blue',
            backgroundColor: 'transparent',
            fill: false
        }]
    },
    options: {
        // Konfigurasi lainnya untuk grafik
    }
});


</script>
@endsection