<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class Forum extends Model
{
    protected $fillable = [
        'nama', 'kelas', 'jurusan', 'pesan'
    ];

    public static function paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = null)
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName) ?: 1;
        $results = static::query()
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get($columns);

        $total = static::query()->count();

        return new LengthAwarePaginator(
            $results,
            $total,
            $perPage,
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }
}
