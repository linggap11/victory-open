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
                    <li class="breadcrumb-item">Poomsae </li>
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
                    <h5>Poomsae individual</h5>    
                    <div class="text-right">
                        <a href="" data-toggle="modal" class="btn btn-primary" alt="Export"> <i class="icofont icofont-file-excel icofont-2x"></i></a>                                                        
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
                                    <th>Kategori</th>
                                    <th>Club</th>        
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($poomsaeIndividu->getResultObject() as $pes) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $pes->nama_lengkap ?></td>
                                        <td class="text-center"><?= $pes->jk ?></td>
                                        <td class="text-center"><?= date('d M, Y', strtotime($pes->tanggal_lahir)) ?></td>
                                        <td class="text-center"><?= $pes->kategori ?></td>
                                        <td class="text-center"><strong><?= $pes->nama_club ?></strong></td>
                                        <td class="text-center"><a href="" data-toggle="modal"  class="text-warning"> <i class="icofont icofont-edit"></i></a> <a href="" data-toggle="modal" class="text-danger"><i class="icofont icofont-eraser"></i></a></td>
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
                    <h5>Poomsae Pair</h5>   
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
                                    <th>Kategori</th>
                                    <th>Club</th>  
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($poomsaePair->getResultObject() as $pes) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td>1. <?= $pes->user1 ?> <br>2. <?= $pes->user2 ?> </td>
                                        <td class="text-center"><?= $pes->jk1 ?> <br><?= $pes->jk1 ?></td>
                                        <td class="text-center"><?= date('d M, Y', strtotime($pes->tl1)) ?> <br><?= date('d M, Y', strtotime($pes->tl2)) ?></td>
                                        <td class="text-center"><?= $pes->kategori ?></td>
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
                    <h5>Poomsae Group</h5>        
                    <div class="text-right">
                        <a href="" data-toggle="modal" class="btn btn-primary" alt="Export"> <i class="icofont icofont-file-excel icofont-2x"></i></a>                                                        
                        <a href="" data-toggle="modal" class="btn btn-info" alt="Print ID Card"> <i class="icofont icofont-id-card icofont-2x"></i></a>                                                        
                    </div>                    
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: initial;">
                        <table id="basic-4" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kategori</th>
                                    <th>Club</th> 
                                    <th>Action</th>                                                               
                                </tr>
                            </thead>
                            <tbody>  
                                <?php $no = 1; ?>
                                <?php foreach($poomsaeGrup->getResultObject() as $pes) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td>1. <?= $pes->user1 ?> <br>2. <?= $pes->user2 ?><br>3. <?= $pes->user3 ?> </td>
                                        <td class="text-center"><?= $pes->jk1 ?> <br><?= $pes->jk1 ?><br><?= $pes->jk3 ?></td>
                                        <td class="text-center"><?= date('d M, Y', strtotime($pes->tl1)) ?> <br><?= date('d M, Y', strtotime($pes->tl2)) ?><br><?= date('d M, Y', strtotime($pes->tl3)) ?></td>
                                        <td class="text-center"><?= $pes->kategori ?></td>
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