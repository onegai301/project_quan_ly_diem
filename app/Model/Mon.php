<?php

namespace App\Model;

use DB;

class Mon
{
	public $table = 'mon';
    public function get_all()
    {
    	$array = DB::select("select * from $this->table");
    	return $array;
    }
    public function insert()
    {
    	DB::insert("insert into $this->table(ten_mon,gio_hoc,ma_kieu_thi)
            values (?,?,?)",[
                $this->ten_mon,
                $this->gio_hoc,
                $this->ma_kieu_thi
            ]);
    }
    public function delete()
    {
        DB::delete("delete from $this->table
            where ma_mon = ?",[$this->ma_mon]);
    }
    public function get_one()
    {
        $array = DB::select("select * from $this->table
            join kieu_thi on $this->table.ma_kieu_thi = kieu_thi.ma_kieu_thi
            where ma_mon = ?
            limit 1",[$this->ma_mon]);
        return $array[0];
    }
    public function update()
    {
        DB::update("update $this->table
            set
            ten_mon = ?,
            gio_hoc = ?,
            ma_kieu_thi = ?
            where ma_mon = ?",[
                $this->ten_mon,
                $this->gio_hoc,
                $this->ma_kieu_thi,
                $this->ma_mon
            ]);
    }
}
