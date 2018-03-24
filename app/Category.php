<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private $id;
    private $name;

    /**
     * Category constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function blog_posts(){
        return $this->hasMany('App\BlogPost');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param array $name
     */
    public function setName(array $name)
    {
        $this->name = $name;
    }






}
