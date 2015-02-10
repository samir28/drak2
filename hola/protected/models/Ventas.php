<?php

/**
 * This is the model class for table "ventas".
 *
 * The followings are the available columns in table 'ventas':
 * @property integer $id_venta
 * @property string $fecha_venta
 * @property double $monto_fecha
 * @property integer $clientes_id_clientes
 */
class Ventas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ventas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_venta, fecha_venta, monto_fecha, clientes_id_clientes', 'required'),
			array('id_venta, clientes_id_clientes', 'numerical', 'integerOnly'=>true),
			array('monto_fecha', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_venta, fecha_venta, monto_fecha, clientes_id_clientes', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_venta' => 'Numero de venta',
			'fecha_venta' => 'Fecha',
			'monto_fecha' => 'Monto',
			'clientes_id_clientes' => 'Numero de cliente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_venta',$this->id_venta);
		$criteria->compare('fecha_venta',$this->fecha_venta,true);
		$criteria->compare('monto_fecha',$this->monto_fecha);
		$criteria->compare('clientes_id_clientes',$this->clientes_id_clientes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ventas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
