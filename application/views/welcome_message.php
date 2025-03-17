    <img src="IMG/sawah.jpg" class="img-fluid" alt="">


<div class="title text-center" style="font-family: 'Montserrat', sans-serif; padding: 20px; margin-top: none;">
    <h2>Layanan Pendataan Subak Daerah Gianyar</h2>
    <p>Platform resmi untuk mendokumentasikan dan mengelola data subak di Gianyar secara digital.</p>
    <hr class="border-bottom border-2">
</div>

<div class="container" style=" display: flex; flex-direction: row; margin-top: 0px; justify-content: center; overflow-auto;">
    
    <div class="card" style="width: 18rem; margin: 20px; ">
    <img src="IMG/pengajuandata.png" class="card-img-top" style="max-width: 250px; max-height:250px; margin: 20px; " alt="...">
    <div class="card-body">
        <h5 class="card-title">Pengajauan Data</h5>
        <p class="card-text">Mengajukan data untuk memasukkan informasi subak</p>
        <a href="<?= base_url(); ?>Pengajuan" class="btn btn-primary">Selengkapnya</a>
    </div>
    </div>

    <div class="card" style="width: 18rem; margin: 20px; ">
    <img src="IMG/artikel.png" class="card-img-top" style="max-width: 250px; max-height:250px; margin: 20px; " alt="...">
    <div class="card-body">
        <h5 class="card-title">Regulasi</h5>
        <p class="card-text">Informasi mengenai aturan dan regulasi yang berlaku</p>
        <a href="<?= base_url(); ?>Regulasi" class="btn btn-primary">Selengkapnya</a>
    </div>
    </div>
</div>

<div class="b-example-divider" style="width: 100%; height: 1rem; border-width: 1px 0;"></div>

<div class="container" style="">
    <h2>Data yang Terdaftar</h2>
    <h5>Total Subak Terdaftar: 
        <?php 
        function JumlahSubak(){
            $this->db->from("subak")->count_all_results();   
        }
        echo "JumlahSubak";?>
    </h5>
    <h5>Total Petani Terdaftar:
        <?php 
        $this->db->from("petani")->count_all_results();
        echo ""?>
    </h5>
</div>

<div class="b-example-divider" style="width: 100%; height: 3rem; border-width: 1px 0;"></div>