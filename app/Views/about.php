<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container m-auto mt-5" style="width:500px;">
    <h2 class="mb-3">
        <?= "My name is, " . $nama ?>
    </h2>
    <h2 class="mb-3">
        <?= "Class " . $kelas ?>
    </h2>
    <h2 class="mb-3">
        <?= "Email " . $email ?>
    </h2>
    <h2>My github : <a href="https://github.com/maliks1">maliks1</a></h2>
</div>
<?= $this->endSection() ?>