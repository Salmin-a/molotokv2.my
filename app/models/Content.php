<?php

class Content extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'page');
    }

    public function getContent($url)
    {
        $sql = "SELECT *
                FROM  page as b1
                Left JOIN content_link as b2 ON ( b2.id_page = b1.id_page)
                Left JOIN html as b3 ON ( b3.id_html = b2.id_html)
                WHERE  b1.url LIKE  '$url'";
        $result = $this->db->exec($sql);
        return $result[0];
    }

}
