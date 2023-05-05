<?php //$session = session()?>

<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- <h1 class="h3 mb-3"><?=$titles; ?></h1> -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?=$titles; ?></h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Transaction Date</th>
                                <th> Description</th>
                                <th> Credit</th>
                                <th> Debit</th>
                                <th> Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($transaksiList as $list) {
                                $kredit = ($list['DebitCreditStatus']=='C') ? $list['Amount'] : '-';
                                $debet = ($list['DebitCreditStatus']=='D') ? $list['Amount'] : '-';
                                echo '<tr>
                                    <td> ' . date('Y-m-d', strtotime($list['TransactionDate'])) . '</td>
                                    <td> ' . $list['Description'] . '</td>
                                    <td> ' . $kredit . '</td>
                                    <td> ' . $debet . '</td>
                                    <td> ' . $list['Amount'] . '</td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>