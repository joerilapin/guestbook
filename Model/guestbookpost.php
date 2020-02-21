<?php

declare(strict_types=1);

class Guestbookpost{

    //properties of the class
    private $title;
    //private $date;
    private $content;
    private $author;
    private $array=[];

    //public functions or methods of the class
    public function getTitle(){
    $this->title=$_POST['title'];
    return $this->title;
    }
    public function getContent(){
        $this->content=$_POST['content'];
        return $this->content;
    }
    public function getAuthor(){
        $this->author=$_POST['author'];
        return $this->author;
    }
    public function getArray(){
        array_push($this->array,
            $this->array['title']=$this->getTitle(),
            $this->array['content']=$this->getContent(),
            $this->array['author']=$this->getAuthor());
        return json_encode($this->array);
    }

}


