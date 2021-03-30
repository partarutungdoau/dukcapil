<h1>Kirim Email</h1>
<hr>
<div class="x_content">
    <form class="form-horizontal form-label-left" method="post" action="send.php" enctype="multipart/form-data">
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepada <span>*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="email_penerima" placeholder="Email Penerima" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email_penerima" required type="email">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Subjek <span>*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="subjek" placeholder="Subjek" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="subjek" required type="text">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesan <span>*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="pesan" placeholder="Pesan..." class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pesan" rows="8" required type="text"></textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Attachment <span>*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="subjek" placeholder="Subjek" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="attachment" required type="file">
            </div>
        </div>
        <hr>
        <button class="btn btn-success" type="submit" nama="kirim_email"><i class="fa fa-send"></i> Kirim Email</button>
    </form>
    <?php
        if (isset($_POST['kirim_email']))
    {
        $connect->query("UPDATE kematian SET id_status_request = '4' WHERE kematian.id_kematian ='$_GET[id]' ");
        echo "<script> alert('Berhasil Menerima);</script>";
        echo "<script> location='index.php?halaman=akta_kelahiran'</script>";
    }
    ?>
    
</div>