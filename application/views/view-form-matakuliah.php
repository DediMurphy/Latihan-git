<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <th colspan="2"></th>
                <th></th>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode" value="<?php echo set_value('kode') ?>">
                </td>
            </tr>
            <tr>
                <th colspan="2"></th>
                <td style="color: red; font-size:10px; text-align:left"> <?= form_error('kode'); ?></td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?php echo set_value('nama') ?>">
                </td>
                <tr>
                    <th colspan="2"></th>
                    <td style="color: red; font-size:10px; text-align:left"> <?= form_error('nama'); ?></td>
            </tr>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option> 
                        <option value="2" <?= set_select('sks','2') ?>>2</option> 
                        <option value="3" <?= set_select('sks','3') ?>>3</option> 
                        <option value="4" <?= set_select('sks','4') ?>>4</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <th>Status MTK</th>
                <td>:</td>
                <td>
                    <input type="radio" id="status" name="status" value="unggulan" <?= set_radio('status','unggulan') ?>>
                    <label>Unggulan</label>
                    <input type="radio" id="status" name="status" value="tidak_unggulan" <?= set_radio('status','tidak_unggulan') ?>>
                    <label>Tidak unggulan</label><br>
                </td>
            </tr>
            <tr>
                <th colspan="2"></th>
                <td style="color: red; font-size:10px; text-align:left"> <?= form_error('status'); ?></td>
            </tr>
            <tr> 
                <td colspan="3" align="center"> 
                    <input type="submit" value="Submit"> 
                </td> 
            </tr>
            
        </table>
        </form>
    </center>
</body>
</html>