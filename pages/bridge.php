<?php

use Study\Design\Report\PaymentReport;
use Study\Design\Report\Types\HTMLReportType;
use Study\Design\Report\Types\PDFReportType;
use Study\Design\Report\UserReport;

renderHeaderPage(
    'Resultado do design pattern Bridge',
    'O Bridge resolve o problema de ter muitas combinações de abstrações e implementações. Ele separa os dois lados em camadas independentes, permitindo que cada um evolua sem impactar o outro. Isso é útil quando você tem várias variações de funcionalidades (como relatórios em PDF ou HTML) e não quer criar uma classe para cada combinação possível. Com o Bridge, você combina abstrações e implementações dinamicamente.',
    'src/Report'
);

$pdfType = new PDFReportType();
$htmlType = new HTMLReportType();

$userReportPdf = new UserReport($pdfType);
$userReportPdf->generate([]);

echo "<br/>";

$userReportHtml = new UserReport($htmlType);
$userReportHtml->generate([]);

echo "<br/>";

$paymentReportPfd = new PaymentReport($pdfType);
$paymentReportPfd->generate([]);

echo "<br/>";

$paymentReportHtml = new PaymentReport($htmlType);
$paymentReportHtml->generate([]);

renderFooterPage();
