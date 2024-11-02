<?php
require_once __DIR__ . '/vendor/autoload.php';

$teclados = [
    [
        'nome' => 'Logitech G915 TKL',
        'marca' => 'Logitech',
        'preco' => 1199.90,
        'descricao' => 'Teclado mecânico wireless com iluminação RGB.',
        'switch' => 'GL Tactile'
    ],
    [
        'nome' => 'Razer BlackWidow V3',
        'marca' => 'Razer',
        'preco' => 899.90,
        'descricao' => 'Teclado mecânico com switches Razer Green e iluminação RGB Chroma.',
        'switch' => 'Razer Green'
    ],
    [
        'nome' => 'Corsair K95 RGB Platinum XT',
        'marca' => 'Corsair',
        'preco' => 1099.90,
        'descricao' => 'Teclado mecânico premium com switches Cherry MX e iluminação RGB.',
        'switch' => 'Cherry MX Speed'
    ],
    [
        'nome' => 'HyperX Alloy FPS Pro',
        'marca' => 'HyperX',
        'preco' => 599.90,
        'descricao' => 'Teclado mecânico compacto com switches Cherry MX Red.',
        'switch' => 'Cherry MX Red'
    ],
    [
        'nome' => 'Keychron K2',
        'marca' => 'Keychron',
        'preco' => 459.90,
        'descricao' => 'Teclado compacto sem fio com iluminação RGB.',
        'switch' => 'Gateron Brown'
    ],
    [
        'nome' => 'SteelSeries Apex Pro',
        'marca' => 'SteelSeries',
        'preco' => 1299.90,
        'descricao' => 'Teclado mecânico com switches ajustáveis e iluminação RGB.',
        'switch' => 'OmniPoint'
    ],
    [
        'nome' => 'Logitech K380',
        'marca' => 'Logitech',
        'preco' => 199.90,
        'descricao' => 'Teclado compacto multi-dispositivo com conexão Bluetooth.',
        'switch' => 'Membrana'
    ],
    [
        'nome' => 'Microsoft Sculpt Ergonomic',
        'marca' => 'Microsoft',
        'preco' => 599.90,
        'descricao' => 'Teclado ergonômico com design curvo e apoio para os pulsos.',
        'switch' => 'Membrana'
    ],
    [
        'nome' => 'Apple Magic Keyboard',
        'marca' => 'Apple',
        'preco' => 799.90,
        'descricao' => 'Teclado sem fio com design compacto e bateria recarregável.',
        'switch' => 'Tesoura'
    ],
    [
        'nome' => 'Redragon Kumara K552',
        'marca' => 'Redragon',
        'preco' => 249.90,
        'descricao' => 'Teclado mecânico com iluminação LED e switches Outemu Blue.',
        'switch' => 'Outemu Blue'
    ],
    [
        'nome' => 'Cooler Master CK550',
        'marca' => 'Cooler Master',
        'preco' => 499.90,
        'descricao' => 'Teclado mecânico com switches Gateron e iluminação RGB.',
        'switch' => 'Gateron Red'
    ],
    [
        'nome' => 'Logitech MX Keys',
        'marca' => 'Logitech',
        'preco' => 699.90,
        'descricao' => 'Teclado sem fio premium com teclas iluminadas.',
        'switch' => 'Membrana'
    ],
    [
        'nome' => 'Corsair K68 RGB',
        'marca' => 'Corsair',
        'preco' => 549.90,
        'descricao' => 'Teclado mecânico resistente à água e poeira com iluminação RGB.',
        'switch' => 'Cherry MX Red'
    ],
    [
        'nome' => 'Akko 3068 Silent',
        'marca' => 'Akko',
        'preco' => 379.90,
        'descricao' => 'Teclado mecânico compacto com switches silenciosos.',
        'switch' => 'Akko Silent'
    ],
    [
        'nome' => 'Ducky One 2 Mini',
        'marca' => 'Ducky',
        'preco' => 699.90,
        'descricao' => 'Teclado mecânico compacto com iluminação RGB.',
        'switch' => 'Cherry MX Brown'
    ]
];

$mpdf = new \Mpdf\Mpdf();
$data = date('d/m/Y H:i:s');

$html = "
    <h1 style='text-align: center; color: #333;'>Relatório de Teclados</h1>
    <p style='text-align: center;'>Data de geração: $data</p>
    <table style='width: 100%; border-collapse: collapse;'>
        <thead>
            <tr style='background-color: #4CAF50; color: white;'>
                <th style='border: 1px solid #ddd; padding: 8px;'>Nome</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>Marca</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>Preço (R$)</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>Descrição</th>
                <th style='border: 1px solid #ddd; padding: 8px;'>Switch</th>
            </tr>
        </thead>
        <tbody>";

foreach ($teclados as $teclado) {
    $html .= "
        <tr>
            <td style='border: 1px solid #ddd; padding: 8px;'>{$teclado['nome']}</td>
            <td style='border: 1px solid #ddd; padding: 8px;'>{$teclado['marca']}</td>
            <td style='border: 1px solid #ddd; padding: 8px; text-align: right;'>{$teclado['preco']}</td>
            <td style='border: 1px solid #ddd; padding: 8px;'>{$teclado['descricao']}</td>
            <td style='border: 1px solid #ddd; padding: 8px;'>{$teclado['switch']}</td>
        </tr>";
}

$html .= "
        </tbody>
    </table>";

$mpdf->WriteHTML($html);
$mpdf->Output('relatorio_teclados.pdf', 'I');
?>
