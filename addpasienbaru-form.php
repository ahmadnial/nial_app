<?php
include "addpasienbaru.php" ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="insert_form" id="insert_form">
                    <div class="f-group">
                        <label for="">No.RM</label>
                        <input type="text" placeholder="Nomor Rekam Medis" class="form-control">
                    </div>

                    <div class="f-group">
                        <label for="">Nama</label>
                        <input type="text" placeholder="Nama Pasien" id="namaPx" name="namaPx" class="form-control">
                    </div>

                    <div class="row g-2">
                        <div class="col-md ">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="tl_lahir" name="tl_lahir">
                                <label for="tl_lahir">Tempat Lahir</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="date" name="ta_lahir" class="form-control tgl_now" id="ta_lahir">
                                <label for="ta_lahir">Tanggal Lahir</label>
                            </div>
                        </div>


                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="text" name="umur" class="form-control" id="umur">
                                <label for="umur">Umur</label>
                            </div>
                        </div>


                        <div class="f-group">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="sex" name="sex">
                                <option selected>--Choose--</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                        </div>


                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="f-group mt-0">
                        <label for="">No.Tlp</label>
                        <input type="text" placeholder="Nomor Telepon Pasien" id="no_tlp" name="no_tlp" class="form-control">
                    </div>
                    <button type="submit" name="insert" id="insert" class="btn btn-success mt-3 float-right">Save</button>
                    <!-- <button type="button" class="btn btn-secondary mt-3 float-right" data-bs-dismiss="modal">Close</button> -->
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>