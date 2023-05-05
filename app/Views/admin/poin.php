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
                                <th style="width:10%"> AccountId</th>
                                <th> Name</th>
                                <th> TotalPoint</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($nasabahList as $list) {
                            echo '<tr>
                                <td> ' . $list['AccountId'] . '</td>
                                <td> ' . $list['Name'] . '</td>
                                <td> ' . $list['TotalPoint'] . '</td>
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