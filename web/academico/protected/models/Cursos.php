<?php

/**
 * This is the model class for table "cursos".
 *
 * The followings are the available columns in table 'cursos':
 * @property integer $id_curso
 * @property string $nombre_curso
 * @property integer $limite
 * @property string $fecha_inicio
 * @property string $fecha_conclusion
 */
class Cursos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cursos the static model class
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
		return 'cursos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_curso, nombre_curso, fecha_inicio, fecha_conclusion', 'required'),
			array('id_curso, limite', 'numerical', 'integerOnly'=>true),
			array('nombre_curso', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_curso, nombre_curso, limite, fecha_inicio, fecha_conclusion', 'safe', 'on'=>'search'),
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
			'id_curso' => 'Id Curso',
			'nombre_curso' => 'Nombre Curso',
			'limite' => 'Limite',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_conclusion' => 'Fecha Conclusion',
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

		$criteria->compare('id_curso',$this->id_curso);
		$criteria->compare('nombre_curso',$this->nombre_curso,true);
		$criteria->compare('limite',$this->limite);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_conclusion',$this->fecha_conclusion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}