<?php

namespace App\Enums;
  

enum Gender: string{
    case MALE = 'Male';
    case FEMALE = 'Female';
    case OTHER = 'Other';

    public static function getValue(): array 
    {
      return array_column(Gender::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(Gender::cases(),'value','key');
    }
}