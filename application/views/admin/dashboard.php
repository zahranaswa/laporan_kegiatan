<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title ?>
            <small><?= $subtitle ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><?= $title ?></li>
        </ol>
    </section>
    <section class="content">
        <?php if($this->session->userdata('level') == 'Administrator') { ?>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?= $this->db->get('tb_periode')->num_rows() ?>
                            </h3>

                            <p>Total Periode</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-list"></div>
                        </div>
                        <a href="<?= base_url('admin/periode') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>
                                <?= $this->db->get('tb_kegiatan')->num_rows() ?>
                            </h3>

                            <p>Total Kegiatan</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-book"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?= $this->db->where('status', 'Terlaksana')->get('tb_kegiatan')->num_rows() ?>
                            </h3>

                            <p>Total Kegiatan Terlaksana</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-check"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                <?= $this->db->where('status', 'Belum Terlaksana')->get('tb_kegiatan')->num_rows() ?>
                            </h3>

                            <p>Total Kegiatan Belum Terlaksana</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-close"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?= $this->db->where('idUser', $this->session->userdata('id'))->get('tb_kegiatan')->num_rows() ?>
                            </h3>

                            <p>Total Kegiatan Saya</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-book"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>
                                <?php
                                    $this->db->where('idUser', $this->session->userdata('id'));
                                    $this->db->where('status', 'Terlaksana');
                                    echo $this->db->get('tb_kegiatan')->num_rows();
                                ?>
                            </h3>

                            <p>Total Kegiatan Terlaksana</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-check"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?php
                                    $this->db->where('idUser', $this->session->userdata('id'));
                                    $this->db->where('status', 'Belum Terlaksana');
                                    echo $this->db->get('tb_kegiatan')->num_rows();
                                ?>
                            </h3>

                            <p>Total Kegiatan Belum Terlaksana</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-close"></div>
                        </div>
                        <a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
</div>