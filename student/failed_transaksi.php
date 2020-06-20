<?php
    class transaksi {
        public $idcourse;
        public $id_user;
        
        private $connection;
        private $table_name = "transaksi";

        public function __construct($db)
        {
            $this->connection = $db;
        }

        function create($home_id)
        {
            /*if (session_status() == PHP_SESSION_NONE) {
                # code...
                session_start();
            }
            if ($_SESSION['log_status'] == || !isset($_SESSION['log_status'])) {
                # code...
                header('Location');
            }

            if (!$this->checked($idcourse)) {
                # code...

            }*/
            
        }
    }
?>