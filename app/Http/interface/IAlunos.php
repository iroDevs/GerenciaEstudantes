<?php
namespace App\Http\Interface;

interface IAlunos 
{
    public static function getById(int $id): array;
    public static function getAll():array;
    public static function delete(int $id):array;
    public function update(int $id):array;
    public function create();
    public function getNome():string;
    public function getCurso():string;
    public function getNota():int;

}