{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pembelian</title>
    <style>
        #back-wrap {
            margin: 30px auto 0 auto;
            width: 500px;
            display: flex;
            justify-content: flex-end;
        }
        .btn-back {
            width: fit-content;
            padding: 8px 15px;
            color: #fff;
            background: #666;
            border-radius: 5px;
            text-decoration: none;
        }
        #receipt {
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin: 30px auto 0 auto;
            width: 500px;
            background: #FFF;
        }
        h2 {
            font-size: 1.5rem;
            color: #666;
            line-height: 1.2rem;
        }
        #top {
            margin-top: 25px;
        }
        #top .info {
            text-align: left;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px 15px;
            border: 1px solid #EEE;
        }
        .tabletitle {
            font-size: 1rem;
            background: #EEE;
        }
        .service {
            border-bottom: 1px solid #EEE;
        }
        .itemtext {
            font-size: 1rem;
        }
        #legalcopy {
            margin-top: 15px;
        }
        .btn-print {
            float: right;
            color: #333;
        }
    </style>
</head>
<body>
    <div id="back-wrap">
        <a href="{{ route('kasir.order.index') }}" class="btn-back">Kembali</a>
    </div>
    <div id="receipt">
        <a href="" class="btn-print">Cetak (.pdf)</a>
        <center id="top">
            <div class="info">
                <h2>Apotek Jaya Abadi</h2>
            </div>
        </center>
        <div id="mid">
            <div class="info">
                <p>
                    Alamat: sepanjang jalan kenangan<br>
                    Email: apotekjayaabadi@gmail.com<br>
                    Phone: 000-111-2222
                </p>
            </div>
        </div>
        <div id="bot">
            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item"><h2>Obat</h2></td>
                        <td class="item"><h2>Total</h2></td>
                        <td class="Rate"><h2>Harga</h2></td>
                    </tr>
                    @foreach ($order['medicines'] as $medicine)
                    <tr class="service">
                        <td class="tableitem"><p class="itemtext">{{ $medicine['name_medicine'] }}</p></td>
                        <td class="tableitem"><p class="itemtext">{{ $medicine['qty'] }}</p></td>
                        <td class="tableitem"><p class="itemtext">Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}</p></td>
                    </tr>
                    @endforeach
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h2>PPN (10%)</h2></td>
                        @php $ppn = $order['total_price'] * 0.1; @endphp
                        <td class="payment"><h2>Rp. {{ number_format($ppn, 0, ',', '.') }}</h2></td>
                    </tr>
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h2>Total Harga</h2></td>
                        <td class="payment"><h2>Rp. {{ number_format($order['total_price'], 0, ',', '.') }}</h2></td>
                    </tr>
                </table>
            </div>
            <div id="legalcopy">
                <p class="legal"><strong>Terima kasih atas pembelian Anda!</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores natus et numquam ducimus dolorum tenetur.</p>
            </div>
        </div>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pembelian</title>
    <style>
        #back-wrap {
            margin: 30px auto 0 auto;
            width: 500px;
            display: flex;
            justify-content: flex-end;
        }
        .btn-back {
            width: fit-content;
            padding: 8px 15px;
            color: #fff;
            background: #666;
            border-radius: 5px;
            text-decoration: none;
        }
        #receipt {
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin: 30px auto 0 auto;
            width: 500px;
            background: #FFF;
        }
        h2 {
            font-size: 1.5rem;
            color: #666;
            line-height: 1.2rem;
        }
        #top {
            margin-top: 25px;
        }
        #top .info {
            text-align: left;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px 15px;
            border: 1px solid #EEE;
        }
        .tabletitle {
            font-size: 1rem;
            background: #EEE;
        }
        .service {
            border-bottom: 1px solid #EEE;
        }
        .itemtext {
            font-size: 1rem;
        }
        #legalcopy {
            margin-top: 15px;
        }
        .btn-print {
            float: right;
            color: #333;
        }
    </style>
