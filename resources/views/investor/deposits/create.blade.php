@extends('layouts.app')

@section('title', 'Deposit Funds')

@section('content')

<div class="container">

    <div class="page-header">
        <h1>Deposit Funds</h1>
        <p>Choose your preferred deposit method.</p>
    </div>

    <div class="deposit-wrapper">

        <!-- LEFT MENU -->

        <div class="card sidebar-card">

            <h3>Deposit Methods</h3>

            <div class="deposit-option active" onclick="showDeposit('crypto',this)">
                <i class="fa-brands fa-bitcoin"></i>
                <div>
                    <h4>Crypto Deposit</h4>
                    <p>USDT deposits</p>
                </div>
            </div>

            <div class="deposit-option" onclick="showDeposit('bank',this)">
                <i class="fa-solid fa-building-columns"></i>
                <div>
                    <h4>Bank Deposit</h4>
                    <p>Upload proof of payment</p>
                </div>
            </div>

        </div>

        <!-- RIGHT CONTENT -->

        <div class="card">

            <!-- CRYPTO -->

            <div id="crypto">

                <div class="form-header">
                    <h2>USDT Deposit</h2>
                </div>

                <div class="info-box">

                    <h4>Deposit Wallet Address</h4>

                    <div class="wallet-address">
                        TQ8Y5MXVQ4N9ABCD123456789EXAMPLE
                    </div>

                    <div class="network-badge">
                        TRC20 Network
                    </div>

                </div>

                <form>

                    <div class="form-group">
                        <label>Amount Deposited (USD)</label>
                        <input type="number" placeholder="100.00">
                    </div>

                    <div class="form-group">
                        <label>Transaction Hash (TxID)</label>
                        <input type="text" placeholder="Paste blockchain transaction hash">
                    </div>

                    <div class="form-group">
                        <label>Your USDT Wallet Address</label>
                        <input type="text" placeholder="Enter your wallet address">
                    </div>

                    <div class="form-group">
                        <label>Upload Screenshot (Optional)</label>

                        <div class="file-upload">
                            <input type="file">
                        </div>
                    </div>

                    <div class="note">
                        Your deposit will be reviewed by an administrator before your wallet is credited.
                    </div>

                    <br>

                    <button class="btn">
                        Submit Deposit
                    </button>

                </form>

            </div>

            <!-- BANK -->

            <div id="bank" class="hidden">

                <div class="form-header">
                    <h2>Bank Deposit</h2>
                </div>

                <div class="info-box">

                    <h4>Bank Account Details</h4>

                    <p><strong>Bank:</strong> Standard Bank</p>
                    <p><strong>Account Name:</strong> Invexorite Wealth</p>
                    <p><strong>Account Number:</strong> 1234567890</p>
                    <p><strong>Branch:</strong> Maseru Main Branch</p>

                </div>

                <form>

                    <div class="form-group">
                        <label>Amount Deposited</label>
                        <input type="number" placeholder="100.00">
                    </div>

                    <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" placeholder="Your bank">
                    </div>

                    <div class="form-group">
                        <label>Deposit Reference</label>
                        <input type="text" placeholder="Bank reference">
                    </div>

                    <div class="form-group">

                        <label>Proof of Payment</label>

                        <div class="file-upload">
                            <input type="file">
                        </div>

                    </div>

                    <div class="note">
                        Your proof of payment will be reviewed by our finance team before funds are credited.
                    </div>

                    <br>

                    <button class="btn">
                        Submit Deposit
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>

function showDeposit(type,element){

    document.getElementById('crypto').classList.add('hidden');
    document.getElementById('bank').classList.add('hidden');

    document.getElementById(type).classList.remove('hidden');

    document.querySelectorAll('.deposit-option')
        .forEach(item => item.classList.remove('active'));

    element.classList.add('active');
}

</script>
@endpush
