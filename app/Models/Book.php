<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model{
        public $timestamps = false;
        protected $primaryKey = 'id';
        protected $table = 'tblbooks';
        // column sa table
        protected $fillable = [
        'bookname', 'yearpublish', 'authorid',
        ];
    }