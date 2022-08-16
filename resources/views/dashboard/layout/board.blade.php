<div class="col-md-4 show">
    <div class="small-box bg-blue" style="background: #5CDB95; color: #ffffff;">
        <div class="inner">
            <h3>{{ auth()->user()->acct_wallet }}</h3>
            <h4>Total Balance</h4>
        </div>
        <div class="icon">
            <i class="ion ion-social-bitcoin"></i>
        </div>
        <div class="small-box-footer">
            <strong>Bonus Balance: {{ auth()->user()->bonus_wallet }} USD</strong>
        </div>
    </div>
</div>

<div class="col-md-4 show">
    <div class="small-box bg-blue" style="background: #5CDB95; color: #ffffff;">
        <div class="inner">
            <h3>0</h3>
            <h4>Referrals</h4>
        </div>
        <div class="icon">
            <i class="ion ion-pound"></i>
        </div>
        <a href="https://elitebitfx.com/index.php/User/Referrals" class="small-box-footer"><strong>Your Referrals</strong> <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-md-4 show">
    <div class="small-box bg-blue" style="background: #5CDB95; color: #ffffff;">
        <div class="inner">
            <h3>
                0                            </h3>
            <h4>Transactions</h4>
        </div>
        <div class="icon">
            <i class="ion ion-arrow-swap"></i>
        </div>
        <a href="https://elitebitfx.com/index.php/User/Transactions" class="small-box-footer"><strong>Transactions</strong> <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
