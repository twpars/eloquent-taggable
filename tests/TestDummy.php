<?php namespace Twpars\EloquentTaggable\Test;

use Twpars\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;


/**
 * Class TestDummy
 */
class TestDummy extends Model
{

    use Taggable;

    /**
     * @inheritdoc
     */
    protected $table = 'test_dummies';

    /**
     * @inheritdoc
     */
    public $timestamps = false;

    /**
     * @inheritdoc
     */
    protected $fillable = ['title'];
}
