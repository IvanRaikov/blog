<?php
namespace app\models;
use yii\base\Model;
use app\models\Comment;
use Yii;
class CommentForm extends Model{
    public $comment;
    
    public function rules(){
        return [
            [['comment'],'required'],
            [['comment'],'string','max'=>255]
        ];
    }
    public function save($id){
        $comment = new Comment();
        $comment->article_id = $id;
        $comment->user_id = Yii::$app->user->identity->id;
        $comment->text = htmlspecialchars($this->comment);
        $comment->date = date('Y-m-d');
        return $comment->save();
    }
}