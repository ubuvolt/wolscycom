<?php

/**
 * This is the model class for table "categories".
 *
 * The followings are the available columns in table 'categories':
 * @property integer $id
 * @property string $create
 * @property string $modifi
 * @property string $categ
 * @property integer $priority
 */
class Categories extends CActiveRecord
{
   
    public static $priority = array
            (
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
            );
    
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'categories';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('modifi, categ', 'required'),
            array('priority', 'numerical', 'integerOnly'=>true),
            array('categ', 'length', 'max'=>20),
            array('create', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, create, modifi, categ, priority', 'safe', 'on'=>'search'),
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
            'categ' => 'Categ',
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
        $criteria->compare('categ',$this->categ,true);
        $criteria->compare('priority',$this->priority);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Categories the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    
    /**
     * Method return array whit all categorys name
     * 
     * @return array of strings
     */
    public static function getAllCategs()
    {
        $categs = array();
        
        $criteria = new CDbCriteria();
        $criteria->order = 'priority';
        
        $moje = Categories::model()->findAll($criteria);
        
        if( count($moje) > 0 )
        {
            foreach ($moje as $v) 
            {
                $categs [$v->categ] = $v->categ ;
            }
            
        } else {
            
            return FALSE;
            
        }

        
        return $categs;
    }
}