</head>
<body>
    <div id="back-wrap">
        <a href="{{ route('kasir.order.index') }}" class="btn-back">Kembali</a>
    </div>
    <div id="receipt">
        <a href="" class="btn-print" onclick="window.print()">Cetak (.pdf)</a>
        <center id="top">
            <div class="info">
                <h2>Apotek Jaya Abadi</h2>
            </div>
        </center>
        <div id="mid">
            <div class="info">
                <p>
                    Alamat: sebagainya<br>
                    Email: apotekjayaabadi@gmail.com<br>
                    Phone: 000-111-2222
                </p>
            </div>
        </div>
        <div id="bot">
            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item"><h2>Obat</h2></td>
                        <td class="item"><h2>Total</h2></td>
                        <td class="Rate"><h2>Harga</h2></td>
                    </tr>
                    @foreach ($order['medicines'] as $medicine)
                    <tr class="service">
                        <td class="tableitem"><p class="itemtext">{{ $medicine['name_medicine'] }}</p></td>
                        <td class="tableitem"><p class="itemtext">{{ $medicine['qty'] }}</p></td>
                        <td class="tableitem"><p class="itemtext">Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}</p></td>
                    </tr>
                    @endforeach
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h2>PPN (10%)</h2></td>
                        @php $ppn = $order['total_price'] * 0.1; @endphp
                        <td class="payment"><h2>Rp. {{ number_format($ppn, 0, ',', '.') }}</h2></td>
                    </tr>
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate"><h2>Total Harga</h2></td>
                        <td class="payment"><h2>Rp. {{ number_format($order['total_price'], 0, ',', '.') }}</h2></td>
                    </tr>
                </table>
            </div>
            <div id="legalcopy">
                <p class="legal"><strong>Terima kasih atas pembelian Anda!</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores natus et numquam ducimus dolorum tenetur.</p>
            </div>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Sample Receipt</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bangers|Roboto'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0px;
            padding: 0px;
            display: grid;
            place-items: center;
        }

        .receipt {
            padding: 3mm;
            width: 80mm;
            border: 1px solid black;
        }

        .orderNo {
            width: 100%;
            text-align: right;
            padding-bottom: 1mm;
            font-size: 8pt;
            font-weight: bold;
        }

        .orderNo:empty {
            display: none;
        }

        .headerSubTitle {
            text-align: center;
            font-size: 12pt;
        }

        .headerTitle {
            text-align: center;
            font-size: 24pt;
            font-weight: bold;
        }

        #location {
            margin-top: 5pt;
            text-align: center;
            font-size: 16pt;
            font-weight: bold;
        }

        #date {
            margin: 5pt 0px;
            text-align: center;
            font-size: 8pt;
        }

        #barcode {
            display: block;
            margin: 0px auto;
        }

        #barcode:empty {
            display: none;
        }

        .watermark {
            position: absolute;
            left: 7mm;
            top: 60mm;
            width: 75mm;
            opacity: 0.1;
        }

        .keepIt {
            text-align: center;
            font-size: 12pt;
            font-weight: bold;
        }

        .keepItBody {
            text-align: justify;
            font-size: 8pt;
        }

        .item {
            margin-bottom: 1mm;
        }

        .itemRow {
            display: flex;
            font-size: 8pt;
            align-items: baseline;
        }

        .itemRow>div {
            align-items: baseline;
        }

        .itemName {
            font-weight: bold;
        }

        .itemPrice {
            text-align: right;
            flex-grow: 1;
        }

        .itemColor {
            width: 10px;
            height: 100%;
            background: yellow;
            margin: 0px 2px;
            padding: 0px;
        }

        .itemColor:before {
            content: "\00a0";
        }


        .itemData2 {
            text-align: right;
            flex-grow: 1;
        }

        .itemData3 {
            width: 15mm;
            text-align: right;
        }

        .itemQuantity:before {
            content: "x";
        }

        .itemTaxable:after {
            content: " T";
        }

        .flex {
            display: flex;
            justify-content: center;
        }

        #qrcode {
            align-self: center;
            flex: 0 0 100px
        }

        .totals {
            flex-grow: 1;
            align-self: center;
            font-size: 8pt;
        }

        .totals .row {
            display: flex;
            text-align: right;
        }

        .totals .section {
            padding-top: 2mm;
        }

        .totalRow>div,
        .total>div {
            text-align: right;
            align-items: baseline;
            font-size: 8pt;
        }

        .totals .col1 {
            text-align: right;
            flex-grow: 1;
        }

        .totals .col2 {
            width: 22mm;
        }

        .totals .col2:empty {
            display: none;
        }

        .totals .col3 {
            width: 15mm;
        }

        .footer {
            overflow: hidden;
            margin-top: 5mm;
            border-radius: 7px;
            width: 100%;
            background: black;
            color: white;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .footer:empty {
            display: none;
        }

        .eta {
            padding: 1mm 0px;
        }

        .eta:empty {
            display: none;
        }

        .eta:before {
            content: "Estimated time order will be ready: ";
            font-size: 8pt;
            display: block;
        }

        .etaLabel {
            font-size: 8pt;
        }

        .printType {
            padding: 1mm 0px;
            width: 100%;
            background: grey;
            color: white;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .about {
            font-size: 12pt;
            overflow: hidden;
            background: #FCEC52;
            color: #3A5743;
            border-radius: 7px;
            padding: 0px;
            position: absolute;
            width: 500px;
            text-align: center;
            left: 50%;
            margin-top: 50px;
            margin-left: -250px;
        }

        .about li {
            text-align: left;
        }
        .btn-back, .btn-print {
            width: fit-content;
            padding: 5px 1px;
            color: #fff;
            background: #666;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-print {
            margin-left: 110px;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <div class="orderNo">
            Order# <span id="Order #">{{$order->id}}</span>: <span id="Order Name">Apotek Rahman</span>
        </div>
        <div class="headerSubTitle">
            Thank you for supporting the Apllication
        </div>
        <div class="headerTitle">
            Apotek Rahman
        </div>
        <div class="headerSubTitle">
            A Part of SMK Wikrama
        </div>
        <div id="location">
            BronyCon 2018
        </div>
        <div id="date">
            @php
                echo date("F j, Y, g:i a");
            @endphp
        </div>
        <svg id="barcode"></svg>
        <hr>

        <!-- Items Purchased -->
        <div class="items">
            <div class="item">
                <div class="itemRow">
                    <div class="itemName">Where There's Trouble</div>
                </div>
                @foreach ($order['medicines'] as $medicine)
                <div class="itemRow">
                    <div class="itemData1">{{ $medicine['name_medicine'] }}</div>
                    <div class="itemData2">Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}</div>
                    <div class="itemData3 itemQuantity">{{ $medicine['qty'] }}</div>
                </div>
                @endforeach
           
        <!-- Totals -->
        <hr>
        <div class="flex">
            <div id="qrcode"></div>
            <div class="totals">
                <div class="section">
                    <div class="row">
                        <div class="col1"></div>
                        <div class="col2">PPN</div>
                        @php $ppn = $order['total_price'] * 0.1; @endphp
                        <div class="col2">Rp. {{ number_format($ppn, 0, ',', '.') }}</div>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col1">Total</div>
                        <div class="col2"></div>
                        <div class="col3">Rp. {{ number_format($order['total_price'], 0, ',', '.') }}</div>
                    </div>
                </div>
                <div class="section">
                    <a href="" onclick="window.print()" class="col1 btn-print">Print Receipt</a>
                    <a href="{{ route('kasir.order.index') }}" class="col2 btn-back">Back</a>
                </div>
            </div>
        </div>

        {{-- <tr class="tabletitle">
            <td></td>
            <td class="Rate"><h2>PPN (10%)</h2></td>
            @php $ppn = $order['total_price'] * 0.1; @endphp
            <td class="payment"><h2>Rp. {{ number_format($ppn, 0, ',', '.') }}</h2></td>
        </tr>
        <tr class="tabletitle">
            <td></td>
            <td class="Rate"><h2>Total Harga</h2></td>
            <td class="payment"><h2>Rp. {{ number_format($order['total_price'], 0, ',', '.') }}</h2></td>
        </tr>
    </table> --}}
    </div>
    <script src='https://cdn.jsdelivr.net/npm/jsbarcode@3.8.0/dist/barcodes/JsBarcode.code128.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/davidshimjs-qrcodejs@0.0.2/qrcode.min.js'></script>
    <script>
        var receiptID = "20180613T130518.512Z";
        var receiptQRID = "4#4s1Fs"

        JsBarcode("#barcode", receiptID, {
            format: "code128",
            width: 1.3,
            height: 30,
            marginLeft: 0,
            displayValue: false
        });

        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "https://gg.bronyhouse.com/r/" + receiptQRID,
            colorDark: "#000000",
            colorLight: "#ffffff",
            width: 100,
            height: 100,
            correctLevel: QRCode.CorrectLevel.H,
        });
    </script>
</body>

</html>

