<?php namespace Twpars\EloquentTaggable\Test;

use Twpars\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class TestModel
 */
class TestModel extends Model
{

    use Taggable;
    use SoftDeletes;

    /**
     * @inheritdoc
     */
    protected $table = 'test_models';

    /**
     * @inheritdoc
     */
    public $timestamps = false;

    /**
     * @inheritdoc
     */
    protected $fillable = ['title'];
}
