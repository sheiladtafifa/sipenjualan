<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
  <title>Mail Blast</title>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    table {
      border-spacing: 0;
    }

    table td {
      border-collapse: collapse;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    .ReadMsgBody {
      width: 100%;
      background-color: #ebebeb;
    }

    table {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    .yshortcuts a {
      border-bottom: none !important;
    }

    @media screen and (max-width: 599px) {

      .force-row,
      .container {
        width: 100% !important;
        max-width: 100% !important;
      }
    }

    @media screen and (max-width: 400px) {
      .container-padding {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    }

    .ios-footer a {
      color: #aaaaaa !important;
      text-decoration: underline;
    }

    a[href^="x-apple-data-detectors:"],
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }
  </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <!-- 100% background wrapper (grey background) -->
  <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
    <tr>
      <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">
        <br>
        <!-- 600px container (white background) -->
        <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">          
          <tr>
            <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">              
              <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">
                Ada Pembelian Barang Baru
              </div>
              <br>
              <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                <?php echo date('Y-m-d') ?>
                <br><br>
                <?php foreach($detailPembelian as $detail_pembelian){ ?>
                <p><?php echo $detail_pembelian->nama_barang ?></p>
                <p><?php echo $detail_pembelian->jumlah ?></p>
                <?php } ?>
                <br>
              </div>
            </td>
          </tr>          
        </table>
        <!--/600px container -->
      </td>
    </tr>
  </table>
  <!--/100% background wrapper-->
</body>

</html>