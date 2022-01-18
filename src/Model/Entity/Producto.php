<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo
 * @property string $precio
 * @property string|null $descripcion
 * @property int $categoria_id
 * @property int $marca_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Marca $marca
 */
class Producto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'codigo' => true,
        'precio' => true,
        'descripcion' => true,
        'categoria_id' => true,
        'marca_id' => true,
        'categoria' => true,
        'marca' => true,
    ];
}
