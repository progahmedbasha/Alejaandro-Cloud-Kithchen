<!DOCTYPE html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            th,
            td {
                font-size: 15px;
                text-align: right;
                font-weight: bold;
            }

            .detail td {
                border: 1px solid gray;
            }

            body {
                margin: 0;
                padding: 0;
                height: auto;
            }

            /*
@page {
    size: A4;
    margin: 0;
}*/

            /*@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}*/
        </style>
    </head>

    <body onload="window.print()">
        {{--<div class="page">--}}
        <center>
            <div id="elem" style="text-align:center;width:250px;height:auto;font-size:12px;">
                <span style="font-size:60px;"><b>Alejandro</b></span><br>
                <span style="font-size:22px;">Cloud Kitchen</span><br>
                <br><br><br>
                <table class="detail" width="100%">
                    <tr>
                        <td>رقم : {{$order->number}}</td>
                        {{-- <td>{{$order->number}}</td> --}}
                        <td>وقت : {{$order->updated_at}}</td>
                        {{-- <td>{{$order->created_at}}</td> --}}
                    </tr>
                    <tr>
                        <td>موظف: {{ $order->user->name }}</td>
                        <td>عميل: {{ $order->client->name }}</td>
                    </tr>
                    <tr>
                        <td>
                            @if ($order->type == 1)
                            خدمة : {{ $order->service->name }}
                            @endif
                            @if ($order->type == 2)
                            Room : {{ $order->service->name }}
                            @endif
                        </td>
                        <td>العنوان: {{ $order->client->address }}</td>
                    </tr>
                </table>
                <br>
                <hr>
                @if ($order->orderItems->count() > 0)
                    
                <table>
                    <tr>
                        <th style="width:200px;">الصنف</th>
                        <th>السعر</th>
                        <th>الكمية</th>
                        <th>اجمالي</th>
                    </tr>
                    @foreach ($order->orderItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->total_cost }}</td>
                    </tr>
                    @endforeach
                </table>
                <hr>
                <span style="float:left;"> {{ $order->orderItems->sum('total_cost') }} ج</span><span style="float:right;">اجمالي</span>
                <br>
                <hr>
                @endif

                @if (isset($order->orderTimes[0]) && $order->orderTimes[0]->end_time != null)
                {{-- @php
                $startTime = \Carbon\Carbon::parse($order->start_time);
                $endTime = \Carbon\Carbon::parse($order->end_time);
                $durationInSeconds = $startTime->diffInSeconds($endTime);
                $price = $order->service->ps_price;
                $totalPrice = $durationInSeconds ? intval(($durationInSeconds / 3600) * $price) : 0;
                @endphp --}}
                {{-- <span style="float:left;"> {{ $totalPrice }} ج</span><span style="float:right;">Room</span> --}}
                <span style="float:left;"> {{ $order->orderTimes[0]->total_price }} ج</span><span style="float:right;">Room</span>
                <br>
                <hr>
                @endif
                @if (isset($order->orderTimes[0]) && $order->orderTimes[0]->end_time != null)
                <span style="float:left;">{{$order->orderTimes[0]->total_price + $order->orderItems->sum('total_cost') }} ج</span><span style="float:right;">اجمالي قبل
                    الخصم</span>
                @else
                <span style="float:left;">{{ $order->total_price }} ج</span><span style="float:right;">اجمالي قبل
                    الخصم</span>
                @endif
                <br>
                <span style="float:left;">{{ isset($order->discount) ? $order->discount : '0' }} ج </span><span
                    style="float:right;">اجمالي الخصم</span>
                <br>
                <hr>
                @if (isset($order->orderTimes[0]) && $order->orderTimes[0]->end_time != null)
                <span style="float:left;">{{$order->orderTimes[0]->total_price + $order->orderItems->sum('total_cost') - $order->discount}} ج</span><span
                    style="float:right;">الاجمالي النهائي</span>
                @else
                <span style="float:left;">{{ $order->orderItems->sum('total_cost') - $order->discount }} ج</span><span
                    style="float:right;">الاجمالي النهائي</span>
                @endif
                <br>
                {{-- <span style="float:left;">3 ج</span><span style="float:right;">المدفوع</span>
                <br>
                <span style="float:left;">3 ج</span><span style="float:right;">المتبقي</span> --}}
                <br>
                <br>
                <span><i class="fa fa-whatsapp" aria-hidden="true"></i>01129798898</span>
                <br>
                <span><i class="fa fa-instagram" aria-hidden="true"></i> alejandro.eg25</span>
                <p style="text-align: center; font-size: 10px; margin-top: 10px;">
                    شكراً لاختياركم <strong>Alejandro</strong> 🍽️ نحب نسمع رأيكم ❤️
                </p>
                <br><br>


                {{-- <img src="data:image/png;base64,w" alt="barcode" /> --}}
                {{-- <br>
                1 --}}
            </div>
        </center>
        {{--</div>--}}
    </body>
    