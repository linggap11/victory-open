<?= $this->extend('admin/layout/content') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6" data-intro="This is page title">
                <h3>Dashboard <small>User panel</small></h3>
            </div>
            <div class="col-lg-6" data-intro="This is breadcrumb">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item">Invoice </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends -->

<!-- Container-fluid starts -->
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Incoice</h5>    
                    <div class="text-right">
                        
                    </div>                                                        
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: initial;">
                        <table id="basic-1" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama Club</th>                                   
                                    <th>Invoice</th>                                
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($invoices->getResultObject() as $iv) : ?>                                                                      
                                    <tr>    
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= $iv->nama_club ?></td>
                                        <td class="text-center"><?= $iv->invoice ?></td>
                                        <td class="text-center">Rp. <?= number_format($iv->total, 0) ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

