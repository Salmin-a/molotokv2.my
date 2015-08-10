<?php

/**
 * This is the model class for table "review".
 *
 * The followings are the available columns in table 'review':
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $status
 * @property string $document_no
 * @property string $youtube_link
 * @property string $rating
 * @property string $author
 * @property string $email
 * @property string $review
 * @property string $date
 * @property integer $recommend
 */
class Review extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     *
     * @param string $className
     *            active record class name.
     * @return Review the static model class
     */
    public $image;

    public $remove_image;
    // used by the form to send the file.
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     *
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'review';
    }

    /**
     *
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(
                'author',
                'required',
                'message' => 'Имя обязательно'
            ),
            array(
                'recommend',
                'required'
            ),
            array(
                'date',
                'required',
                'message' => 'Дата обязательна'
            ),
            array(
                'slug',
                'required',
                'message' => 'Алиас обязателен'
            ),
            array(
                'review',
                'required',
                'message' => 'Хотите или нет, а написать отзыв нужно'
            ),
            array(
                'slug',
                'length',
                'max' => 30
            ),
            array(
                'slug',
                'match',
                'not' => true,
                'pattern' => '/[^a-zA-Z0-9_,-]/'
            ),
            array(
                'recommend',
                'numerical',
                'integerOnly' => true
            ),
            array(
                'document_no',
                'length',
                'max' => 128
            ),
            array(
                'email',
                'email',
                'message' => 'Неправильный адрес эл. почты'
            ),
            array(
                'youtube_link',
                'length',
                'max' => 11
            ),
            array(
                'rating, status',
                'length',
                'max' => 1
            ),
            array(
                'rating, status, remove_image',
                'numerical',
                'integerOnly' => true
            ),
            array(
                'author',
                'length',
                'max' => 64
            ),
            array(
                'title',
                'length',
                'max' => 150
            ),
            array(
                'date',
                'date',
                'format' => 'yyyy-M-d'
            ),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array(
                'id, slug, title, document_no, rating, author, email, review, date, recommend',
                'safe',
                'on' => 'search'
            ),
            array(
                'image',
                'file',
                'types' => 'png, gif, jpg',
                'allowEmpty' => true
            )
        );
    }

    public function behaviors()
    {
        return array(
            'recipe' => array(
                'class' => 'ImageARBehavior',
                'attribute' => 'image',
                'extension' => 'png, gif, jpg',
                'prefix' => 'img_',
                'relativeWebRootFolder' => Yii::app()->params['relativeWebRootPath'],
                'useImageMagick' => Yii::app()->params['useImageMagick'],
                'formats' => array(
                    'thumb' => array(
                        'suffix' => '_thumb',
                        'process' => array(
                            'resize' => array(
                                120,
                                120
                            )
                        )
                    ),
                    'large' => array(
                        'suffix' => '_large',
                        'process' => array(
                            'resize' => array(
                                900,
                                900
                            )
                        )
                    ),
                    
                    'normal' => array(
                        'process' => array(
                            'resize' => array(
                                200,
                                200
                            )
                        )
                    )
                ),
                
                'defaultName' => 'default'
            )
        );
    }

    /**
     *
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     *
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'slug' => 'Алиас',
            'document_no' => 'Номер договора',
            'rating' => 'Оценка',
            'author' => 'Имя',
            'email' => 'Эл. почта',
            'review' => 'Содержание отзыва',
            'date' => 'Дата',
            'youtube_link' => 'Код видео YouTube',
            'image' => 'Скан отзыва',
            'status' => 'Статус',
            'remove_image' => 'Удалить этот скан',
            'title' => 'Заголовок',
            'recommend' => 'Рекомендую'
        );
    }

    /**
     *
     * @return string customized rating label
     */
    public function ratingLabel($value)
    {
        return isset(Yii::app()->params['rating'][$value]) ? Yii::app()->params['rating'][$value] : null;
    }

    /**
     *
     * @return string customized status label
     */
    public function statusLabel($value)
    {
        return isset(Yii::app()->params['status'][$value]) ? Yii::app()->params['status'][$value] : null;
    }

    /**
     *
     * @return string customized rating label
     */
    public function ratingStars($value)
    {
        $images = '';
        if (isset(Yii::app()->params['rating'][$value])) {
            for ($i = 0; $i < $value; $i ++) {
                $images .= CHtml::image(Yii::app()->params['imagesPath'] . 'review/rating/star-on.png');
            }
            if ($value < 5) {
                for ($i = 0; $i < 5 - $value; $i ++) {
                    $images .= CHtml::image(Yii::app()->params['imagesPath'] . 'review/rating/star-off.png');
                }
            }
        }
        
        return $images;
    }

    /**
     *
     * @return string links to other rating
     */
    public function other()
    {
        $items = self::model()->findAll('`status` = 2 LIMIT ' . (int) Yii::app()->params['otherLimit']);
        $other = CHtml::openTag('ul');
        foreach ($items as $item) {
            $url = $this->createUrl('review/read', array(
                'slug' => $item->slug
            ));
            if (Yii::app()->request->url != $url)
                $other .= CHtml::openTag('li') . CHtml::link($item->author, $url) . ' (оценка: ' . $item->rating . ')' . CHtml::closeTag('li');
        }
        $other .= CHtml::closeTag('ul');
        return $other;
    }

    /**
     *
     * @return string href for nyroModal
     */
    public function youtubeLink($id, $title, $class = null)
    {
        $pattern = Yii::app()->params['youtubeLinkPattern'];
        $link = str_replace('{ID}', $id, Yii::app()->params['youtubeLinkPattern']);
        return CHtml::link($title, $link, array(
            'class' => $class,
            'target' => '_blank'
        ));
    }

    /**
     *
     * @return string href for nyroModal
     */
    public function imageLink($recipe, $title = null, $class = null)
    {
        $thumb = CHtml::image($recipe->getFileUrl('thumb'));
        return CHtml::link(($title ? $title : $thumb), $recipe->getFileUrl('large'), array(
            'class' => $class,
            'target' => '_blank'
        ));
    }

    public function afterSave()
    {
        parent::afterSave();
        if (isset($this->remove_image) && $this->remove_image) {
            @unlink($this->recipe->getFilePath('thumb'));
            @unlink($this->recipe->getFilePath('normal'));
            @unlink($this->recipe->getFilePath('large'));
        }
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
        $criteria = new CDbCriteria();
        
        $criteria->compare('id', $this->id);
        $criteria->compare('status', $this->status);
        $criteria->compare('document_no', $this->document_no, true);
        $criteria->compare('rating', $this->rating, true);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('review', $this->review, true);
        $criteria->compare('date', $this->date, true);
        
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder' => 'date desc'
            )
        ));
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function publicSearch()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.
        $criteria = new CDbCriteria();
        $criteria->addCondition('`status` = 2');
        $criteria->compare('id', $this->id);
        $criteria->compare('status', $this->status);
        $criteria->compare('document_no', $this->document_no, true);
        $criteria->compare('rating', $this->rating, true);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('review', $this->review, true);
        $criteria->compare('date', $this->date, true);
        
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageVar' => 's',
                'route' => '/'
            ),
            'sort' => array(
                'defaultOrder' => 'date desc'
            )
        ));
    }
}
