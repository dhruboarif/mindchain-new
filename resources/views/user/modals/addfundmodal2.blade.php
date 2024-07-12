<div class="modal deposit-modal fade" id="addfund2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MUSD Deposit</h5>
                <button type="button" class="btn-primary close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('money-store-manual') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <?php
                    $account_info = App\Models\AccountInfo::where('payment_type_id', '!=', 2)->get();
                    ?>
                    <div class="form-group" data-section="1">
                        <label for="selectWallet1" class="col-form-label">Select Wallet</label>
                        <select id="selectWallet1" class="form-select form-control" name="payment_wallet_id"
                            aria-label="Default select example" onchange="selectWallet(1)">
                            <option selected disabled>choose Wallet</option>
                            @foreach ($account_info as $payment)
                                <option id="{{ $payment->wallet_no }}" value="{{ $payment->wallet_no }}">
                                    {{ $payment->payment_way->payment_way }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" data-section="1">
                        <label for="copyAddress1" class="col-form-label">Wallet Address</label>
                        <input type="text" class="form-control" name="wallet_id" id="copyAddress1">
                        <button class="copy-button" onclick="copyWallet(event, 1)">
                            <i class="fa-solid fa-copy copy-icon"></i>
                            <i class="fa-solid fa-clipboard clipboard-icon text-warning"></i>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="musd-amount-deposit" class="col-form-label">Amount (MIND)</label>
                        <input type="text" class="form-control" name="amount" id="musd-amount-deposit">
                    </div>
                    <div class="form-group">
                        <label for="musd-hash-deposit" class="col-form-label">Transaction Hash</label>
                        <input type="text" class="form-control" name="txn_id" id="musd-hash-deposit">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')

<script type="text/javascript">

    //alert('success');
    //console.log(this.getAttribute('id'));
    //console.log(e.target.options[e.target.selectedIndex].getAttribute('id'));
    //var wallet=  document.getElementById("wallet_id");
    //wallet.innerHTML= id.value;
    document.getElementById('DestinationOptions').addEventListener('change', function (e) {
        var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
        console.log(wallet2);
        var wallet = document.getElementById("wallet_id").value = wallet2;
        //console.log(wallet);
        //wallet.innerHTML= wallet2;
    });

    //  document.getElementById('').value(id.value);


</script>
@endpush
