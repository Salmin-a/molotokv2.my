<?php

class Module extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'html');
    }

    public function all()
    {
        $this->load(['type=?', 'module']);
        return $this->query;
    }

    public function editById($id)
    {
        $this->load(array('id_html=?',$id));
        return $this->query[0];
    }

    public function add_module()
    {
        $this->copyFrom('POST');
        $this->save();
    }

    public function save_module($id)
    {
        $this->load(array('id_html=?',$id));

        $this->copyFrom('POST');
        $this->update();
    }

    public function link_pages($id_module)
    {
        $sql = "SELECT * FROM  `page`;";
        $arr_all_pages = $this->db->exec($sql);

        $sql = "SELECT b2.id_page FROM `page` as b1 left JOIN `module_link` as b2 ON (b1.id_page = b2.id_page) WHERE b2.id_html = $id_module";
        $arr_active_pages = $this->db->exec($sql);

        foreach ($arr_active_pages as $item_active)
        {
            foreach ($arr_all_pages as &$item_page) {
                if ($item_page['id_page'] == $item_active['id_page']) $item_page['active'] = 'true';
            }
        }
        return $arr_all_pages;
    }

    public function link_module($id_module, $arr_pages)
    {
        $sql = "DELETE FROM `module_link` WHERE `id_html` = $id_module;";
        $this->db->exec($sql);

        foreach ($arr_pages as $item)
        {
            $sql = "INSERT INTO  `module_link` (`id_link` ,`id_page` ,`id_html`) VALUES (NULL ,  '$item',  '$id_module');";
            $this->db->exec($sql);
        }
    }


}