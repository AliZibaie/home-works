<?php


// ایجاد کلاس والد User
class User
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

// ایجاد کلاس GoldenUser
class GoldenUser extends User
{
    use CanArchive, CanLike, CanComment;
}

// ایجاد کلاس SilverUser
class SilverUser extends User
{
    use CanLike, CanComment;
}

// ایجاد کلاس NormalUser
class NormalUser extends User
{
    use CanLike;
}

// ایجاد کلاس Post
class Post implements Serializable
{
    private $title;
    private $content;
    private $comments = [];
    private $likes = 0;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function addComment($comment, $user)
    {
        $this->comments[] = [
            'comment' => $comment,
            'user' => $user
        ];
    }

    public function incrementLikes()
    {
        $this->likes++;
    }

    public function serialize()
    {
        return serialize([
            'title' => $this->title,
            'content' => $this->content,
            'comments' => $this->comments,
            'likes' => $this->likes
        ]);
    }

    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->comments = $data['comments'];
        $this->likes = $data['likes'];
    }
}

// اضافه کردن trait CanArchive
trait CanArchive
{
    public function archivePost($post)
    {
        // کد آرشیو پست
    }
}

// اضافه کردن trait CanLike
trait CanLike
{
    public function likePost($post)
    {
        $post->incrementLikes();
    }
}

// اضافه کردن trait CanComment
trait CanComment
{
    public function commentPost($post, $comment)
    {
        $post->addComment($comment, $this);
    }
}

// استفاده از autoloader composer
require 'vendor/autoload.php';

// ساختن نمونه‌های کاربران
$goldenUser = new GoldenUser('John');
$silverUser = new SilverUser('Jane');
$normalUser = new NormalUser('Alice');

// ساختن نمونه پست
$post = new Post('عنوان پست', 'محتوای پست');

// استفاده از قابلیت ها توسط کاربران
$goldenUser->archivePost($post);
$silverUser->likePost($post);
$silverUser->commentPost($post, 'نظر من');


