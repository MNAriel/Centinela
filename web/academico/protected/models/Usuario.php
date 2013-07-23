<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $contrasenia
 * @property string $email
 * @property string $fecha_registro
 * @property integer $id_tipo
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, usuario, contrasenia, email, fecha_registro', 'required'),
			array('id_usuario, id_tipo', 'numerical', 'integerOnly'=>true),
			array('usuario, contrasenia, email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, usuario, contrasenia, email, fecha_registro, id_tipo', 'safe', 'on'=>'search'),
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
			'tipoacceso'=>array(self::BELONGS TO, 'TipoUsuario', 'tipo_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'contrasenia' => 'Contrasenia',
			'email' => 'Email',
			'fecha_registro' => 'Fecha Registro',
			'id_tipo' => 'Id Tipo',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('contrasenia',$this->contrasenia,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('id_tipo',$this->id_tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}