@extends('layouts.app')

@section('content')

<div class="wrapper">
    <main>
        <div class="container-fluid py-3">
            <div class="row col-12 justify-content-center m-0">
                <div class="col-12">
                    <!-- 直近3ヶ月表示ボタン -->
                    <div class="col-12 ">
                        <button class="btn btn-secondary btn-sm" >直近3ヶ月の注文を表示</button>
                    </div>
                    <div class="mt-2">
                        <table class="table">
                            <thead>
                                <tr class="d-flex">
                                    <th scope="col" class="col-1 px-0 py-1 text-center">No</th>
                                    <th scope="col" class="col-2 px-0 py-1 text-center">注文番号</th>
                                    <th scope="col" class="col-4 px-2 py-1">お届け先</th>
                                    <th scope="col" class="col-3 px-0 py-1">備考</th>
                                    <th scope="col" class="col-2 px-0 py-1 text-center"></th>
                                </tr>
                            </thead>
                            <tbody class="" style="overflow-y:auto;max-height:400px;display:block">
                                <tr class="d-flex">
                                    @foreach ($orders_details as $order_details)
                                            <th scope="row" class="col-1 px-0 text-center">1</th>
                                            <td class="col-2 px-0 text-center" id="order_number_1">{{ $order_details->id }}</td>
                                            <td class="col-4 px-2">
                                                <div>〒<span id="postal_code_1"></span>{{ $order_details->users->zipcode }}</div>
                                                <div id="address_1">
                                                    {{ $order_details->users->prefecture }}
                                                    {{ $order_details->users->municipality }}
                                                    {{ $order_details->users->address }}
                                                </div>
                                                <div id="order_name_1">
                                                    {{ $order_details->users->last_name }}
                                                    {{ $order_details->users->first_name }}
                                                    <span class="px-1">様</span>
                                                </div>
                                            </td>
                                            <td class="col-3 px-0">
                                                <div>注文日時：<span id="order_date_2">{{ $order_details->order_date->format('Y-m-d') }}</span></div>
                                                <div>注文状態：<span id="order_status_2">準備中</span></div>
                                            </td>
                                            <td class="col-2 px-0 text-center"><button class="btn btn-primary btn-sm">詳細</button></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <!-- ページング -->
                        <div class="col-12 row justify-content-center mt-3 p-0 no-gutters">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
