<?php

class Menu extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'page');
    }

    public function getMenu($url)
    {
        $sql = "SELECT b3.id_menu, b3.name_menu, b3.class, b3.position, b4.ankor, b5.url
                FROM page as b1
                Left JOIN menu_link as b2 ON (b2.id_page = b1.id_page)
                Left JOIN menu as b3 ON (b3.id_menu = b2.id_menu)
                Left JOIN menu_list as b4 ON (b4.id_menu = b3.id_menu)
                Left JOIN page as b5 ON (b5.id_page = b4.id_page)
                WHERE b1.url = '$url'";

        $result = $this->db->exec($sql);
        $arr_menu=[];

        foreach ($result as $item)
        {
            $class = $item['url'] == $url ? "active" : "";
            $arr_menu[$item['position']][] = ['name'=> $item['name_menu'], 'ankor'=> $item['ankor'], 'url'=>$item['url'], 'class'=>$class ];
        }

        return $arr_menu;
    }
}
