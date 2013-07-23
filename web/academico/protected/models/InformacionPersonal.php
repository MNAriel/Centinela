<?php

/**
 * This is the model class for table "informacion_personal".
 *
 * The followings are the available columns in table 'informacion_personal':
 * @property integer $if_informacion
 * @property integer $id_usuario
 * @property string $nombres
 * @property string $apellido_paterno
 * @property string $apellido_materno
 */
class InformacionPersonal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InformacionPersonal the static model class
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
		return 'informacion_personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('if_informacion, id_usuario', 'required'),
			array('if_informacion, id_usuario', 'numerical', 'integerOnly'=>true),
			array('nombres, apellido_paterno, apellido_materno', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('if_informacion, id_usuario, nombres, apellido_paterno, apellido_materno', 'safe', 'on'=>'search'),
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
			'usuariologin'=>array(self::HAS_ONE, 'Usuario', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'if_informacion' => 'If Informacion',
			'id_usuario' => 'Id Usuario',
			'nombres' => 'Nombres',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
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

		$criteria->compare('if_informacion',$this->if_informacion);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}