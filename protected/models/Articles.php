<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $id
 * @property string $create
 * @property string $modifi
 * @property string $categ
 * @property string $groups
 * @property string $title
 * @property string $content
 * @property string $code
 * @property string $result
 * @property integer $writer
 */
class Articles extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
                return array(
                array('modifi, categ, groups, title', 'required'),
                array('writer', 'numerical', 'integerOnly'=>true),
                array('categ, groups', 'length', 'max'=>20),
                array('title', 'length', 'max'=>100),
                array('create, content, code, result', 'safe'),
                // The following rule is used by search().
                // @todo Please remove those attributes that should not be searched.
                array('id, create, modifi, categ, groups, title, content, code, result, writer', 'safe', 'on'=>'search'),
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
			'groups' => 'Groups',
			'title' => 'Title',
			'content' => 'Content',
			'code' => 'Code',
			'result' => 'Result',
			'writer' => 'Writer',
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
		$criteria->compare('categ',$this->categ);
		$criteria->compare('groups',$this->groups);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('result',$this->result,true);
		$criteria->compare('writer',$this->writer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function clenHtmlTitle($str)
    {
    	echo str_replace('<?','&lt;?' , htmlentities($str));
	}
        
    public static function clenHtmlContent($str)
    {
		$str = nl2br($str);
		$str =  str_replace('<?','&lt?' , $str);
		$str =  str_replace('<!','&lt!' , $str);
		$str =  str_replace('<bo','&ltbo' , $str);
		$str =  str_replace('<p','&ltp' , $str);
		$str =  str_replace('<s','&lts' , $str);
		echo   str_replace('<h','&lth' , $str);
    }


	// metoda powinna polaczyc z tablica `user` na podstawie wartosci klucza ID
	// narazie nie pamietam jak dziala zapisywanie postow bo jest problem z id
	public function getWriterName()
	{
		$writer = 'N/A';

		if($this->writer == 1 )
		{
			$writer = 'ubuvolt';
		}
		return $writer;
	}
        
}
