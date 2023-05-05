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
                                <th> AccountId</th>
                                <th> Transaction Date</th>
                                <th> Description</th>
                                <th> Debit/Credit</th>
                                <th> Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($transaksiList as $list) {
                            echo '<tr>
                                <td> ' . $list['AccountId'] . '</td>
                                <td> ' . date('Y-m-d', strtotime($list['TransactionDate'])) . '</td>
                                <td> ' . $list['Description'] . '</td>
                                <td> ' . $list['DebitCreditStatus'] . '</td>
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