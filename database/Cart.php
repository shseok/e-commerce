<?php

class Cart
{

    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->conn)) return null;
        $this->db = $db;
    }

    // cart 테이블에 insert
    public function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->conn != null) {
            if ($params != null) {
                // insert into cart(user_id) values (0)
                // get table columns

                $columns = implode(',', array_keys($params)); // key들을 string으로 함침

                $values = implode(',', array_values($params)); // value들을 string으로 함침

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->conn->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id nad insert into cart table
    public function addToCart($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result) {
                // reload page
                header("Location:" . $_SERVER['PHP_SELF']); // header는 이미 파일로 보내져서 header를 바꿀 수 없음. 따라서, index.php에 ob_start()추가
            }
        }
    }

    public function getSum($arr)
    {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }

            return sprintf('%.2f', $sum);
        }
    }
}
