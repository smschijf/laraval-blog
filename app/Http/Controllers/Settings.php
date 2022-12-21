<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Settings {
    private static $instance;

    private $m_ColumnName = [];
    private $m_Data = [];
    private $m_NewData;

    public $m_Length;

    private function __construct()
    {
        $this->m_ColumnName = DB::select('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "page_settings" ORDER BY ORDINAL_POSITION');
        $this->m_Length = count($this->m_ColumnName);
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setData() {
        unset($this->m_ColumnName[0]);
        foreach ($this->m_ColumnName as $column) {
            $this->m_NewData = request($column->COLUMN_NAME);
            if ($column->COLUMN_NAME != null) {
                DB::table('page_settings')->where('id', 1)->update([$column->COLUMN_NAME => $this->m_NewData]);
            }
        }
    }

    public function getData() {
        foreach ($this->m_ColumnName as $column) {
            $this->m_Data[] = DB::table('page_settings')->where('id', 1)->value($column->COLUMN_NAME);
        }
        return $this->m_Data;
    }

    public function returnLength() {
        return $this->m_Length;
    }
}