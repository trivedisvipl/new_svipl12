<?php

namespace App\DataTables;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use File;


class BlogCategoriesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {


            return (new EloquentDataTable($query))
            // ->addColumn('status', function($data){
            //     if($data->status){
            //         $html = '<button class="btn btn-success status-btn" onclick="statusChange('.$data->id.')">Active</button>';
            //     }else{
            //         $html = '<button class="btn btn-danger status-btn" onclick="statusChange('.$data->id.')">Inactive</button>';
            //     }

            //     return $html;
            // })
            ->addColumn('action', function($data){
                $html = '<button class="btn btn-danger m-1" onclick="deleteData('.$data->id.')"><i class="fa fa-trash"></i></button>';
                $html .= '<a href="'.route("blogcategories.edit",  $data->id).'" class="btn btn-primary m-1"><i class="fa fa-edit"></i></a>';
                return $html;
            })->setRowId('id')->rawColumns([ 'action']);

    }

    /**
     * Get the query source of dataTable.
     */
    public function query(BlogCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('blog-categories-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id')->hidden(true)->searchable(false),
            Column::make('name')->addClass('text-center'),
            // Column::computed('status')->addClass('text-center')->orderable(false)->searchable(false),
            Column::computed('action')->addClass('text-center')->orderable(false)->searchable(false),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'BlogCategories_' . date('YmdHis');
    }
}
