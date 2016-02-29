<?php

/**
 * This is the model class for table "subcategories".
 *
 * The followings are the available columns in table 'subcategories':
 * @property integer $id
 * @property string $create
 * @property string $modifi
 * @property string $subcateg
 * @property integer $categ_name
 * @property integer $priority
 */
class Subcategories extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'subcategories';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('subcateg', 'required'),
            array('priority', 'numerical', 'integerOnly'=>true),
            array('subcateg, categ_name', 'length', 'max'=>60),
            array('create', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, create, modifi, subcateg, categ_name, priority', 'safe', 'on'=>'search'),
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
            'id' => 'ID',
            'create' => 'Create',
            'modifi' => 'Modifi',
            'subcateg' => 'Subcateg',
            'categ_name' => 'Categ Name',
            'priority' => 'Priority',
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

        $criteria->compare('id',$this->id);
        $criteria->compare('create',$this->create,true);
        $criteria->compare('modifi',$this->modifi,true);
        $criteria->compare('subcateg',$this->subcateg,true);
        $criteria->compare('categ_name',$this->categ_name,true);
        $criteria->compare('priority',$this->priority);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Subcategories the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
        
    /**
     * Method return array whit all subcategorys name
     * 
     * @return array of strings
     */
    public static function getAllSubCategs($categ_name = '')
    {
        $subcateg = array();
        
        $criteria = new CDbCriteria();
        $criteria->order = 'priority';
 
        if($categ_name != '')
        {
            $criteria->condition = "categ_name=:categ_name";
            $criteria->params = array(":categ_name"=>$categ_name);
        }
        
        $moje = Subcategories::model()->findAll($criteria);
        foreach ($moje as $v) 
        {
            $subcateg [$v->subcateg] = $v->subcateg ;
        }

        
        return $subcateg;
    }
}
