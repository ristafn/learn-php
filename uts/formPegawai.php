<h2>Form Pegawai</h2>
<br>
<form>
    <div class="form-group row mb-3 mb-3">
        <label for="nip" class="col-2 col-form-label">NIP</label>
        <div class="col-10">
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </span>
                <input id="nip" name="nip" type="text" class="form-control" required="required">
            </div>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="nama" class="col-2 col-form-label">Nama</label>
        <div class="col-10">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="email" class="col-2 col-form-label">Email</label>
        <div class="col-10">
            <input id="email" name="email" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-2">Agama</label>
        <div class="col-10">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_0" type="radio" class="custom-control-input" value="Islam" required="required">
                <label for="agama_0" class="custom-control-label">Islam</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_1" type="radio" class="custom-control-input" value="Protestan" required="required">
                <label for="agama_1" class="custom-control-label">Kristen Protestan</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_2" type="radio" class="custom-control-input" value="Khatolik" required="required">
                <label for="agama_2" class="custom-control-label">Kristen Khatolik</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_3" type="radio" required="required" class="custom-control-input" value="Hindu">
                <label for="agama_3" class="custom-control-label">Hindu</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_4" type="radio" required="required" class="custom-control-input" value="Buddha">
                <label for="agama_4" class="custom-control-label">Budha</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="agama" id="agama_5" type="radio" required="required" class="custom-control-input" value="Khonghucu">
                <label for="agama_5" class="custom-control-label">Khonghucu</label>
            </div>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="divisi" class="col-2 col-form-label">Divisi</label>
        <div class="col-10">
            <select id="divisi" name="divisi" class="form-select" required="required">
                <option value="HRD">HRD</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Opersional">Operasional</option>
                <option value="Marketing">Marketing</option>
            </select>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="foto" class="col-2 col-form-label">Foto</label>
        <div class="col-10">
            <input id="foto" name="foto" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row mb-3">
        <div class="offset-4 col-10">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>