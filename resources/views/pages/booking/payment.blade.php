@extends('index')

@section('content')
@section('midtranshead')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="env('MIDTRANS_CLIENT_KEY')"></script>
@endsection
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Konfirmasi Pesanan</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Booking</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konfirmasi Pesanan</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pt-5">
                                <div class="col-lg-6">
                                    <p class="h4 fw-semibold">Detail Pembayaran</p>
                                    <p class="mb-1">Tamu : {{ $tamu }}</p>
                                    <p class="mb-1">Tanggal Check-in : {{ date('d/m/Y', strtotime($checkin)) }}
                                    </p>
                                    <p class="mb-1">Tanggal Check-out : {{ date('d/m/Y', strtotime($checkout)) }}
                                    </p>
                                </div>
                            </div>
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <tbody>
                                        <tr class=" ">
                                            <th class="text-center">No</th>
                                            <th>Pesanan</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <p class="font-w600 mb-1">Kamar Tipe {{ $tipekamar }}</p>
                                            </td>
            
                                            <td>
                                                <p class="font-w600 mb-1">
                                                    Rp.{{ number_format($harga, 2, ',', '.') }}</p>
                                            </td>
                                            <td>
                                                <p class="font-w600 mb-1">Rp.0,00</p>
                                            </td>
                                            <td class="text-end">Rp.{{ number_format($harga, 2, ',', '.') }}</td>
                                        </tr>
                                        @if ($fasilitas == 0)
                                        @else
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>
                                                    <p class="font-w600 mb-1">Extra Bed</p>
                                                </td>
                                                <td>
                                                    <p class="font-w600 mb-1">
                                                        Rp.{{ number_format($fasilitas, 2, ',', '.') }}</p>
                                                </td>
                                                <td>
                                                    <p class="font-w600 mb-1">Rp.0,00</p>
                                                </td>
                                                <td class="text-end">
                                                    Rp.{{ number_format($fasilitas, 2, ',', '.') }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="fw-bold text-uppercase text-end">Total
                                            </td>
                                            <td class="fw-bold text-end h4">
                                                {{ number_format($total, 2, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button id="pay-button" class="btn btn-primary"><i class="icon icon-wallet"></i> Bayar Sekarang</button>
                        </div>
                        <form action="" id="submit" method="post">
                            @csrf
                            <input type="hidden" name="json" id="json_callback">
                        </form>
                    </div>
                </div>
                <!-- COL-END -->
            </div>

            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
</div>
@section('midtransfooter')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_respon(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_respon(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_respon(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
            // customer will be redirected after completing payment pop-up
        });

        function send_respon(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit').submit();
        }
    </script>
@endsection
@endsection
