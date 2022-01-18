<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'codigo' => '',
                'precio' => 1.5,
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'categoria_id' => 1,
                'marca_id' => 1,
            ],
        ];
        parent::init();
    }
}
