<?php

class Modules extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'page');
    }

    public function getModules($url)
    {
        $sql = "SELECT b3.order, b3.position, b3.name, b3.html
                FROM page as b1
                Left JOIN module_link as b2 ON (b2.id_page = b1.id_page)
                Left JOIN html as b3 ON (b3.id_html = b2.id_html)
                WHERE b1.url = '$url'";

        $result = $this->db->exec($sql);
        asort($result);

        return $result;
    }

}
