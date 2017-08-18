<?php

namespace HubToDo\Traits\Tests;

use PHPUnit_Framework_TestCase;

/**
 * Class JsonRenderTests.
 *
 * @package HubToDo\Traits\Tests
 */
class JsonRenderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider jsonEncodeProvider
     */
    public function testJsonDecodeSuccess($json)
    {
        $json_render = $this->getMockForTrait(\HubToDo\Traits\JsonRender::class);

        $this->assertInstanceOf(\stdClass::class, $json_render->jsonDecode($json));
    }

    public function jsonEncodeProvider()
    {
        return [
            ['{"b2w": {"main": null, "show": "CARREGADORES", "categories": {"familyId": 4, "categoryId": 18, "subFamilyId": 1, "subCategoryId": 2577}}}'],
            ['{"unit": null, "width": null, "height": 1, "length": 1, "weight": 4, "weight_brute": null, "weight_liquid": null}'],
            ['{"b2w": {"shoptime": {"cost": null, "offer": 84.99, "plots": null, "default": 129.99}, "submarino": {"cost": null, "offer": 84.99, "plots": null, "default": 129.99}, "americanas": {"cost": null, "offer": 84.99, "plots": null, "default": 129.99}}}'],
            ['{"position": null, "quantity": 231, "stock_max": null, "stock_min": null, "cross_docking": 12, "stock_min_order": null}'],
            ['{"ncm": "8513.10.10", "origem": "0"}'],
            ['{"b2w": {"shoptime": "http://busca.shoptime.com.br/busca.php?q=16382511", "submarino": "http://busca.submarino.com.br/busca.php?q=16382511", "americanas": "http://busca.americanas.com.br/busca.php?q=16382511"}}'],
            ['{"b2w": {"shoptime": {"status": "INACTIVE_INACTIVE", "substatus": null, "integrationStatus": null}, "submarino": {"status": "INACTIVE_INACTIVE", "substatus": null, "integrationStatus": null}, "americanas": {"status": "INACTIVE_INACTIVE", "substatus": null, "integrationStatus": null}}}'],
            ['{"id": "POWERPINENG", "ean": ["7896102503708"], "link": {"id": "POWERPINENG", "rel": "product", "href": "https://api-marketplace.bonmarketplace.com.br/product/POWERPINENG"}, "name": "Bateria Externa Power Bank Pineng 10000 mAh (Universal USB) PN-968", "idB2W": "16382511", "price": {"listPrice": 129.99, "sellPrice": 84.99}, "width": 1, "enable": false, "height": 1, "length": 1, "weight": 4, "B2WLinks": {"shoptime": "http://busca.shoptime.com.br/busca.php?q=16382511", "submarino": "http://busca.submarino.com.br/busca.php?q=16382511", "americanas": "http://busca.americanas.com.br/busca.php?q=16382511"}, "urlImage": ["http://www.mercadodasferramentas.com.br/submarino_marketplace/img/PINENG.jpg"], "situation": "INACTIVE", "brandPrices": [{"store": "LOJASAMERICANAS", "listPrice": 129.99, "sellPrice": 84.99}, {"store": "SHOPTIME", "listPrice": 129.99, "sellPrice": 84.99}, {"store": "SUBMARINO", "listPrice": 129.99, "sellPrice": 84.99}], "description": "Powerbank Carregador Bateria Portatil Universal Pineng 10000mAh   Sem Bateria nunca mais Saída USB Duplo Lanterna de Led Leva de 10 à 12 horas para carregar completamente Display em led para visualizar tempo de bateria Chip de reconhecimento de tensão inteligente Detecta automáticamente a tensão   Específicações: Capacidade: 3,7V / 10000 mAh 37Wh Entrada: DC 5V Dois meios de Saída: 5V - 1A / 5V - 2.1 Bateria de Lítio Modelo: PN-968 Itens Inclusos: 1x Power Bank 1x Cabo Carregador Micro USB  ", "crossDocking": 12, "stockQuantity": 231, "marketStructure": {"familyId": 4, "categoryId": 18, "subFamilyId": 1, "subCategoryId": 2577}}'],
        ];
    }
}
