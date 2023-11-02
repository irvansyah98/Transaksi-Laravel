@extends('backend.master')

@section('title','Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Selamat Datang</h1>
    </div>
    <div class="row">
      <a href="{{ url('backend/item/in') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Closed</h4>
            </div>
            <div class="card-body">
              {{ $stage_closed }}
            </div>
          </div>
        </div>
      </a>
      <a href="{{ url('backend/item/out') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Open</h4>
            </div>
            <div class="card-body">
              {{ $stage_open }}
            </div>
          </div>
        </div>
      </a>
      <a href="{{ url('backend/item/outofstock') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Re-Open</h4>
            </div>
            <div class="card-body">
              {{ $stage_reopen }}
            </div>
          </div>
        </div>
      </a>
      <a href="{{ url('backend/item/instock') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Responded</h4>
            </div>
            <div class="card-body">
              {{ $stage_responded }}
            </div>
          </div>
        </div>
      </a>   
      <a href="{{ url('backend/item/instock') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Verified</h4>
            </div>
            <div class="card-body">
              {{ $stage_verified }}
            </div>
          </div>
        </div>
      </a> 
      <a href="{{ url('backend/item/instock') }}" class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-calendar-plus"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Stage Voided</h4>
            </div>
            <div class="card-body">
              {{ $stage_voided }}
            </div>
          </div>
        </div>
      </a>                
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Effectiveness</h4>
          </div>
          <div class="card-body">
            <canvas id="myChart4"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Stage</h4>
          </div>
          <div class="card-body">
            <table class="table table-striped table-md" id="">
              <thead>
                <tr>
                  <th>Recipient Div</th>
                  <th>Closed</th>
                  <th>Open</th>
                  <th>Re-Open</th>
                  <th>Responded</th>
                  <th>Verified</th>
                  <th>Voided</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $total_closed = 0;
                  $total_open = 0;
                  $total_reopen = 0;
                  $total_responded = 0;
                  $total_verified = 0;
                  $total_voided = 0;
                @endphp
                @foreach ($stage as $item)
                  <tr>
                    <td>{{ $item->recipient_div }}</td>
                    <td>{{ $item->closed }}</td>
                    <td>{{ $item->open }}</td>
                    <td>{{ $item->reopen }}</td>
                    <td>{{ $item->responded }}</td>
                    <td>{{ $item->verified }}</td>
                    <td>{{ $item->voided }}</td>
                  </tr>
                  @php
                    $total_closed += $item->closed;
                    $total_open += $item->open;
                    $total_reopen += $item->reopen;
                    $total_responded += $item->responded;
                    $total_verified += $item->verified;
                    $total_voided += $item->voided;
                  @endphp
                @endforeach
                  <tr>
                    <td><b>Grand Total</b></td>
                    <td><b>{{ $total_closed }}</b></td>
                    <td><b>{{ $total_open }}</b></td>
                    <td><b>{{ $total_reopen }}</b></td>
                    <td><b>{{ $total_responded }}</b></td>
                    <td><b>{{ $total_verified }}</b></td>
                    <td><b>{{ $total_voided }}</b></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Status</h4>
          </div>
          <div class="card-body">
            <canvas id="myChart3"></canvas>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('js')
@parent
<script type="text/javascript">
$(document).ready(function(){
  var ctx = document.getElementById("myChart3").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [
          {{ $status_open }},
          {{ $status_closed }},
          {{ $status_cancel }},
        ],
        backgroundColor: [
          '#191d21',
          '#63ed7a',
          '#ffa426',
        ],
        label: 'Dataset 1'
      }],
      labels: [
        'Open',
        'Closed',
        'Canceled',
      ],
    },
    options: {
      responsive: true,
      legend: {
        position: 'bottom',
      },
    }
  });

  // Ambil elemen canvas sebagai tempat untuk menampilkan chart
  var ctx2 = document.getElementById('myChart4').getContext('2d');

  // Data yang akan digunakan untuk chart
  var data = {
      labels: ['CC', 'COMMERCIAL', 'CR', 'HR&GA', 'HSE', 'IT','KEY ACCOUNT','OPERATION','PROCUREMENT','SALES','TRUCKING'],
      datasets: [{
          label: 'Effective',
          data: {{ json_encode($result_effective) }},
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
      },
      {
          label: 'Not Effective',
          data: {{ json_encode($result_noteffective) }},
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
      }]
  };

  // Konfigurasi chart
  var options = {
      scales: {
          y: {
              beginAtZero: true
          }
      }
  };

  // Buat chart bar
  var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: data,
      options: options
  });

});
</script>
@endsection