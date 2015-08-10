<?php

class Page extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'page');
    }
    public function all()
    {
        $this->load();
        return $this->query;
    }

    public function getParent($id)
    {
        $sql = "SELECT b2.id_page, b2.url
                FROM page as b1
                Left JOIN page as b2 ON (b1.parent = b2.id_page)
                WHERE b1.id_page = '$id'";

        $result =  $this->db->exec($sql);
        return $result[0]['id_page'];
    }

    public function getHtml($id)
    {
        $sql = "select b1.html from html as b1
                JOIN content_link as b2 ON b2.id_page = $id
                WHERE  b1.id_html = b2.id_html;";

        $result =  $this->db->exec($sql);
        return $result[0]['html'];
    }


    public function getTempl()
    {
        parent::__construct($this->db, 'template');
        $this->load();
        return $this->query;
    }


    public function editById($id)
    {
        $this->load(array('id_page=?',$id));
        return $this->query[0];
    }

    public function save_page($id, $html)
    {
        $this->load(array('id_page=?',$id));
        $this->copyFrom('POST');
        $this->update();

        $html = htmlspecialchars($html);

        $sql = "UPDATE html as b1
                JOIN content_link as b2 ON b2.id_page = $id
                SET `html` =  '$html'
                WHERE b1.id_html = b2.id_html;";
        $result =  $this->db->exec($sql);
    }

    public  function add_page($infoPage)
    {
        $this->copyFrom('POST');
        $this->save();
        $idLastPage = $this->get('_id');

        $sql= "INSERT INTO `html` (`id_html` ,`position` ,`name` ,`html` ,`type` ,`order`) VALUES (NULL ,  '',  '".$infoPage['name']."',  'none',  'content',  '0');";
        $this->db->exec($sql);

        $idLastContent= $this->db->lastInsertId();

        $sql= "INSERT INTO  `content_link` (`id_content` ,`id_page` ,`id_html`)VALUES (NULL ,  '".$idLastPage."',  '".$idLastContent."');";
        $this->db->exec($sql);
        #var_dump($infoPage);

    }




}