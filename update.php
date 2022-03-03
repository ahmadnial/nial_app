    
                    <script>
                        function getDetails(){
                            var x = document.getElementById ('kd_reg').value;
                            if (x==""){
                                
                                document.getElementById('namaPx').value = "";
                                document.getElementById('layanan').value = "";
                                document.getElementById('dr_layanan').value = "";
                                document.getElementById('inst').value = "";
                                document.getElementById('tgl_msk').value = "";
                                document.getElementById('jam_msk').value = "";
                                document.getElementById('tl_lahir').value = "";
                                document.getElementById('ta_lahir').value = "";
                                document.getElementById('umur').value = "";
                                document.getElementById('sex').value = "";
                                document.getElementById('alamat').value = "";
                                document.getElementById('kd_reg').value = "";
                                document.getElementById('no_tlp').value = "";
                                document.getElementById('no_rm').value = "";
                                document.getElementById('kls_layanan').value = "";
                                document.getElementById('jaminan').value = "";
                                document.getElementById('no_peserta').value = "";
                                document.getElementById('cara_masuk').value = "";
                                document.getElementById('f_rujukan').value = "";
                                
                            }else{
                                $.ajax({
                                    type:"post",
                                    url:"ajaxsearch.php",
                                    data:{ki_no_reg:x},
                                    data2:{id_nm_pasien:x},
                                    success:function(data,data2){
                                        data = $.parseJSON(data,data2);
                                        $('#namaPx').val(data2['aj_id_nm_pasien']);
                                        $('#layanan').val(data['aj_ki_layanan']);
                                        $('#dr_layanan').val(data['aj_ki_dokter_layanan']);
                                        $('#inst').val(data['aj_ki_instalasi']);
                                        $('#tgl_msk').val(data['aj_id_tgl_masuk']);
                                        $('#jam_msk').val(data['aj_id_jam_masuk']);
                                        $('#tl_lahir').val(data['aj_id_tl_pasien']);
                                        $('#ta_lahir').val(data['aj_id_ta_pasien']);
                                        $('#umur').val(data['aj_id_umur_pasien']);
                                        $('#sex').val(data['aj_id_sex']);
                                        $('#alamat').val(data['aj_id_alamat']);
                                        $('#kd_reg').val(data['aj_ki_no_reg']);
                                        $('#no_tlp').val(data['aj_id_no_tlp']);
                                        $('#no_rm').val(data['aj_id_no_rm']);
                                        $('#kls_layanan').val(data['aj_ki_kelas_layanan']);
                                        $('#jaminan').val(data['aj_ki_jaminan']);
                                        $('#no_peserta').val(data['aj_ki_no_peserta']);
                                        $('#cara_masuk').val(data['aj_ki_cara_masuk']);
                                        $('#f_rujukan').val(data['aj_ki_faskes_rujukan']);
                                        
                                    }


                                });

                            }
                        }

                    </script>