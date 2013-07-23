<?php

/**
 * This is the model class for table "notificacion".
 *
 * The followings are the available columns in table 'notificacion':
 * @property integer $id_notificacion
 * @property string $registro_notificacion
 * @property string $mensaje
 */
class Notificacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Notificacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notificacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_notificacion, registro_notificacion, mensaje', 'required'),
			array('id_notificacion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_notificacion, registro_notificacion, mensaje', 'safe', 'on'=>'search'),
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
			'id_notificacion' => 'Id Notificacion',
			'registro_notificacion' => 'Registro Notificacion',
			'mensaje' => 'Mensaje',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_notificacion',$this->id_notificacion);
		$criteria->compare('registro_notificacion',$this->registro_notificacion,true);
		$criteria->compare('mensaje',$this->mensaje,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}