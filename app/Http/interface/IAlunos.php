<?php
namespace App\Http\Interface;

interface IAlunos 
{
    public static function getById(int $id): array;
    public static function getAll():array;
    public function getNome():string;
    public function getCurso():string;
    public function getNota():int;

}