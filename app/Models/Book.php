<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    types: ['https://schema.org/Book'],
    normalizationContext: ['groups' => 'book'],
    denormalizationContext: ['groups' => 'book'],
)]
#[ApiProperty(property: 'title', serialize: new Groups(['book']))]
#[ApiProperty(property: 'isbn', serialize: new Groups(['book']))]
#[ApiProperty(property: 'isbn', serialize: new Groups(['book']))]
#[ApiProperty(property: 'description', serialize: new Groups(['book']))]
class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
}
