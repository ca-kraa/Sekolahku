<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_guru', 'nama', 'mataPelajaran', 'nomorTelpon', 'alamat'
    ];

    public function paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
    {
        $perPage = $perPage ?: $this->perPage;

        $page = $page ?: Paginator::resolveCurrentPage($pageName);

        $results = $this->newQuery()
            ->skip(($page - 1) * $perPage)
            ->take($perPage + 1)
            ->get($columns);

        return new Paginator($results, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);
    }
}
