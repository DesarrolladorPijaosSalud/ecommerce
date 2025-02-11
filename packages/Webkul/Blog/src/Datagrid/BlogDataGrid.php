<?php

namespace Webkul\Blog\Http\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class BlogDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        // Usamos el repositorio o directamente la tabla de blogs
        return DB::table('blogs')
            ->select(
                'id',
                'title',
                'created_at'
            );
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        // Columna para el ID
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('blog::admin.index.datagrid.id'),  // Puedes definir tus propios textos en los archivos de idioma
            'type'       => 'integer',
            'filterable' => true,
            'sortable'   => true,
        ]);

        // Columna para el título
        $this->addColumn([
            'index'      => 'title',
            'label'      => trans('blog::admin.index.datagrid.title'),
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        // Columna para la fecha de creación
        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('blog::admin.index.datagrid.created_at'),
            'type'       => 'datetime',
            'sortable'   => true,
        ]);
    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        // Acción para editar
        if (bouncer()->hasPermission('blog.edit')) {
            $this->addAction([
                'icon'   => 'icon-edit',
                'title'  => trans('blog::admin.index.datagrid.edit'),
                'method' => 'GET',
                'url'    => function ($row) {
                    return route('admin.blog.edit', $row->id);
                },
            ]);
        }

        // Acción para eliminar
        if (bouncer()->hasPermission('blog.delete')) {
            $this->addAction([
                'icon'   => 'icon-delete',
                'title'  => trans('blog::admin.index.datagrid.delete'),
                'method' => 'DELETE',
                'url'    => function ($row) {
                    return route('admin.blog.destroy', $row->id);
                },
            ]);
        }
    }
}
