<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MmsLog extends Model {

    /**
     * name of the table to which this model associated with.
     * @var type 
     */
    protected $table = "mms-log";

    /**
     * Fillable fields in this table.
     * @var type 
     */
    protected $fillable = ['sid', 'from', 'to', 'body', 'numMedia', 'MediaUrl', 'status'];

}
