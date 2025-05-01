<style>
    .form-section {
        background-image: url('img/blog-1.jpg'); /* ganti sesuai nama dan lokasi gambarmu */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .form-section select,
    .form-section button {
        box-shadow: none;
    }
</style>

<div class="form-section">
    <form action="proses_keluhan.php" method="POST">
        <div class="row g-3">
            <div class="col-12">
                <h5 class="text-primary">Gejala</h5>
            </div>

            <div class="col-12 col-sm-6">
                <select class="form-select bg-white border-0" style="height: 55px;" name="gejala1" required>
                    <option value="Sering haus dan buang air kecil">Sering haus dan buang air kecil</option>
                    <option value="Berat badan turun drastis">Berat badan turun drastis</option>
                    <option value="Luka sulit sembuh">Luka sulit sembuh</option>
                    <option value="Sakit kepala">Sakit kepala</option>
                    <option value="Pusing">Pusing</option>
                    <option value="Penglihatan kabur">Penglihatan kabur</option>
                    <option value="Nyeri ulu hati">Nyeri ulu hati</option>
                    <option value="Perut kembung">Perut kembung</option>
                    <option value="Mual dan muntah">Mual dan muntah</option>
                </select>
            </div>

            <div class="col-12 col-sm-6">
                <select class="form-select bg-white border-0" style="height: 55px;" name="gejala2" required>
                    <!-- opsi sama seperti di atas -->
                    ...
                </select>
            </div>

            <div class="col-12 col-sm-6">
                <select class="form-select bg-white border-0" style="height: 55px;" name="gejala3" required>
                    <!-- opsi sama seperti di atas -->
                    ...
                </select>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Deteksi</button>
            </div>
        </div>
    </form>
</div>


<form action="proses_keluhan.php" method="POST">
    <div class="row g-3">
        <div class="col-12">
            <h5 class="text-primary">Gejala</h5>
        </div>
        
        <div class="col-12 col-sm-6">
            <select class="form-select bg-white border-0" style="height: 55px;" name="gejala1" required>
                <option value="Sering haus dan buang air kecil">Sering haus dan buang air kecil</option>
                <option value="Berat badan turun drastis">Berat badan turun drastis</option>
                <option value="Luka sulit sembuh">Luka sulit sembuh</option>
                <option value="Sakit kepala">Sakit kepala</option>
                <option value="Pusing">Pusing</option>
                <option value="Penglihatan kabur">Penglihatan kabur</option>
                <option value="Nyeri ulu hati">Nyeri ulu hati</option>
                <option value="Perut kembung">Perut kembung</option>
                <option value="Mual dan muntah">Mual dan muntah</option>
            </select>
        </div>

        <div class="col-12 col-sm-6">
            <select class="form-select bg-white border-0" style="height: 55px;" name="gejala2" required>
                <option value="Sering haus dan buang air kecil">Sering haus dan buang air kecil</option>
                <option value="Berat badan turun drastis">Berat badan turun drastis</option>
                <option value="Luka sulit sembuh">Luka sulit sembuh</option>
                <option value="Sakit kepala">Sakit kepala</option>
                <option value="Pusing">Pusing</option>
                <option value="Penglihatan kabur">Penglihatan kabur</option>
                <option value="Nyeri ulu hati">Nyeri ulu hati</option>
                <option value="Perut kembung">Perut kembung</option>
                <option value="Mual dan muntah">Mual dan muntah</option>
            </select>
        </div>

        <div class="col-12 col-sm-6">
            <select class="form-select bg-white border-0" style="height: 55px;" name="gejala3" required>
                <option value="Sering haus dan buang air kecil">Sering haus dan buang air kecil</option>
                <option value="Berat badan turun drastis">Berat badan turun drastis</option>
                <option value="Luka sulit sembuh">Luka sulit sembuh</option>
                <option value="Sakit kepala">Sakit kepala</option>
                <option value="Pusing">Pusing</option>
                <option value="Penglihatan kabur">Penglihatan kabur</option>
                <option value="Nyeri ulu hati">Nyeri ulu hati</option>
                <option value="Perut kembung">Perut kembung</option>
                <option value="Mual dan muntah">Mual dan muntah</option>
            </select>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Deteksi</button>
        </div>
    </div>
</form>
