<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h4 class="text-center bounce animated" style="padding: 20px 0 0 0;">Booking Tiket</h4>';
    echo '<h5 class="text-center flash animated">Registered Patient</h5>';
    echo '<div class="row">';
    echo '    <div class="col">';
    echo '        <h4 class="text-center" style="margin: 0;padding: 20px 0 0 0;">Poliklinik</h4>';
    echo '    </div>';
    echo '</div>';
    ?>
</body>
</html>
<?php
require_once dirname(__FILE__).'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try {
    //include dirname(__FILE__).'/cetak.php';

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content);
    $html2pdf->output('booking.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}