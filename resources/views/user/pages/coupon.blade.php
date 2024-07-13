@extends('user.layouts.master')


@section('user_content')
    <div class="section-admin container-fluid">
        <div class="row admin">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="admin-content res-mg-t-15 d-flex row justify-content-between">

                    @if (Session::has('withdraw_added'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ Session::get('withdraw_added') }}
                            </div>
                        </div>
                    @elseif(Session::has('withdraw_error'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ Session::get('withdraw_error') }}
                            </div>
                        </div>
                    @endif

                    <div class="row page-top-section">
                        <!-- breadcome title Section  -->
                        <div class="col-sm-6 breadcome-heading">
                            <h3>Marchent Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class=" breadcome-price-section">
                                <p class="breadcome-section-name">Available Balance:</p>
                                <p class="breadcome-section-price">
                                    {{ $data['sum_deposit_coupon'] ? '$' . number_format((float) $data['sum_deposit_coupon'], 2, '.', '') : '$00.00' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row page-section-btn">
                        <div class="col-sm-12">
                            <button type="button" data-toggle="modal" data-target="#createcoupon" data-whatever=""
                                class="page-button">Create Coupon</button>
                            <div class="modal withdraw-modal fade" id="createcoupon" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Coupon</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ route('store-coupon') }}">
                                                @csrf
                                                <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                                                <div class="form-group">
                                                    <label for="selectUsdtDepositWalletMenu" class="col-form-label">Select
                                                        Value</label>
                                                    <select class="form-select form-control" id="DestinationOptions"
                                                        name="coupon_value" aria-label="Default select example" required>
                                                        <option selected disabled>choose Wallet</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="500">500</option>
                                                        <option value="1000">1000</option>
                                                        <option value="2000">2000</option>
                                                        <option value="5000">5000</option>
                                                        <option value="10000">10000</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Create Coupon</button>
                                        </div>


                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="transection-staus mg-t-30  mg-b-30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="transaction-status-wrap">

                                        <div class="transaction-table">
                                            <table id= "myTable" class="table table-bordered table-border">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">COUPON CODE</th>
                                                        <th scope="col">COUPON VALUE</th>
                                                        <th scope="col">COUPON VALIDITY</th>
                                                        <th scope="col">COUPON USED BY</th>


                                                        <th scope="col">CREATED AT</th>
                                                        <th scope="col">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['coupons'] as $row)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $row->coupon_code }}</td>

                                                            <td>{{ $row->coupon_value }}</td>


                                                            <td>
                                                                @if ($row->validity == 0)
                                                                    <span class="badge badge-success">Valid</span>
                                                                @else
                                                                    <span class="badge badge-danger">Used</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($row->owned_by != null)
                                                                    {{ $row->owned->user_name }}
                                                                @else
                                                                    --
                                                                @endif
                                                            </td>
                                                            <td>{{ $row->created_at }}</td>
                                                            <td></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- transection Token Wallet section
            ============================================  -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>



    @push('scripts')
        <script type="text/javascript">
            document.getElementById('DestinationOptions_usd2').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                //console.log(wallet2);
                var wallet = document.getElementById("wallet_id_usd2").value = wallet2;
                //console.log(wallet);
                //wallet.innerHTML= wallet2;
            });

            //  document.getElementById('').value(id.value);
        </script>

        <script>
            document.getElementById('DestinationOptions').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                console.log(wallet2);
                var wallet = document.getElementById("wallet_id").value = wallet2;
                //console.log(wallet);
                //wallet.innerHTML= wallet2;
            });
        </script>
    @endpush
@endsection
