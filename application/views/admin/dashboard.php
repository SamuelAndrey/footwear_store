<div class="container-fluid d-flex" style="gap:20px;">
    <?php
        $total = 0;
        if ($income) {
            foreach($income as $inc) :
                $total += $inc->total_bayar;
            endforeach;
        }

    ?>
    <table class="table table-bordered text-success" style="background-color:#000000; width: 250px;">
        <tr class="table-active">
            <th style="background-color:#1E1C1C; text-align:center;" >Request</th>
        </tr>
        <tr>
            <td class="text-center"><?= $request ?></td>
        </tr>
    </tabke>

    <table class="table table-bordered text-success" style="background-color:#000000; width: 250px;">
        <tr class="table-active">
            <th style="background-color:#1E1C1C; text-align:center;" >This Month's Income</th>
        </tr>
        <tr>
            <td class="text-center">Rp. <?= number_format($total, 0, ',','.') ?></td>
        </tr>
    </tabke>
</div>