<?php
$config = require("pdocfg.php");
function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class SPDO
{
    private $pdo_data;
    private $pdo_conn;
    private $pdo_resp;

    public
    function __construct($construct_data = NULL)
    {
        global $config;
        try {
            if (!$construct_data) {
                $this->pdo_data = "mysql:" . http_build_query($config, "", ";");
            } else {
                $this->pdo_data = $construct_data;
            }
            $this->pdo_conn = new PDO($this->pdo_data);
            $this->pdo_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $e) {
            echo "<pre>" . $e . "</pre>";
        }
    }

    public
    function send_query($request, $params = NULL)
    {
        try {
            $pdo_quer = $this->pdo_conn->prepare($request);
            if (!$params) {
                $pdo_quer->execute();
            } else {
                $pdo_quer->execute($params);
            }
            $this->pdo_resp = $pdo_quer->fetchAll();
        } catch (Exception $e) {
            echo "<pre>" . $e . "</pre>";
        }
    }

    public
    function response()
    {
        return $this->pdo_resp;
    }

    public
    function dump()
    {
        echo "<pre>";
        var_dump($this->pdo_resp);
        echo "</pre>";
    }

    public
    function __destruct()
    {
        die();
    }

}