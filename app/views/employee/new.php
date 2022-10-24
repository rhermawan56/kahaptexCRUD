<form action="<?= baseurl ?>home/new_store" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input name="name" type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Alamat</label>
        <input name="address" type="text" class="form-control" id="address">
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Jabatan</label>
        <input name="role" type="text" class="form-control" id="role">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">No Hp</label>
        <input name="phone" type="text" class="form-control" id="phone">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="gender" class="form-select" aria-label="Default select example">
            <option selected value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">
        <span data-feather="plus-circle"></span>
        Tambah
    </button>
</form>