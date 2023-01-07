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
                    <li class="breadcrumb-item">Dashboard </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends -->

<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-12 xl-100">
            <div class="row">                            
                <div class="col-sm-3 xl-25">
                    <div class="card">
                        <div class="business-top-widget card-body">
                            <div class="media d-inline-flex">
                                <div class="media-body">
                                    <span class="mb-2">Peserta Poomsae</span>                                    
                                    <h2 class="total-value m-0 counter"><?= $totalPoomsae->total ?></h2>
                                </div>
                                <i class="icofont icofont-users-alt-3 font-info align-self-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 xl-25">
                    <div class="card">
                        <div class="business-top-widget card-body">
                            <div class="media d-inline-flex">
                                <div class="media-body">
                                    <span class="mb-2">Peserta Kyourugi</span>
                                    <h2 class="total-value m-0 counter"><?= $totalKyourugi->total ?></h2>
                                </div>
                                <i class="icofont icofont-users-alt-3 font-primary align-self-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 xl-25">
                    <div class="card">
                        <div class="business-top-widget card-body">
                            <div class="media d-inline-flex">
                                <div class="media-body">
                                    <span class="mb-2">Total Club</span>
                                    <h2 class="total-value m-0 counter"><?= $totalClub->total ?></h2>
                                </div>
                                <i class="icofont icofont-olympic-logo font-info align-self-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 xl-25">
                    <div class="card">
                        <div class="business-top-widget card-body">
                            <div class="media d-inline-flex">
                                <div class="media-body">
                                    <span class="mb-2">Tanggal</span>
                                    <h6><?= date('d-m-Y') ?></h6>
                                </div>
                                <i class="icofont icofont-calendar font-danger align-self-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Peserta Yang Baru Daftar</h5>                                       
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: initial;">
                        <table id="basic-1" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Club</th>
                                    <th>Manager</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($peserta->getResultObject() as $pes) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $pes->nama_lengkap ?></td>
                                        <td class="text-center"><?= $pes->jk ?></td>
                                        <td class="text-center"><strong><?= $pes->nama_club ?></strong></td>
                                        <td class="text-center"><?= $pes->manager ?></td>
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