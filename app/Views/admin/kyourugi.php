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
                    <li class="breadcrumb-item">Kyourugi </li>
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
                    <h5>Kyourugi PUTRA</h5>    
                    <div class="text-right">
                        <a href="" data-toggle="modal" class="btn btn-primary" alt="Export"> <i class="icofont icofont-file-excel icofont-2x"></i></a>                                                        
                        <a href="" data-toggle="modal" class="btn btn-info" alt="Print ID Card"> <i class="icofont icofont-id-card icofont-2x"></i></a>                                                        
                    </div>                                                        
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: initial;">
                        <table id="basic-1" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Berat Badan</th>
                                    <th>Kategori</th>
                                    <th>Club</th>        
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($kyourugiPutra->getResultObject() as $pes) : ?>                                  
                                    <?php 
                                        $kelas = '-';
                                        foreach ($classPutra->getResultObject() as $cl) {
                                            if ($pes->kategori_id == 7) {
                                                $kelas = '';
                                            } else {
                                                if (($pes->berat_badan >= $cl->range1 && $pes->berat_badan <= $cl->range2) && $pes->kategori_id == $cl->kategori_id) {
                                                    $kelas = $cl->kelas;
                                                }
                                            }
                                        }
                                        ?>
                                    <tr>    
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $pes->nama_lengkap ?></td>
                                        <td class="text-center"><?= $pes->jk ?></td>
                                        <td class="text-center"><?= date('d M, Y', strtotime($pes->tanggal_lahir)) ?></td>
                                        <td class="text-center"><?= $pes->berat_badan ?></td>
                                        <td class="text-center"><strong><?= $pes->kategori ?> <?= $kelas ?></strong></td>
                                        <td class="text-center"><strong><?= $pes->nama_club ?></strong></td>
                                        <td class="text-center"><a href="" data-toggle="modal"  class="text-warning"> <i class="icofont icofont-edit"></i></a> <a href="" data-toggle="modal"  class="text-danger"><i class="icofont icofont-eraser"></i></a></td>
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
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Kyourugi PUTRI</h5>    
                    <div class="text-right">
                        <a href="" data-toggle="modal" class="btn btn-primary ass" alt="Export"> <i class="icofont icofont-file-excel icofont-2x"></i></a>                                                        
                        <a href="" data-toggle="modal" class="btn btn-info" alt="Print ID Card"> <i class="icofont icofont-id-card icofont-2x"></i></a>                                                        
                    </div>                                                        
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: initial;">
                        <table id="basic-3" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Berat Badan</th>
                                    <th>Kategori</th>
                                    <th>Club</th>        
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($kyourugiPutri->getResultObject() as $pes) : ?>                                  
                                    <?php 
                                        $kelas = '-';
                                        foreach ($classPutri->getResultObject() as $cl) {
                                            if ($pes->kategori_id == 7) {
                                                $kelas = '';
                                            } else {
                                                if (($pes->berat_badan >= $cl->range1 && $pes->berat_badan <= $cl->range2) && $pes->kategori_id == $cl->kategori_id) {
                                                    $kelas = $cl->kelas;
                                                }
                                            }
                                        }
                                        ?>
                                    <tr>    
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $pes->nama_lengkap ?></td>
                                        <td class="text-center"><?= $pes->jk ?></td>
                                        <td class="text-center"><?= date('d M, Y', strtotime($pes->tanggal_lahir)) ?></td>
                                        <td class="text-center"><?= $pes->berat_badan ?></td>
                                        <td class="text-center"><strong><?= $pes->kategori ?> <?= $kelas ?></strong></td>
                                        <td class="text-center"><strong><?= $pes->nama_club ?></strong></td>
                                        <td class="text-center"><a href="" data-toggle="modal"  class="text-warning"> <i class="icofont icofont-edit"></i></a> <a href="" data-toggle="modal"  class="text-danger"><i class="icofont icofont-eraser"></i></a></td>
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

