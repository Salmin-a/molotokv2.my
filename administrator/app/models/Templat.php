<?php

class Templat extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'template');
    }

    public function all()
    {
        $this->load();
        return $this->query;
    }

    public function editById($id)
    {
        $this->load(array('id=?',$id));

        return $this->query[0];
    }

    public function add_template()
    {
        $this->copyFrom('POST');
        $this->save();
    }

    public function save_template($id)
    {

        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }



}