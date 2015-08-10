<?php

class Menu extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'menu');
    }
    public function all()
    {
        $this->load();
        return $this->query;
    }

    public function filter($filter)
    {
        $sql = "SELECT * FROM  `menu` WHERE  `position` LIKE  '$filter%'";
        $result = $this->db->exec($sql);

        return $result;
    }




    public function editById($id)
    {
        $this->load(array('id_menu=?',$id));

        return $this->query[0];
    }

    public function listById($id)
    {
       $sql = "SELECT *
                FROM page as b1
                Left JOIN menu_list as b2 ON (b2.id_page = b1.id_page)
                WHERE b2.id_menu = '$id'";

       $result = $this->db->exec($sql);

       return $result;
    }




    public function link_pages($id_menu)
    {
        $sql = "SELECT * FROM  `page`;";
        $arr_all_pages = $this->db->exec($sql);

        #var_dump($arr_all_pages);

        function createSUB($col)
        {
            $name='';
            for ($i=1; $i < $col; $i++) {
                $name .= '—';
            }
            return $name;
        }

        foreach ($arr_all_pages as &$item)
        {
            $item['name'] = createSUB($item['level']) . $item['name'];
        }

        $sql = "SELECT b2.id_page FROM  `page` as b1 left JOIN `menu_link` as b2 ON (b1.id_page = b2.id_page) WHERE b2.id_menu = $id_menu";
        $arr_active_pages = $this->db->exec($sql);

         foreach ($arr_active_pages as $item_active)
         {
             foreach ($arr_all_pages as &$item_page) {
                 if ($item_page['id_page'] == $item_active['id_page']) $item_page['active'] = 'true';
             }
        }

        return $arr_all_pages;
    }


    public  function add_menu()
    {
        $this->copyFrom('POST');
        $this->save();
    }

    public function save_menu($id)
    {
        $this->load(array('id_menu=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }

    public function addlist_menu()
    {
        parent::__construct($this->db, 'menu_list');

        $this->copyFrom('POST');
        $this->save();
    }


    public function link_menu($id_menu, $arr_pages)
    {
        $sql = "DELETE FROM `menu_link` WHERE `id_menu` = $id_menu;";
        $this->db->exec($sql);

        foreach ($arr_pages as $item)
        {
            $sql = "INSERT INTO  `menu_link` (`id` ,`id_page` ,`id_menu`) VALUES (NULL ,  '$item',  '$id_menu');";
            $this->db->exec($sql);
        }

    }


}
