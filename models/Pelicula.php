<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $ano
 * @property string $duracion
 * @property string $sinopsis
 * @property string $cartel
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['ano', 'duracion'], 'number'],
            [['sinopsis', 'cartel'], 'string'],
            [['titulo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Título',
            'ano' => 'Año',
            'duracion' => 'Duración',
            'sinopsis' => 'Sinopsis',
            'cartel' => 'Cartel',
        ];
    }

    public function getCarteles()
    {
        return $this->cartel;
    }
}
