<div class="modal fade text-left" id="withdrawusd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Make Withdraw Request</h4>
                <button type="button" class="btn-primary close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <section id="multiple-column-form">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">

                              <div class="card-body">

                              <form method="post" action="{{route('withdrawUsdStore')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="mb-3">

                          <?php
                          $payment_method= App\Models\UserWallet::where('user_id',Auth::user()->id)->get();

                           ?>
                           <label for="email-id-column">Select Wallet<span
                                   class="text-danger">*</span></label>
                        <select id="DestinationOptions" name="wallet_method_id" class="form-select" aria-label="Default select example" required>
                            <option label="Choose Wallet"></option>
                          @foreach($payment_method as $payment)

                        <option id="{{$payment->wallet_no}}" value="{{$payment->id}}">{{$payment->wallet_name}}</option>
                        @endforeach
                      </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wallet Address</label>

                            <input type="text" name="wallet_no" readonly id="wallet_id" class="form-control"required/>
                        </div>
                        <?php
                        $withdraw_commission= App\Models\UsdtWithdrawInfo::first();
                         ?>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Amount ($)</label>
                            <input type="number" min="{{$withdraw_commission->withdraw_limit_min}}" max="{{$withdraw_commission->withdraw_limit_max}}" class="form-control" name="amount" id="amount" placeholder="Enter Amount" aria-describedby="emailHelp" required pattern="[0-9]*">
                        </div>

                        <div class="mb-3">
                            <h6 style="color:red;">{{$withdraw_commission->withdraw_commission}} % Commission will be reduce from your withdraw amount.</h6>
                              </div>
                        <div class="mb-3">

                          <h6>Withdraw limit USDT( >= {{$withdraw_commission->withdraw_limit_min}} & <= {{$withdraw_commission->withdraw_limit_max}})</h6>
                        </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">WithDraw</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
            </div>
              </form>
        </div>
    </div>
</div>
